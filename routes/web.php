<?php
// routes/web.php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProdiController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\NilaiController;

Route::middleware('guest')->group(function () {
    Route::get('/login',  [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login.attempt');
});

Route::middleware('auth')->group(function () {
    // ─── Logout ────────────────────────────────────────────────
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    // ─── Dashboard ───────────────────────────────────────────────
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');


    // ─── Modul Program Studi ──────────────────────────────────────
    // Menghasilkan 7 route: prodi.index, prodi.create, prodi.store,
    //                       prodi.show, prodi.edit, prodi.update, prodi.destroy
    Route::resource('prodi', ProdiController::class);

    // ─── Modul Mahasiswa ──────────────────────────────────────────
    Route::resource('mahasiswa', MahasiswaController::class);

    // ─── Modul Nilai ──────────────────────────────────────────────
    Route::resource('nilai', NilaiController::class);
});
