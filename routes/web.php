<?php

use Illuminate\Support\Facades\Route;

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


// frontend controller
// Route::get('/', function () {
//     return view('frontend.home.index');
// });



Route::get('/', [\App\Http\Controllers\Front\HomeController::class, 'index']);



Route::get('/about', function () {
    return view('frontend.about');
});


// backend Controller

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
   
    return view('backend.dashboard');
})->name('dashboard');



Route::group(['middleware' => 'auth'], function() {

    Route::resource('profile', \App\Http\Controllers\Admin\ProfileController::class);

    
    Route::group(['middleware' => 'role:student', 'prefix' => 'student', 'as' => 'student.'], function() {
        Route::resource('lessons', \App\Http\Controllers\Students\LessonController::class);
    });
   Route::group(['middleware' => 'role:teacher', 'prefix' => 'teacher', 'as' => 'teacher.'], function() {
       Route::resource('courses', \App\Http\Controllers\Teachers\CourseController::class);
   });
    Route::group(['middleware' => 'role:admin', 'prefix' => 'admin', 'as' => 'admin.'], function() {
        Route::resource('users', \App\Http\Controllers\Admin\UserController::class);
        Route::resource('sitesettings-top', \App\Http\Controllers\Admin\SiteSettingController::class);
        Route::resource('sitesettings-footer', \App\Http\Controllers\Admin\SiteSettingFooterController::class);
        Route::resource('users', \App\Http\Controllers\Admin\UserController::class);
        
        
       
    });
});

