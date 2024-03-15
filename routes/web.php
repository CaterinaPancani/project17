<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/users/{user}',[UserController::class,'show'])->name('users.show');
Route::get('/edit/{user}',[UserController::class,'edit'])->name('users.edit');