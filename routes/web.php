<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('destinations');
})->name('destinations');

Route::get('/gems', function () {
    return view('gems');
})->name('gems');

Route::get('/log', function () {
    return view('log');
})->name('log');

Route::get('/bookings', function () {
    return view('bookings');
})->name('bookings');
