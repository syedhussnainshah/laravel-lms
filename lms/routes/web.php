<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\addStudents;
use App\Http\Controllers\singup;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/index', function () {
    return view('index');
});
Route::get('/add_student', function () {
    return view('add_student');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/singup', function () {
    return view('signup');
});



Route::post('/std_create', [App\Http\Controllers\addStudents::class, 'std_create'])->name('std_create');
Route::get('/find_student', [App\Http\Controllers\addStudents::class, 'show'])->name('show');
Route::post('/add_reg', [App\Http\Controllers\singup::class, 'add_reg'])->name('add_reg');
Route::post('/user_login', [App\Http\Controllers\singup::class, 'user_login'])->name('user_login');
// Route::post('/sing_up', [App\Http\Controllers\singup::class, 'reg'])->name('reg');

Route::get('/show_class_student/{id}', [App\Http\Controllers\addStudents::class, 'student_class'])->name('student_class');
// Route::get('/show_class_student_filter', [App\Http\Controllers\addStudents::class, 'student_class_filter'])->name('student_class_filter');
// Route::get('single_class_student/{id}', [App\Http\Controllers\addStudents::class, 'student_class'])->name('student_class');
// Route::get('/show_student', [App\Http\Controllers\addStudents::class, 'all_student_show'])->name('all_student_show');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
