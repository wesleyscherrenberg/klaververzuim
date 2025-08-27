<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StyleguideController;
use Illuminate\Support\Facades\Route;

// AUTH
Route::redirect('/', '/inloggen');
Route::get('/inloggen', [AuthController::class, 'create'])->name('auth.login');
Route::post('/login', [AuthController::class, 'store'])
    ->middleware('throttle:8,1') // maximaal 3 pogingen per minuut
    ->name('admin.login.store');
Route::delete('/logout', [AuthController::class, 'destroy'])->name('auth.logout')->middleware('auth');


// ADMIN



Route::middleware('auth.admin')->prefix('admin')->group(function () {

// DASHBOARD
    Route::get('dashboard', [DashboardController::class, 'index'])->name('admin.dashboard.index');

// STYLEGUIDE
    Route::get('styleguide', [StyleguideController::class, 'index'])->name('admin.styleguide.index');

});
