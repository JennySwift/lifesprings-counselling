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
    return view('home');
});

Route::get('/service', function () {
    return view('service');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/appointment-and-contact', function () {
    return view('appointment-and-contact');
});
