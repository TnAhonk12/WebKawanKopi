<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\CeritaController;
use App\Http\Controllers\FindUsController;
use App\Http\Controllers\RoasteryController;

Route::get('/', [HomeController::class, 'index']);

Route::get('/cerita/{slug}', [CeritaController::class, 'show'])->name('cerita.detail');

Route::get('/ourstore', [FindUsController::class, 'index']);
Route::get('/ourstore-item/{id}', [FindUsController::class, 'show'])->name('ourstore.item');

Route::get('/roastery', [RoasteryController::class, 'index'])->name('roastery.index');
Route::get('/roastery-item/{id}', [RoasteryController::class, 'show'])->name('roastery.show');


Route::get('/contact', function () {
    return view('contact');
});

Route::get('/berita-kawan', function () {
    return view('beritaKawanItem');
});
