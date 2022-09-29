<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\IndexController;

Route::get('/home',[IndexController::class, 'index']);
Route::get('/signin',[IndexController::class, 'signin']);
Route::get('/signup',[IndexController::class, 'signup']);

Route::get('/', function () {
    return view('welcome');
});
