<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeacherAuthController;
use App\Http\Controllers\CourseController;


//Teacher routes start here
Route::middleware('teacher')->group(function (){
    Route::get('/teacher/dashboard', [TeacherAuthController::class, 'dashboard'])->name('teacher.dashboard');
    Route::post('/teacher/logout', [TeacherAuthController::class, 'logout'])->name('teacher.logout');

    Route::get('/course/add', [CourseController::class, 'index'])->name('course.add');
    Route::post('/course/create', [CourseController::class, 'create'])->name('course.create');
    Route::get('/course/manage', [CourseController::class, 'manage'])->name('course.manage');
    Route::get('/course/edit/{id}', [CourseController::class, 'edit'])->name('course.edit');
    Route::post('/course/update/{id}', [CourseController::class, 'update'])->name('course.update');
    Route::get('/course/delete/{id}', [CourseController::class, 'delete'])->name('course.delete');
});

Route::get('/teacher/login', [TeacherAuthController::class, 'index'])->name('teacher.login');
Route::post('/teacher/login', [TeacherAuthController::class, 'login'])->name('teacher.login');
//Teacher routes end here
