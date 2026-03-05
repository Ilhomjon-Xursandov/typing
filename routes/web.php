<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Backend\AdminServiceController;
use App\Http\Controllers\Backend\OrderController;
use App\Http\Controllers\Backend\ServiceController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Frontend\PageController;
use Illuminate\Support\Facades\Route;

// start page route
Route::get('/', [PageController::class, 'index'])->name('index');
Route::get('/mentors', [PageController::class, 'mentors'])->name('mentors');
Route::get('/courses', [PageController::class, 'courses'])->name('courses');
Route::get('/contacts', [PageController::class, 'contacts'])->name('contacts');

//end page routek


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


