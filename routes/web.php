<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StyleguideController;
use Illuminate\Support\Facades\Route;
use Rap2hpoutre\LaravelLogViewer\LogViewerController;

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

    // COMPANIES
    Route::get('bedrijven', [CompanyController::class, 'index'])->name('admin.companies.index');
    Route::get('companies', [CompanyController::class, 'create'])->name('admin.companies.create');




    // SUPERADMIN
    Route::middleware('auth.superadmin')->group(function () {

    });

    // STYLEGUIDE
    Route::get('styleguide', [StyleguideController::class, 'index'])->name('admin.styleguide.index');


    // LOGS
    Route::get('logs', [LogViewerController::class, 'index'])->name('admin.logs.index');

});
