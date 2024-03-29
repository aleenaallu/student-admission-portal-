<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdmissionController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CourseController;




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

// Route::get('/', function () {return view('welcome');});

// Admission
Route::get('/admissions',[AdmissionController::class,'index'])->name('admission.index');
Route::get('/admissions/create',[AdmissionController::class,'create'])->name('admission.create');
Route::post('/admissions',[AdmissionController::class,'create'])->name('admission.store');

//Student
Route::get('/students',[StudentController::class,'index'])->name('students.index');
Route::get('/students/create',[StudentController::class,'create'])->name('students.create');
Route::post('/students',[StudentController::class,'store'])->name('students.store');

//Course
Route::get('/courses',[CourseController::class,'index'])->name('courses.index');
Route::get('/courses/create',[StudentController::class,'create'])->name('courses.create');
Route::post('courses',[CourseController::class,'store'])->name('courses.store');


//CRUD
Route::resource('students', StudentController::class);
Route::resource('courses', CourseController::class);
Route::resource('admissions', AdmissionController::class);

Route::get('/admin/students/create', 'StudentController@create')->name('admin.students.create');
Route::get('/admin/students/{id}/edit', 'StudentController@edit')->name('admin.students.edit');



//Admin

Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
Route::get('/admin/students', [AdminController::class, 'index'])->name('admin.students.index');
Route::post('/admin/students', [AdminController::class, 'store'])->name('admin.students.store');
Route::put('/admin/students/{id}', [AdminController::class, 'update'])->name('admin.students.update');





