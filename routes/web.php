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

Route::get('/login/student', [StudentLoginController::class, 'index'])->name('student');
