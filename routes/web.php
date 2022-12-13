<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\TeacherAuthController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AdminCourseController;
use App\Http\Controllers\EnrollController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\Student\StudentAuthController;

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

//Home Routes Start Here
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about-us', [HomeController::class, 'about'])->name('about');
Route::get('/training-category/{id}', [HomeController::class, 'categoryTraining'])->name('training.category');
Route::get('/all-training', [HomeController::class, 'allTraining'])->name('training.all');
Route::get('/training-detail/{id}', [HomeController::class, 'trainingDetail'])->name('training.detail');

//Enroll Route here
Route::get('/training-enroll/{id}', [EnrollController::class, 'index'])->name('training.enroll');
Route::post('/training-new-enroll/{id}', [EnrollController::class, 'newEnroll'])->name('training.new-enroll');
Route::get('/training-complete-enroll/{id}', [EnrollController::class, 'completeEnroll'])->name('training.complete-enroll');



Route::get('/student-dashboard', [StudentAuthController::class, 'dashboard'])->name('student.dashboard');
Route::get('/student-logout', [StudentAuthController::class, 'logout'])->name('student.logout');
Route::post('/student-login', [StudentAuthController::class, 'login'])->name('student.login');


Route::get('/contact-us', [HomeController::class, 'contact'])->name('contact');
Route::get('/login-registration', [HomeController::class, 'loginRegistration'])->name('login-registration');
//Home Routes Start Here


//Teacher Routes Start Here
Route::get('/teacher/login', [TeacherAuthController::class, 'index'])->name('teacher.login');
Route::post('/teacher/login', [TeacherAuthController::class, 'login'])->name('teacher.login');
Route::get('/teacher/dashboard', [TeacherAuthController::class, 'dashboard'])->name('teacher.dashboard');
Route::post('/teacher/logout', [TeacherAuthController::class, 'logout'])->name('teacher.logout');
//Teacher Routes End Here

//Course Routes Start Here
Route::get('/course/add', [CourseController::class, 'index'])->name('course.add');
Route::post('/course/create', [CourseController::class, 'create'])->name('course.create');
Route::get('/course/manage', [CourseController::class, 'manage'])->name('course.manage');
Route::get('/course/edit/{id}', [CourseController::class, 'edit'])->name('course.edit');
Route::post('/course/update/{id}', [CourseController::class, 'update'])->name('course.update');
Route::get('/course/delete/{id}', [CourseController::class, 'delete'])->name('course.delete');
//Course Routes End Here



//Middleware Routes Start Here
Route::middleware([ 'auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/teacher/add', [TeacherController::class, 'index'])->name('teacher.add');
    Route::post('/teacher/create', [TeacherController::class, 'create'])->name('teacher.create');
    Route::get('/teacher/manage', [TeacherController::class, 'manage'])->name('teacher.manage');
    Route::get('/teacher/edit/{id}', [TeacherController::class, 'edit'])->name('teacher.edit');
    Route::post('/teacher/update/{id}', [TeacherController::class, 'update'])->name('teacher.update');
    Route::get('/teacher/delete/{id}', [TeacherController::class, 'delete'])->name('teacher.delete');

    Route::get('/category/add', [CategoryController::class, 'index'])->name('category.add');
    Route::post('/category/create', [CategoryController::class, 'create'])->name('category.create');
    Route::get('/category/manage', [CategoryController::class, 'manage'])->name('category.manage');
    Route::get('/category/edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
    Route::post('/category/update/{id}', [CategoryController::class, 'update'])->name('category.update');
    Route::get('/category/delete/{id}', [CategoryController::class, 'delete'])->name('category.delete');

    Route::get('/admin/manage-course', [AdminCourseController::class, 'index'])->name('admin.manage-course');
    Route::get('/admin/course-detail/{id}', [AdminCourseController::class, 'detail'])->name('admin.course-detail');
    Route::get('/admin/update-course-status/{id}', [AdminCourseController::class, 'updateStatus'])->name('admin.update-course-status');
    Route::get('/admin/update-course-offer-status/{id}', [AdminCourseController::class, 'updateOfferStatus'])->name('admin.update-course-offer-status');
    Route::post('/admin/update-course-offer/{id}', [AdminCourseController::class, 'updateCourseOffer'])->name('admin.update-course-offer');
    Route::get('/admin/course-delete/{id}', [AdminCourseController::class, 'delete'])->name('admin.course-delete');

});