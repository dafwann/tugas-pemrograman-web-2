<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BukuController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/buku');

// Login & logout
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login.proses');
});
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth')->name('logout');

// Hanya pengguna yang login: tambah, ubah, hapus
// (harus didaftarkan sebelum route {buku} agar /buku/create tidak dianggap ID)
Route::middleware('auth')->group(function () {
    Route::resource('buku', BukuController::class)->except(['index', 'show']);
});

// Publik: daftar dan detail
Route::resource('buku', BukuController::class)->only(['index', 'show']);
