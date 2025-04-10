<?php

use App\Http\Controllers\AuthController;

use Illuminate\Support\Facades\Route;


Route::get('/', [AuthController::class, 'Loginview']);
Route::post('/', [AuthController::class, 'Login'])->name('login');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [AuthController::class, 'Dashboard'])->name('dashboard');
    Route::get('/home', [AuthController::class, 'Home'])->name('home');
});

Route::post('/logout', [AuthController::class, 'Logout'])->name('logout');
