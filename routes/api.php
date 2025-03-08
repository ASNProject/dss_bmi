<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// Route API
Route::apiResource('/disease-history', App\Http\Controllers\Api\DiseaseHistoryController::class);
Route::apiResource('/eating-habit', App\Http\Controllers\Api\EatingHabitController::class);
Route::apiResource('/sleep-pattern', App\Http\Controllers\Api\SleepPatternController::class);
Route::apiResource('/eat-recommendation', App\Http\Controllers\Api\EatRecommendationController::class);
Route::apiResource('/sleep-recommendation', App\Http\Controllers\Api\SleepRecommendationController::class);
Route::apiResource('/activity-recommendation', App\Http\Controllers\Api\ActivityRecommendationController::class);