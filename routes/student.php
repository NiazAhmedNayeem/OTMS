<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\Student\StudentAuthController;


//Student routes start here
Route::middleware('student')->group(function (){
    Route::get('/student-dashboard', [StudentAuthController::class, 'dashboard'])->name('student.dashboard');
    Route::get('/student-all-course', [StudentController::class, 'allCourse'])->name('student.all-course');
    Route::get('/student-logout', [StudentAuthController::class, 'logout'])->name('student.logout');
});

Route::post('/student-login', [StudentAuthController::class, 'login'])->name('student.login');
Route::post('/student-register', [StudentAuthController::class, 'register'])->name('student.register');
//Student routes end here
