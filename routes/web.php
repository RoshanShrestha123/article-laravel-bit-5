<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'dashboard'])->name('dashboard')->middleware(['auth']);

Route::get('/login', [HomeController::class, 'login'])->name('login');
Route::post('/login', [UserController::class, 'login'])->name('loginUser');
Route::get('/register', [HomeController::class, 'register'])->name('register');
Route::post('/register', [UserController::class, 'registerUser'])->name('registerUser');

Route::get('/logout', [UserController::class, 'logout'])->name('logout');