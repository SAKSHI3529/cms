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
    
    Route::resource('/users', "Usercontroller");

    
     Route::resource('/branch',"BranchController" );
    Route::resource('/parcels',"ParcelsController" );
    Route::resource('/roles',"RoleController" );
    
    
});
Route::resource('/tracking',"TrackingController" );


Route::get('/parcels-status', "TrackingController@parcelStatus");

Route::get('/reports/{refno}','ParcelsController@invoicepage');


Route::get('/landingPage/home', function () {
    return view('landingPage.home.index');
});

Route::get('/profile', function () {
    return view('profile.index');
});