<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\IndexController;
use App\http\Controllers\AboutController;
use App\http\Controllers\ContactController;
use App\http\Controllers\CoursesController;
use App\http\Controllers\Error404Controller;

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

Route::get('/', [IndexController::class,'index']);
Route::get('/about', [AboutController::class,'index']);
Route::get('/contact', [ContactController::class,'index']);
Route::get('/courses', [CoursesController::class,'index']);
Route::get('/error404', [Error404Controller::class,'index']);
