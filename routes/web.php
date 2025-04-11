<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\QuizController;
use Illuminate\Support\Facades\Route;


Route::get('/', [AuthController::class, 'Loginview']);
Route::post('/', [AuthController::class, 'Login'])->name('login');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [AuthController::class, 'Dashboard'])->name('dashboard');
    Route::get('/home', [AuthController::class, 'Home'])->name('home');
    Route::get('/quizentry', [QuizController::class, 'Quizentry'])->name('quizentry');
    Route::get('/quizlist', [QuizController::class, 'Quizlist'])->name('quizlist');
});

Route::post('/logout', [AuthController::class, 'Logout'])->name('logout');
