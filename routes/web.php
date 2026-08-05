<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('home');
});

Route::get('/trademark-registration-nepal', function () {
    return view('trademark-registration-country');
});
Route::get('/trademark-registration-countries', function () {
    return view('countries');
});
Route::get('/about-us', function () {
    return view('about');
});

Route::get('/our-services', function () {
    return view('services');
});
Route::get('/our-team', function () {
    return view('team');
});
Route::get('/contact-us', function () {
    return view('contact');
});
