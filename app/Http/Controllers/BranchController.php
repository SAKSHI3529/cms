<?php

namespace App\Http\Controllers;

use App\cms\branch;
use CreateBranchesTable;
use Illuminate\Http\Request;

class BranchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $branch= branch::all();
        return view("branch.index")->with("branch", $branch);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("branch.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      //  $inputs=$request->input();
        //$b=branches::create($inputs);
       // $inputs = $request->only(['name', 'address', 'contact']);
        //$branch = branch::create($inputs);
       // flash('success: branch created');
       // return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\cms\branch  $branch
     * @return \Illuminate\Http\Response
     */
    public function show(branch $branch)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\cms\branch  $branch
     * @return \Illuminate\Http\Response
     */
    public function edit(branch $branch)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\cms\branch  $branch
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, branch $branch)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\cms\branch  $branch
     * @return \Illuminate\Http\Response
     */
    public function destroy(branch $branch)
    {
        //
    }
}
