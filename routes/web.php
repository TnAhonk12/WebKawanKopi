<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/ourstore', function () {
    return view('ourStore');
});

Route::get('/ourstore-item', function () {
    return view('ourStoreItem');
});

Route::get('/roastery', function () {
    return view('roastery');
});

Route::get('/roastery-item', function () {
    return view('roasteryItem');
});


