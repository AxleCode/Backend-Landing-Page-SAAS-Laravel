<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\TemplateController;
use App\Http\Controllers\API\ProjectController;

Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);

// Contoh route yang diproteksi (Hanya bisa diakses jika sudah login)
Route::middleware('auth:api')->group(function () {
    Route::get('user-profile', function () {
        return response()->json(auth()->user());
    });

    // Templates routes
    Route::apiResource('templates', TemplateController::class);

    // Projects routes
    Route::apiResource('projects', ProjectController::class);
});
