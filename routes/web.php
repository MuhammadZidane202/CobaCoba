<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\UserController;


Route::get('/', function () {
    return view('login');
})->name('login');

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/menu', [MenuController::class, 'showMenu'])->name('menu');
Route::get('/edit/{id}', [MenuController::class, 'edit'])->name('edit');
Route::put('/update/{id}', [MenuController::class, 'update'])->name('update');

Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('edit');
Route::put('/users/{id}', [UserController::class, 'update'])->name('update');
Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('users.destroy');

