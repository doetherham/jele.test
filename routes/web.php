<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HealthController;


Route::get('/', [HealthController::class, 'index'])->name('health');
