<?php


Route::get('/admin', function () {
    return view('admin');
});

Route::get('home','PageController@home');

Route::get('/event/{eventname}','EventsController@event') ;

Route::get('/test', function () {
    return view('FrontEnd.test');
});

//get all events
Route::get('/getEvents','EventsController@getEvents') ;

//get events list on a date
Route::get('/getEvents/{date}','EventsController@getEventsOnDate') ;

//show all events on a date
Route::get('/showAllEvents/{date}','EventsController@showAllEvents') ;





