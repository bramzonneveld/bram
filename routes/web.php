<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('intro');
});

Route::get('/home', function () {
    return view('home');
});