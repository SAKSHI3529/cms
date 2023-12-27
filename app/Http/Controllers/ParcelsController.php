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
    public function store(Request $request)
    {
        //
        $inputs=$request->input();
        $par=parcels::create($inputs);
        return view();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\parcels  $parcels
     * @return \Illuminate\Http\Response
     */
    public function show(parcels $parcels)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\parcels  $parcels
     * @return \Illuminate\Http\Response
     */
    public function edit(parcels $parcels)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\parcels  $parcels
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, parcels $parcels)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\parcels  $parcels
     * @return \Illuminate\Http\Response
     */
    public function destroy(parcels $parcels)
    {
        //
    }
}
