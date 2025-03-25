<?php

use App\Http\Controllers\ClubController;
use App\Services\ApiResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/status', function() {
    return ApiResponse::success('API is running');
}); 

Route::apiResource('clubs', ClubController::class);