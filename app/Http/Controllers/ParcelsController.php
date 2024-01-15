<?php

namespace App\Http\Controllers;

use App\Models\parcels;
use Illuminate\Http\Request;
use App\Models\Branch;
use App\Notifications\ParcalUpdate;
use Illuminate\Support\Facades\Notification;


class ParcelsController extends Controller
{
    public function __construct()
    {
    $this->middleware(['permission:parcel-create'])->only('create');
    $this->middleware(['permission:parcel-list'])->only('index');
    $this->middleware(['permission:parcel-view']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $parcels = parcels::all(); 
        // return $parcels;
        return view('parcels.index',compact('parcels'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $branchs=Branch::all();
        return view('parcels.create' , compact('branchs'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request )
    {
        $user=$request->user();
       
        // return $user;
        
        $request->validate([
            'senderName' => 'required|max:255',
            'receiverName' => 'required',
            'BranchProcessed'=>'required',
            'PickupBranch'=>'required|max:100'
        ]);
        //
        $rno = rand();
        $str = "cms" . $rno;

        $request -> merge([
            'referanceNumber' => $str,
            'userID'=>$user->id,
           
        ]);
        $inputs=$request->input();


     
        $par=parcels::create($inputs);
        try{
            Notification::route('mail', $par->email)->notify(new ParcalUpdate($par));
        }catch(\Exception $e){

        }
           
        // return back();
        if($par)
        flash('Parcel placed Successfully!')->important();
        else
        flash('Unable to load your details ');
        return back()->withInput();


        
    }
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\parcels  $parcels
     * @return \Illuminate\Http\Response
     */
    public function show( $id)
    {
        $parcel= parcels::find($id);
        return view('parcels.detail',compact('parcel'));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\parcels  $parcels
     * @return \Illuminate\Http\Response
     */
    public function edit(parcels $req,$id)
    {
        //
        $p = parcels :: find($id);
        return view('parcels.edit')->with("parcels",$p);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\parcels  $parcels
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $input = $request -> input();
        $p = parcels :: find ($id);
        $p-> update($input);
        return redirect()-> route("parcels.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\parcels  $parcels
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $p = parcels:: find($id);
        $p -> delete();
        return back();
    }

    // public function parcelStatus(){

    //     $branchs=Branch::all();
    //     return view('parcels.status' , compact('branchs'));
        
    
    public function invoicepage($refno)
    {
       $par= parcels::select('*')->where("referanceNumber",$refno)->first();
        // return $par;
        return view('reports.create' , compact('par'));
    }

    

  
}

