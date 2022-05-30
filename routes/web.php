<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TodoListController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/',[LoginController::class,'showLogin'])->name('login')->middleware('nocache');
Route::post('/login',[LoginController::class,'login'])->name('verifylogin');
Route::get('/registershow',[RegisterController::class,'showRegisterForm'])->name('registershow')->middleware('nocache');
Route::post('/register',[RegisterController::class,'register'])->name('register');
Route::get('/welcome',[HomeController::class,'welcome'])->name('welcome')->middleware('nocache');

//Route  Todo
Route::post('/createtodo',[TodoListController::class,'createTodo'])->name('createtodo')->middleware('nocache','auth');


