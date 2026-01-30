<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\OrderController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/client', ClientController::class);
Route::resource('/service', ServiceController::class);
Route::resource('/order', OrderController::class);


