<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;

Route::get('/register', [UserController::class, 'showRegistrationForm'])->name('register.form');
Route::post('/register', [UserController::class, 'store'])->name('register.store');
