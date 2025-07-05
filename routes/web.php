<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', [UserController::class, 'index'])->name('user-form');
Route::post('/', [UserController::class, 'store'])->name('user-form.submit');
