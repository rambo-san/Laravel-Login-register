<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Models\User;

Route::get('/',[HomeController::class,'home'])->middleware('auth')->name('home');
Route::get('/register',[HomeController::class,'register']);
Route::get('/login',[HomeController::class,'login'])->name('login');
Route::post('/registerlogic',[UserController::class,'registerlogic']);
Route::post('/loginlogic',[LoginController::class,'login']);
Route::get('/logout',[UserController::class,'logout']);