<?php


Route::get('/admin', function () {
    return view('admin');
});

Route::get('/home', function () {
    return view('FrontEnd.Home');
});

Route::get('/test', function () {
    return view('FrontEnd.test');
});