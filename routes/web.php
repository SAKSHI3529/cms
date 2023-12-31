<?php

use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::middleware(['auth'])->group( function()
{
    Route::get('/', function () {
        return view('welcome');
    });
    
    Route::get('/dashboard', function () {
        return view("dashboard.index");
    });
    
    Route::get('/blank', function () {
        return view('blank');
    });
    
    Route::get('/users', function () {
        return view('users.create');
    });
    
     Route::resource('/branch',"BranchController" );
    Route::resource('/parcels',"ParcelsController" );
    
    
});

Route::get('/traking', function () {
    return view('traking.create');
});
Route::get('/reports', function () {
    return view('reports.create');
});
