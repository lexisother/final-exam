<?php

use App\Http\Controllers\CardController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LessonController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);
Route::get('/contact', fn () => view('contact'));

//// TODO: USE CONTROLLERS AND MOVE LOGIC FROM BLADE TO RESPECTIVE CONTROLLER!!!
Route::middleware(['auth', 'verified'])
    ->prefix('dashboard')
    ->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
        Route::get('/strippenkaarten', [DashboardController::class, 'stripcards']);
        Route::get('/verslagen', [DashboardController::class, 'reports']);
        Route::get('/verslagen/{id}', [DashboardController::class, 'editReport']);
        Route::get('/leerlingen', [DashboardController::class, 'students']);
    });

Route::middleware(['auth', 'verified'])
    ->prefix('api')
    ->group(function () {
        Route::prefix('lessons')->group(function () {
            Route::post('/edit/{id}', [LessonController::class, 'edit']);
        });
        Route::prefix('cards')->group(function () {
            Route::post('/create', [CardController::class, 'create']);
            Route::get('/delete/{id}', [CardController::class, 'delete']);
        });
    });

require __DIR__ . '/auth.php';
