<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;

Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);

// Contoh route yang diproteksi (Hanya bisa diakses jika sudah login)
Route::middleware('auth:api')->group(function () {
    Route::get('user-profile', function () {
        return response()->json(auth()->user());
    });
});
