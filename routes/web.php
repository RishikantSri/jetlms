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

Route::get('/setudatabase', function () {
     
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
   
    if(auth()->user()->role_id == 1){
        return redirect('admin/dashboard');
    }
    if(auth()->user()->role_id == 2){
        return redirect('trainer/dashboard');
    }
    if(auth()->user()->role_id == 3){
        return redirect('trainee/dashboard');
    }
  //  return view('backend.dashboard');
})->name('dashboard');



Route::group(['middleware' => 'auth'], function() {

        Route::group(['middleware' => 'role:admin', 'prefix' => 'admin', 'as' => 'admin.'], function() {
        Route::resource('users', \App\Http\Controllers\Admin\UserController::class);
        Route::resource('sitesettings-top', \App\Http\Controllers\Admin\SiteSettingController::class);
        Route::resource('sitesettings-footer', \App\Http\Controllers\Admin\SiteSettingFooterController::class);
        Route::resource('users', \App\Http\Controllers\Admin\UserController::class);
        Route::resource('courses', \App\Http\Controllers\Admin\CourseController::class);
        Route::get('/dashboard',  function () { return view('backend.admin.dashboard'); })->name('dashboard');
        Route::resource('myprofile', \App\Http\Controllers\Admin\ProfileController::class);
        });
    
       

       Route::group(['middleware' => 'role:trainer', 'prefix' => 'trainer', 'as' => 'trainer.'], function() {
       Route::resource('courses', \App\Http\Controllers\Trainer\CourseController::class);
       Route::resource('lessons', \App\Http\Controllers\Trainee\LessonController::class);
       Route::get('/dashboard',  function () { return view('backend.trainer.dashboard'); })->name('dashboard');
       Route::resource('myprofile', \App\Http\Controllers\Trainer\ProfileController::class);
       });


       Route::group(['middleware' => 'role:trainee', 'prefix' => 'trainee', 'as' => 'trainee.'], function() {
       Route::resource('courses', \App\Http\Controllers\Trainee\CourseController::class);
       Route::resource('lessons', \App\Http\Controllers\Trainee\LessonController::class);
       Route::get('/dashboard',  function () { return view('backend.trainee.dashboard'); })->name('dashboard');
       Route::resource('myprofile', \App\Http\Controllers\Trainee\ProfileController::class);
       });
 

    
        
});

