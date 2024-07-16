<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;

Route::get('/', function () {
    return view('beranda');
});

// Rute untuk menampilkan halaman login
Route::get('/login', function () {
    return view('login');
})->name('login');

// Rute untuk menangani permintaan login
Route::post('/login', [LoginController::class, 'login']);
