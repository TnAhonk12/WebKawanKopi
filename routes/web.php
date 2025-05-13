<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\CeritaController;
use App\Http\Controllers\FindUsController;

Route::get('/', [HomeController::class, 'index']);

Route::get('/cerita/{slug}', [CeritaController::class, 'show'])->name('cerita.detail');

Route::get('/ourstore', [FindUsController::class, 'index']);
Route::get('/ourstore-item/{id}', [FindUsController::class, 'show'])->name('ourstore.item');


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
