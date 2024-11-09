<?php
// routes/web.php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\SeniReguController;
use Illuminate\Support\Facades\Route;

// Route untuk halaman utama
Route::get('/', function () {
    return view('home');
});

// Routes untuk pendaftaran Seni Regu (public)
Route::get('/register', [SeniReguController::class, 'create'])->name('seniregu.register');
Route::post('/register', [SeniReguController::class, 'store'])->name('seniregu.store');

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
