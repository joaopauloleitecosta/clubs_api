<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClubController;
use App\Services\ApiResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/status', function() {
    return ApiResponse::success('API is running');
})->middleware('auth:sanctum'); 

Route::apiResource('clubs', ClubController::class)->middleware('auth:sanctum');

//auth routes
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');