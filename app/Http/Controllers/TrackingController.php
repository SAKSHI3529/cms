<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use App\models\tracking;
use App\models\parcels;
use App\Notifications\ParcalDelivared;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class TrackingController extends Controller
{
    public function __construct()
    {
   
   
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $branchs=Branch::all();
        return view('tracking.search',compact('branchs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $request->validate([
            'referanceNumber' => 'required',
            'branch' => 'required',
            'trackinginfo'=>'required',
        ]);

        $parcle = parcels::where("referanceNumber", $request->referanceNumber)->first();

        $inputs = $request->input();
        $track = tracking::Create($inputs);


        try{
            if($request->trackinginfo=="Delivered")
                Notification::route('mail', $parcle->email)->notify(new ParcalDelivared($track));
        }catch(\Exception $e){

        }

        if($track)
            flash('Tracking status updated')->important();
        else
            flash('Unable to update status');
        return back()->withInput();

        
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\models\tracking  $tracking
     * @return \Illuminate\Http\Response
     */
    public function show(tracking $tracking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\models\tracking  $tracking
     * @return \Illuminate\Http\Response
     */
    public function edit(tracking $tracking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\models\tracking  $tracking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tracking $tracking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\models\tracking  $tracking
     * @return \Illuminate\Http\Response
     */
    public function destroy(tracking $tracking)
    {
        //
    }

    // public function landingPageShow(){
    //     return view('landingpage.index');
    // }

    public function parcelStatus(){
       // return 'hi';
        $branchs=Branch::all();
        return view('tracking.search' , compact('branchs'));
        
    }

    
    public function track($refno){
        
        $details = parcels::where('referanceNumber',$refno)->first();
        if(!$details){
            
            flash("Invliad Referance Number");
            return back();
        }
        $track_details = tracking::where('referanceNumber',$refno)->get();
        return view('landingPage.tracking',compact('details','track_details'));
    }

   

}
