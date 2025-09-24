<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\StudentLoginController;
use App\Http\Controllers\Student\HomeController as StudentHomeController;

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



// Student Login Form Route
Route::get('/student/login', [StudentLoginController::class, 'index'])
    ->middleware('student.guest')
    ->name('student.login');

//Login Route
Route::post('/student/login', [StudentLoginController::class, 'login'])
    ->name('student.login.submit');


// Logout Route
Route::post('/student/logout', function(){
    Auth::guard('student')->logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();
    return redirect()->route('student.login');
})
    ->name('student.logout');

Route::prefix('student')
    ->middleware('auth.student', 'prevent.back')
    ->group(function () {
        Route::get('/home', [StudentHomeController::class, 'index'])->name('student.home');
});