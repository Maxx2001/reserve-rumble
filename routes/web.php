<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\UserMediaController;

Route::get('/', HomePageController::class)->name('home');

Route::get('/series', [MediaController::class, 'series'])->name('series');
Route::get('/movies', [MediaController::class, 'movies'])->name('movies');
Route::resource('media', MediaController::class)->only('show');

Route::resource('genres', GenreController::class)->only('index', 'show');
Route::get('/top-boxoffice', [MediaController::class, 'topBoxoffice'])->name('topBoxoffice');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth'])->group(function () {
    Route::resource('user-media', UserMediaController::class)->only('index', 'store', 'destroy');
});

require __DIR__ . '/auth.php';
