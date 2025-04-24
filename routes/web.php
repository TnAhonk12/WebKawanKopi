<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/homepage', function () {
    return view('index');
});

Route::get('/test', function () {
    return view('test');
});

