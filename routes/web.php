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
Route::view('hostProfile','host_profile/host_profile')->middleware('host');
Route::view('userProfile','user_profile/user_profile')->middleware('user');
Route::get('sessiontest','EventController@session');
Route::view('game','game/mygame');
Route::view('event','individual_event');
Route::get('send','MailController@send');
Route::view('mail','mailtest');
Route::post('mail','MailController@postMail');
Route::get('verifymail/{hemail}/{huid}','MailController@mailVerify');
Route::get('eventVerify/{huid}/{euid}','MailController@eventVerify');
Route::view('test','test');
Route::post('imageupload','EventController@imageUpload');
Route::post('userRegister','EventController@userUpload');
Route::view('payment','booking/payment');



Route::middleware('ajax')->group(function() {

    Route::get('getEvent','EventController@getEvent');
    Route::get('getMap','HomeController@getMap');
    Route::get('getLocation','HomeController@getLocation');
    Route::get('host_left_navbar','HostController@getHostLeftNav');
    Route::get('host_middle_navbar','HostController@getHostMiddleNav');
    Route::post('host/eventPost','EventController@eventPost');
    //all events call using ajax
    Route::get('host_all_events','HostController@getHostAllEvents');
    Route::get('getLiveMusic',"EventController@getLiveMusic");
    Route::get('getConcerts',"EventController@getConcerts");
    Route::get('getParty',"EventController@getParty");
    Route::get('getMovies',"EventController@getMovies");
    Route::get('getAdventure',"EventController@getAdventure");
    Route::get('getSports',"EventController@getSports");
    Route::get('getEductional',"EventController@getEductional");
    Route::get('getArtAndLiterature',"EventController@getArtAndLiterature");
    Route::get('getExhibitionAndSeminar',"EventController@getExhibitionAndSeminar");
    Route::get('getBusinessAndSocial',"EventController@getBusinessAndSocial");
    Route::get('getOthers',"EventController@getOthers");

    //event photo upload
    Route::post('event/ePhotoUpload',"EventController@ePhotoUpload");



  // Route::post('host/login','LRController@hostLogin');
  // Route::post('user/login','LRController@userLogin');
});
