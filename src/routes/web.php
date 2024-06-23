<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

use App\Http\Controllers\DashboardController;

Route::get('/', function () {return Inertia::render('Welcome', ['canLogin' => Route::has('login'),'canRegister' => Route::has('register'),'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified',])->group(function () {
    
    Route::get('/dashboard', [DashboardController::class, 'dashboardMain'])->name('dashboard');

    Route::post('/dashboard', [DashboardController::class, 'dashboardSearch'])->name('search');

});
