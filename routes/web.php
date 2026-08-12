<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CountryPageController;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get(
    '/trademark-registration-countries',
    [CountryPageController::class, 'index']
)->name('trademark.countries');

Route::get('/', function () {return view('home');});
Route::get('/trademark-registration-{slug}', [CountryPageController::class, 'show',])->name('country.show');

// Route::get('/trademark-registration-nepal', function () {
//     return view('trademark-registration-country');
// });

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

/*
|--------------------------------------------------------------------------
| Enquiry Form Routes
|--------------------------------------------------------------------------
*/

// Form submit route
Route::post(
    '/enquiry-submit',
    [CountryPageController::class, 'submit']
)->name('enquiry.submit');

// URL direct open karne par home/contact page par redirect
Route::get('/enquiry-submit', function () {
    return redirect('/')->with(
        'info',
        'Please fill out the enquiry form.'
    );
});