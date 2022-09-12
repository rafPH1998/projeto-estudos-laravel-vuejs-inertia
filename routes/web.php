<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [UserController::class, 'index'])->name('home');
Route::get('/create', [UserController::class, 'create']);
Route::get('/show/{id}', [UserController::class, 'show'])->name('show');
Route::post('/create', [UserController::class, 'store']);
Route::get('/about', [UserController::class, 'about']);
