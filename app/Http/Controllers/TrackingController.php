<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use App\models\tracking;
use Illuminate\Http\Request;

class TrackingController extends Controller
{
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

        $inputs = $request->input();
        $track = tracking::Create($inputs);
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

    public function parcelStatus(){
       // return 'hi';
        $branchs=Branch::all();
        return view('tracking.search' , compact('branchs'));
        
    }
}
