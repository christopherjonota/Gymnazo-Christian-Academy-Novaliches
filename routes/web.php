<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\StudentLoginController;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/about', [HomeController::class, 'index'])->name('about');

Route::get('/student', [StudentLoginController::class, 'index'])->name('student');


Route::get('/student/login', [StudentLoginController::class, 'index'])->name('student.login');
Route::post('/student/login', [StudentLoginController::class, 'login'])->name('student.login.submit');
Route::post('/student/logout', [StudentLoginController::class, 'login'])->name('student.login.logout');
Route::prefix('student')
    ->middleware('auth:student')
    ->group(function () {
        Route::get('/home', [HomeController::class, 'index'])->name('student.home');
});