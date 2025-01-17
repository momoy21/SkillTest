<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
});

Route::post('/thank-you', function () {
    return view('pages.thank-you');
})->name('thank-you');

