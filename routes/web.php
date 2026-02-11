<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminServiceController;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'index'])->name('index');

Route::get('/mentors', [PageController::class, 'mentors'])->name('mentors');

Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register.store');

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.store');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::resource('users', UserController::class)->only(['index', 'show']);
    Route::resource('service', AdminServiceController::class);
});

Route::middleware('auth')->group(function(){
    Route::resource('/service', ServiceController::class)->only(['index', 'show']);
    Route::resource('/order', OrderController::class);
});


