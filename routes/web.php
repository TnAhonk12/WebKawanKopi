<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\CeritaController;

Route::get('/', [HomeController::class, 'index']);

Route::get('/cerita/{slug}', [CeritaController::class, 'show'])->name('cerita.detail');


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

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/berita-kawan', function () {
    return view('beritaKawanItem');
});
