<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/create', [HomeController::class, 'create']);
Route::post('/create', [HomeController::class, 'store']);
Route::get('/about', [HomeController::class, 'about']);
