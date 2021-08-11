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


//setup database

Route::get('/command', function () {
     
    //Only below lines to run

    // Artisan::call('cache:clear');
    // Artisan::call('route:clear');
    // Artisan::call('config:clear');
    // Artisan::call('view:clear');
    // Artisan::call('migrate:fresh', [
    //     '--seed' => true,
    // ]);
    // Artisan::call('storage:link');
    // echo 'New migrations done!';
    
    // above lines           
  
 });



// frontend controller


// Route::get('/', function () {
//     return view('frontend.home.index');
// });



Route::get('/emailtemplate', function () {
    return view('backend.emails.welcome');
});


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

    
    Route::group(['middleware' => 'role:trainee', 'prefix' => 'trainee', 'as' => 'trainee.'], function() {
        Route::resource('lessons', \App\Http\Controllers\Trainees\LessonController::class);
        Route::get('/dashboard',  function () { return view('backend.dashboard'); })->name('dashboard');
    });


   Route::group(['middleware' => 'role:trainer', 'prefix' => 'trainer', 'as' => 'trainer.'], function() {
       Route::resource('courses', \App\Http\Controllers\trainers\CourseController::class);
       Route::get('/dashboard',  function () { return view('backend.dashboard'); })->name('dashboard');
   });

    
   Route::group(['middleware' => 'role:admin', 'prefix' => 'admin', 'as' => 'admin.'], function() {
        Route::resource('users', \App\Http\Controllers\Admin\UserController::class);
        Route::resource('sitesettings-top', \App\Http\Controllers\Admin\SiteSettingController::class);
        Route::resource('sitesettings-footer', \App\Http\Controllers\Admin\SiteSettingFooterController::class);
        Route::resource('users', \App\Http\Controllers\Admin\UserController::class);
        Route::resource('courses', \App\Http\Controllers\Admin\CourseController::class);
        Route::get('/dashboard',  function () { return view('backend.dashboard'); })->name('dashboard');
        
        
        
       
    });
});

