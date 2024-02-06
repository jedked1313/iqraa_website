<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\IndexController;
use App\http\Controllers\AboutController;
use App\http\Controllers\ContactController;
use App\http\Controllers\ProgramsController;
use App\http\Controllers\NewsController;
use App\http\Controllers\ProgramdataController;
use App\http\Controllers\DepartmentsController;
use App\http\Controllers\InstructorsController;
use App\http\Controllers\CalenderController;
use App\http\Controllers\ContactFormController;
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
Route::get('/programs', [ProgramsController::class,'index']);
Route::get('/news', [NewsController::class,'index']);
Route::get('/programdata', [ProgramdataController::class,'index']);
Route::get('/departments', [DepartmentsController::class,'index']);
Route::get('/instructors', [InstructorsController::class,'index']);
Route::get('/calender', [CalenderController::class,'index']);

Route::get('locale/{locale}',function ($locale) {
    if(in_array($locale,['ar','en'])){
        session()->put('locale',$locale);
    }
    return redirect()->back();
})->name('locale');

Route::post('/contact', [ContactFormController::class,'contactForm'])->name('contact.store');