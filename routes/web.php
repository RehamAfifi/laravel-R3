<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('index', function () {
    return view('index');
})->name('index') ;

Route::get('about', function () {
    return view('about');
})->name('about') ;
Route::get('classes', function () {
    return view('classes');
})->name('classes') ;
Route::get('teachers', function () {
    return view('teachers');
})->name('teachers') ;

//
Route::get('contact',[ContactController::class,'index'])->name('contact') ;
Route::post('contact/sendEmail',[ContactController::class,'sendEmail'])->name('sendEmail') ;
