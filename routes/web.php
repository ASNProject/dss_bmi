<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Content\AnalisisBeratBadanController;
use App\Http\Controllers\Api\InputDataController;
use App\Http\Controllers\Content\RecommendationController;
use App\Http\Controllers\Content\MeasurementController;
use App\Http\Controllers\Auth\ForgotPasswordController;


Route::get('/', function () {
    return redirect()->route('dashboard');
});

Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post');
Route::get('registration', [AuthController::class, 'registration'])->name('register');
Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post');
// Route::get('dashboard', [AuthController::class, 'dashboard']);
Route::middleware(['auth'])->get('dashboard', [AuthController::class, 'dashboard'])->name('dashboard');
Route::post('logout', [AuthController::class, 'logout'])->name('logout');

// Route for content
Route::middleware(['auth'])->get('analisis', [AnalisisBeratBadanController::class, 'index'])->name('analisis');
Route::middleware(['auth'])->get('result', [AnalisisBeratBadanController::class, 'result'])->name('result');
Route::middleware(['auth'])->post('post-analisis', [AnalisisBeratBadanController::class, 'postAnalisis'])->name('analisis.post');
Route::middleware(['auth'])->get('recommendation', [RecommendationController::class, 'index'])->name('recommendation');
Route::middleware(['auth'])->get('measurement', [MeasurementController::class, 'index'])->name('measurement');

Route::get('forgot-password', [ForgotPasswordController::class, 'showForgotPasswordForm'])->name('password.request');
Route::post('forgot-password', [ForgotPasswordController::class, 'sendResetLink'])->name('password.email');
Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('password.reset');
Route::post('reset-password', [ForgotPasswordController::class, 'resetPassword'])->name('password.update');