<?php

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
    return view('home');
});

Route::post('host/register','LRController@hostRegister');
Route::post('user/register','LRController@userRegister');
Route::view('hostRegister','alt_host_register');
Route::view('hostLogin','alt_host_login');
Route::view('userRegister','alt_user_register');
Route::view('userLogin','alt_user_login');
Route::post('user/login','LRController@userLogin');
Route::post('host/login','LRController@hostLogin');
Route::get('signout','LRController@signout');
Route::view('hostProfile','host/host')->middleware('host');
Route::view('userProfile','user/user')->middleware('user');
Route::get('sessiontest','EventController@session');
Route::view('map','map/map');


Route::middleware('ajax')->group(function() {

    Route::get('getEvent','EventController@getEvent');
    Route::post('host/eventPost','EventController@eventPost');
    Route::get('getMap','HomeController@getMap');
    Route::get('getLocation','HomeController@getLocation');

  // Route::post('host/login','LRController@hostLogin');
  // Route::post('user/login','LRController@userLogin');
});
