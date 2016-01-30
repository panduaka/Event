<?php


Route::get('/', function () {
    return view('admin/admin_widget');
});


// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
//Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

// Route to Dashboard/Admin panel
Route::get('/home', 'AdminPagesController@home');

// Route to add user
Route::get('create_user', 'AdminPagesController@create_user');
   

