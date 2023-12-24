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
Route::get('/branch', function () {
      return view('branch.create');
  });
 Route::get('/branch', function () {
      return view('branch.index');
 });


 //Route::resource('/branch',"BranchController" );


 Route::get('/parcels', function () {
    return view('parcels.create');
});






Route::get('/home', 'HomeController@index')->name('home');
Route::get('/parcels', function () {
    return view('parcels.create');
});