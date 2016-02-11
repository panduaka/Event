<?php

// Route to Dashboard/Admin panel
Route::get('/', 'AdminPagesController@open');

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...

Route::post('auth/register', 'Auth\AuthController@postRegister');
Route::get('auth/register', 'Auth\AuthController@getRegister');


// Routes in Admin Panel
Route::resource('event/','EventController',[
    'except' => ['edit','update ']
]);
Route::get('event/{id}/edit', 'EventController@edit');
Route::patch('event/{id}/update','EventController@update');

// Route to Dashboard/Admin panel
Route::get('/home', 'AdminPagesController@home');

// Route to add user
Route::get('create_user', 'AdminPagesController@create_user');

//*****************Frontend************************//

Route::get('homePage','PageController@home');

Route::get('/event/{eventname}','FrontEventsController@event') ;

Route::get('/test', function () {
    return view('FrontEnd.test');
});

//get all events
Route::get('/getEvents','FrontEventsController@getEvents') ;

//get events list on a date
Route::get('/getEvents/{date}','FrontEventsController@getEventsOnDate') ;

//show all events on a date
Route::get('/showAllEvents/{date}','FrontEventsController@showAllEvents') ;
