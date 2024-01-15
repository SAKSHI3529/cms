<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Branch;
use App\models\tracking;
use App\models\customer;
use App\models\parcels;
use App\Notifications\ParcalUpdate;
use Illuminate\Support\Facades\Notification;

use DB;

class LandingPageController extends Controller
{
    public function store(Request $request )
    {
        $user=$request->user();
       
        // return $user;
        
        $request->validate([
            'senderName' => 'required|max:255',
            'receiverName' => 'required',
            
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
    public function index()
    {
       
        return view('landingPage.orderform');
    }

    public function landingPageShow(){
        $reviews = customer::latest()->limit(5)->get();
        
        return view('landingPage.index', compact('reviews'));
    }

    
}
