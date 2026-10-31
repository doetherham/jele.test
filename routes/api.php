<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\AuthController;

Route::post('/registration', [AuthController::class, 'registration']);
Route::middleware('auth:sanctum')->get('/profile', [AuthController::class, 'profile']);
