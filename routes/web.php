<?php
// routes/web.php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\SeniReguController;
use App\Http\Controllers\SeniTunggalController;
use Illuminate\Support\Facades\Route;

// Route untuk halaman utama
Route::get('/', function () {
    return view('home');
});

// Routes untuk pendaftaran Seni Regu (public)
// Routes untuk pendaftaran Seni Regu (public)
Route::get('/register/seniregu', [SeniReguController::class, 'create'])->name('seniregu.register');
Route::post('/register/seniregu', [SeniReguController::class, 'store'])->name('seniregu.store');

Route::prefix('admin')->group(function () {
    // Login routes
    Route::get('/login', [AdminController::class, 'showLoginForm'])
        ->name('admin.login')
        ->middleware('guest.admin');

    Route::post('/login', [AdminController::class, 'login'])
        ->name('admin.login.submit')
        ->middleware('guest.admin');

    // Admin authenticated routes
    Route::middleware(['auth:admin'])->group(function () {
        // Dashboard
        Route::get('/dashboard', [SeniReguController::class, 'index'])
            ->name('admin.dashboard');

        // Logout
        Route::post('/logout', [AdminController::class, 'logout'])
            ->name('admin.logout');

        // CRUD operations untuk pendaftaran
        Route::get('/registration/{id}/edit', [SeniReguController::class, 'edit'])
            ->name('admin.edit');
        Route::put('/registration/{id}', [SeniReguController::class, 'update'])
            ->name('admin.update');
        Route::delete('/registration/{id}', [SeniReguController::class, 'destroy'])
            ->name('admin.destroy');

        // Optional: Tambahkan route untuk view detail jika diperlukan
        Route::get('/registration/{id}', [SeniReguController::class, 'show'])
            ->name('admin.show');
    });
});

// Routes untuk pendaftaran Seni Tunggal (public)
// Routes untuk pendaftaran Seni Tunggal (public)
Route::get('/register/senitunggal', [SeniTunggalController::class, 'create'])->name('senitunggal.register');
Route::post('/register/senitunggal', [SeniTunggalController::class, 'store'])->name('senitunggal.store');

Route::prefix('admin')->group(function () {
    // Login routes
    Route::get('/login', [AdminController::class, 'showLoginForm'])
        ->name('admin.login')
        ->middleware('guest.admin');

    Route::post('/login', [AdminController::class, 'login'])
        ->name('admin.login.submit')
        ->middleware('guest.admin');

    // Admin authenticated routes
    Route::middleware(['auth:admin'])->group(function () {
        // Dashboard
        Route::get('/dashboard', [SeniTunggalController::class, 'index'])
            ->name('admin.dashboard');

        // Logout
        Route::post('/logout', [AdminController::class, 'logout'])
            ->name('admin.logout');

        // CRUD operations untuk pendaftaran
        Route::get('/registration/{id}/edit', [SeniTunggalController::class, 'edit'])
            ->name('admin.edit');
        Route::put('/registration/{id}', [SeniTunggalController::class, 'update'])
            ->name('admin.update');
        Route::delete('/registration/{id}', [SeniTunggalController::class, 'destroy'])
            ->name('admin.destroy');

        // Optional: Tambahkan route untuk view detail jika diperlukan
        Route::get('/registration/{id}', [SeniTunggalController::class, 'show'])
            ->name('admin.show');
    });
});
