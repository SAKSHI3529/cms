<?php

namespace App\Http\Controllers;

use App\Models\customer;
use Illuminate\Http\Request;
use DB;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Auth;
use AppRating;

class Usercontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('users.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = DB::table('roles')->select('*')->get();
       
   
        return view('users.create',compact('roles'));
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
             'contact'=>'required|max:10'
        ]);
        $path = $request->file('resume')->store('resume');
        $request -> merge([
            'password' => Hash::make($request->contact),
            'resume' =>$path
           
        ]);

        

        
        

        $inputs = $request->input();
        // return $inputs;
        try {
            $user = User::Create($inputs);
            $user->assignRole($request->roles);
            if($user)
            flash('Users with name '.$user->name.' is created, Successfully!')->important();
        else
            flash('Unable to add Users');
       
        } catch (\Exception $e) {
            flash(' something went wrong '.$e->getMessage()) ->error()->important(); 
        }
        return back()->withInput();
       
       
    //     $rating = new AppRating;
    //      $rating->rating = 5;
    //   $rating->user_id = Auth::id();
    //   $post->ratings()->save($rating);
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
    public function edit(Request $request,$id)
    {
        $u = user :: find($id);
        $roles = DB::table('roles')->select('*')->get();
        return view('users.edit')->with("user",$u)->with("roles",$roles);

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
        if($request->resume){

            $path = $request->file('resume')->store('resume');
            $request -> merge([
                
                'resume' =>$path
               
            ]);
        }
       
        $input = $request -> input();
        $u= user:: find ($id);
        $u-> update($input);
        $u->syncRoles($request->roles);
        return redirect()-> route("users.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $u = User:: find($id);
        $u -> delete();
        return back();
    }

    public function showprofile(){
        return view('profile.index');
    }

    public function profileUpdate(Request $request)
    {
        $input = $request -> input();
        // return $input;
        $u = $request->user();
        $u-> update($input);

        if($u)
            flash('Profile Updated')->important();
        else
            flash('Unable to save changes');

        return back();

        
        
    }

    public function reviewsubmited(Request $request)
    {
        $request->validate(
            [
                "email"=>"required|unique:customer"
            ]
        );
        $inputs = $request->input();
        $cum = customer::create($inputs);
        flash("Submmited");
        return back();
    }


    public function resetPassword(Request $request){
        $currentpassword = $request->currentpassword;
        $newpassword  = $request->newpassword;
        $confirmpassword  = $request->confirmpassword;

        if($confirmpassword==$newpassword)
        {
    
        if(!Hash::check($currentpassword,Auth::user()->password)){
            flash('The specified password does not match');
         
         }
       else{
        $request->user()->fill(['password' => Hash::make($newpassword)])->save();
             flash('Updated Successfully') ;
    
         }
    }
    else{
        flash('Confirm password is incorrect, Try Again!!');
    }
    return back();

}

// public function postStar (Request $request, Post $post) {
//     $rating = new Rating;
//     $rating->user_id = Auth::id();
//     $rating->rating = $request->input('star');
//     $post->ratings()->save($rating);
//     return redirect()->back();
// }
}
