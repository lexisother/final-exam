<?php

use App\Http\Controllers\CardController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('dashboard')->group(function() {
    Route::get('/', fn () => view('dashboard'))->name('dashboard');
    Route::get('/strippenkaarten', fn () => view('stripcards'));
    Route::get('/verslagen', fn () => view('reports'));
    Route::get('/leerlingen', fn () => view('students'));
})->middleware(['auth', 'verified']);

Route::prefix('api')->group(function() {
    Route::prefix('cards')->group(function() {
        Route::post('/create', [CardController::class, 'create']);
        Route::get('/delete/{id}', [CardController::class, 'delete']);
    });
})->middleware(['auth', 'verified']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
