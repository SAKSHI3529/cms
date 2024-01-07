<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleController extends Controller
{
    public function __construct()
    {
    
    $this->middleware(['permission:role-view']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = DB::table('roles')->select('*')->get();
       
        return view('roles.index',compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id )
    {
        $role = role:: find($id);
        $role -> delete();
        return back();
    }

    public function permissions($rolename){
        $permissions = Permission::all();
        $role = role::where('name',$rolename)->first();
        $user_permissions = $role->permissions->pluck('name');
        return view('roles.permissions',compact('permissions','rolename','user_permissions'));
    }

    public function updatePermssions(Request $request,$role){
        $permissions =$request->permissions;
        // return $permissions;
        $role = role::where('name',$role)->first();
        $role->syncPermissions( $permissions );
        $user_permissions = $role->permissions->pluck('name');
        flash("permssions added");
        return back()->with('user_permissions',$user_permissions);
    }

    
}
