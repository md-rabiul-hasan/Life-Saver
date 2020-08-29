<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(["namespace"=>"Backend","as"=>"backend."],function(){
    // Division Controller 
    Route::get('/division','DivisionController@index')->name('division.index');

    // District Controller
    Route::get('/district','DistrictController@index')->name('district.index');
});
