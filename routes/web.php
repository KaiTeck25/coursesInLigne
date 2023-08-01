<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [CourseController::class, 'welcome']);
Route::get('/login', function () {
    return view('client.login'); // Replace 'login' with the path to your login form view
})->name('login');
Route::post('/login', [LoginController::class, 'authenticate'])->name('login.submit');

// Authenticated routes
Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    // Dashboard and other authenticated routes
    Route::get('/course/{id}', 'App\Http\Controllers\CourseController@show')->name('courses.show');
    Route::post('/toggleProgress', 'App\Http\Controllers\CourseController@toggleProgress')->name('courses.toggle');
    Route::post('/courses', 'App\Http\Controllers\CourseController@store');
    Route::get('/courses/edit/{id}', 'App\Http\Controllers\CourseController@edit');
    Route::patch('/courses/edit/{id}', 'App\Http\Controllers\CourseController@update');

    Route::get('/dashboard', function () {
        return Inertia\Inertia::render('Dashboard');
    })->name('dashboard');

    // Add other authenticated routes here...
    // For example:
    // Route::get('/profile', [ProfileController::class, 'show'])->name('profile.show');

    // Logout route
});

Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');
Route::get('/courses', 'App\Http\Controllers\CourseController@index')->name('courses.index');
Route::get('/allCourses', 'App\Http\Controllers\CourseController@allCourses')->name('courses.allCourses');
Route::get('/Contact', 'App\Http\Controllers\CourseController@contact')->name('courses.contact');
Route::get('/course-details', 'App\Http\Controllers\CourseController@courseDetails')->name('courses.course-details');
Route::get('/Blog', 'App\Http\Controllers\CourseController@blog')->name('courses.blog');
Route::get('/blog-details', 'App\Http\Controllers\CourseController@blogDetails')->name('courses.blog-details');



