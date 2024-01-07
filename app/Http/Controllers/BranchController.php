<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use Illuminate\Http\Request;
use DB;
class BranchController extends Controller
{
    public function __construct()
    {
    $this->middleware(['permission:branch-create'])->only('create');
    $this->middleware(['permission:branch-list'])->only('index');
    $this->middleware(['permission:branch-view']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $branchs = Branch::all();
        return view('branch.index',compact('branchs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $cities = DB::table('cities')->select('*')->get();
        $states = DB::table('states')->select('*')->get();
    
        return view('branch.create',compact('states','cities'));
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
            'name' => 'required|max:255',
            'ad_line' => 'required',
            'zip_code'=>'required',
            'contact'=>'required|max:15'
        ]);

        $inputs = $request->input();
        $branch = Branch::Create($inputs);
        if($branch)
            flash('Branch with name '.$branch->name.' is created')->important();
        else
            flash('Unable to create branch');
        return back()->withInput();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Branch  $branch
     * @return \Illuminate\Http\Response
     */
    public function show(Branch $branch)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Branch  $branch
     * @return \Illuminate\Http\Response
     */
    public function edit(Branch $req , $id)
    {
        $cities = DB::table('cities')->select('*')->get();
        $states = DB::table('states')->select('*')->get();
    
        
        $b = branch :: find($id);
        return view('branch.edit',compact('states','cities'))->with("branch",$b);
        // return view ("branch.edit")
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Branch  $branch
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request ,$id)
    {
        $input = $request -> input();
        $b = branch :: find ($id);
        $b-> update($input);
        return redirect()-> route("branch.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Branch  $branch
     * @return \Illuminate\Http\Response
     */
    public function destroy($id )
    {
        $b = branch:: find($id);
        $b -> delete();
        return back();
    }
}
