<?php

namespace App\Http\Controllers;

use App\Models\parcels;
use Illuminate\Http\Request;

class ParcelsController extends Controller
{
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
        //
        return view('parcels.create');
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
            'userID'=>$user->id
        ]);
        $inputs=$request->input();


     
        $par=parcels::create($inputs);
        // return back();
        if($par)
        flash('parcel is added')->important();
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
        return view('parcels.detail', compact('parcel'));
        
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
}
