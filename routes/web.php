<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\Dokumentasi;
use App\Http\Controllers\Dashbord;
use App\Http\Controllers\Api\Auth\RegisterController;
use App\Http\Controllers\Api\Auth\LoginController;
use App\Http\Controllers\ApiController;

// Dashboard (ubah rute jika perlu untuk menghindari konflik dengan FormController)
Route::get('/', [Dashbord::class, 'dashboard'])->name('dashboard');
Route::get('dokumentasi', [Dokumentasi::class, 'dokumentasi'])->name('dokumentasi');

// Login Register
Route::get('masuk', [LoginController::class, 'masuk'])->name('login.form');
Route::get('daftar', [RegisterController::class, 'daftar'])->name('daftar.form');
Route::post('login', [LoginController::class, '__invoke'])->name('login');
Route::post('register', [RegisterController::class, '__invoke'])->name('register');
// Route::post('/logout', [App\Http\Controllers\Api\Auth\LogoutControllers::class, 'logout']);

// Applikasi Sederhana
// Route::get('/', [FormController::class, 'index'])->name('home');
// Route::get('/search', [FormController::class, 'search'])->name('search');

// Ensure this route is placed appropriately
Route::get('/show-data', [ApiController::class, 'showData']);
