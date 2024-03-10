<?php

namespace App\Http\Controllers;

use App\Models\parcels;
use App\Models\Branch;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Auth;
use DB;

class Dashboard extends Controller
{
    public function index()
    {
        $parcels= parcels::limit(5)->latest()->get();
        $parcelscounts= parcels::all()->count();
        
        $parcelCount = parcels::where('delivaryboy_id', Auth::id())->count();

        
        $todaysparcelscounts= parcels::whereDate("created_at",date("Y-m-d"))->get()->count();
        $branchscounts = Branch::all()->count();
        $userscounts = User::all()->count();
        $p = DB::table('parcels')
        ->sum('parcels.price');
        $pr=DB::table('parcels')
       ->whereDate("created_at",date("Y-m-d")) ->sum('parcels.price');

        
        return view('dashboard.index',compact('parcels','branchscounts','parcelCount','parcelscounts','userscounts','p','todaysparcelscounts','pr'));
    }
    
}
