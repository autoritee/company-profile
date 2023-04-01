<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index']);

// Auth

Route::get('/login', [AuthController::class, 'login']);
Route::post('/login', [AuthController::class, 'authenticated']);