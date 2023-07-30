<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;


// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [CourseController::class, 'welcome']);

// Route::get('/', 'App\Http\Controllers\CourseController@welcom')->name('welcom');

    // Route::get('/welcom', function () {
    //     return Inertia\Inertia::render('welcom');
    // })->name('welcom');

Route::get('/courses', 'App\Http\Controllers\CourseController@index')->name('courses.index');

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/course/{id}', 'App\Http\Controllers\CourseController@show')->name('courses.show');
    Route::post('/toggleProgress', 'App\Http\Controllers\CourseController@toggleProgress')->name('courses.toggle');
    Route::post('/courses', 'App\Http\Controllers\CourseController@store');
    Route::get('/courses/edit/{id}', 'App\Http\Controllers\CourseController@edit');
    Route::patch('/courses/edit/{id}', 'App\Http\Controllers\CourseController@update');

    Route::get('/dashboard', function () {
        return Inertia\Inertia::render('Dashboard');
    })->name('dashboard');
});