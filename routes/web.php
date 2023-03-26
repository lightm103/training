<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Landing Page
Route::get('/', function () {
    return view('welcome');
});

// Authentication
Route::get('/login',[LoginController::class,'index'])->name('login');
Route::get('/register',[RegisterController::class,'index'])->name('register');
Route::get('/edit/{id}',[UserController::class,'edit'])->name('edit');
Route::post('register-post',[UserController::class,'store'])->name('register-post');
Route::put('/update/{id}',[UserController::class,'update'])->name('update');
Route::post('authentication',[LoginController::class,'authentication'])->name('authentication');
Route::get('/logout',[LoginController::class,'logout'])->name('logout');

// Dashboard
Route::middleware('auth')->group(function(){
    Route::get('/user',[UserController::class,'index'])->name('user');
    Route::delete('/delete/{id}',[UserController::class,'delete'])->name('delete');
    Route::get('add',[UserController::class,'add'])->name('add');
    Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');
});