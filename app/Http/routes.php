<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {

    return view('FrontEnd.home');

});

Route::get('admin',function(){

    return view('admin/admin_widget');
});

Route::get('mail', function () {
    return view('admin/mail');
});
Route::get('calendar', function () {
    return view('admin/calendar');

});

Route::get('home','PageController@home');
Route::get('test','PageController@test');