<?php

use App\Http\Controllers\calculatorController;
use Illuminate\Support\Facades\Route;



Route::get('/', [calculatorController::class, 'show']);

Route::post('/', [calculatorController::class, 'display']);