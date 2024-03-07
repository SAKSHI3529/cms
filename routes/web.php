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
    


   
    
    Route::get('/dashboard',"Dashboard@index");
    
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


Route::get('/', "landingPageController@landingPageShow");
Route::get('/track/{id}', "TrackingController@track");

Route::POST('/orderform',"LandingPageController@store" );

Route::GET('/orderform',"LandingPageController@index" );
Route::GET('/successfull/{refid}',"LandingPageController@orderSuccessfull" );
// Route::get('/reports/create', 'LandingPage@store')->name('reports.create');



Route::get('/profile',"Usercontroller@showprofile" );
Route::post('/profile',"Usercontroller@profileUpdate" );
Route::get('/permissions/{role}',"RoleController@permissions" );
Route::post('/update-permissions/{role}',"RoleController@updatePermssions" );

Route::post('/reviewsubmited','Usercontroller@reviewsubmited');


Route::post('/resetpassword','Usercontroller@resetPassword');




