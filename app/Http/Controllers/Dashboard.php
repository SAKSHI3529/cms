<?php

namespace App\Http\Controllers;

use App\Models\parcels;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Auth;
use DB;

class Dashboard extends Controller
{
    public function index()
    {
        $parcels= parcels::limit(5)->latest()->get();
        return view('dashboard.index',compact('parcels')) ;
    }
}
