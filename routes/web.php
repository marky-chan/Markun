<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('homepage');
});

Route::get('/about', function () {
    return view('aboutpage');
});

Route::get('/contact', function () {
    return view('contactpage');
});
