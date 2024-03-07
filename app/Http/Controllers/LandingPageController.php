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
        
       
        // return $user;
        
        $request->validate([
            'senderName' => 'required|max:255',
            'receiverName' => 'required',
            'sendercontact'=>'required|min:10',
            'receivercontact'=>'required|min:10',
            'email'=>'required'
            
        ]);
        //
        $rno = rand();
        $str = "cms" . $rno;

        $request -> merge([
            'referanceNumber' => $str,
            
           
        ]);
        $inputs=$request->input();


     
        $par=parcels::create($inputs);
        try{
            Notification::route('mail', $par->email)->notify(new ParcalUpdate($par));
        }catch(\Exception $e){
       }
           
        
        if($par){
            flash('Parcel placed Successfully!')->important();
            return redirect()->to('/successfull/'.$par->referanceNumber);
        }
      

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

    public function orderSuccessfull(Request $request , $refid){
        $par= parcels::select('*')->where("referanceNumber",$refid)->first();
        // return $par;
        return view('landingPage.successfullOrder' , compact('par'));
    }
    
}
