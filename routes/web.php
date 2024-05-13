<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('main');
});


Route::get('/about-us', function () {
    return view('about_us');
});

Route::get('/contact-us', function () {
    return view('contact_us');
});



Auth::routes();

//#4D4855

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/manage-services', [App\Http\Controllers\ServiceController::class, 'getServices']);


Route::get('/manage-users', [App\Http\Controllers\AccountController::class, 'users']);
Route::post('/add-user', [App\Http\Controllers\AccountController::class, 'addUser'])->name('add-user');
Route::get('/user/{id}', [App\Http\Controllers\AccountController::class, 'getUserById']);
Route::put('/update_status/{id}', [App\Http\Controllers\AccountController::class, 'updateStatus']);
Route::put('/update-password', [App\Http\Controllers\AccountController::class, 'updatePassword']);

Route::get('/code', [App\Http\Controllers\AccountController::class, 'generateCode']);



Route::get('/manage-jobs', [App\Http\Controllers\PostController::class, 'jobs']);
Route::post('/add-job', [App\Http\Controllers\PostController::class, 'addJob'])->name('add-job');
Route::get('/job/{id}', [App\Http\Controllers\PostController::class, 'getJobById']);
Route::get('/update-job-details/{id}', [App\Http\Controllers\PostController::class, 'updateJobDetails']);
Route::put('/update_job_status/{id}', [App\Http\Controllers\PostController::class, 'updateStatus']);



Route::post('/custom_login', [App\Http\Controllers\AccountController::class, 'customLogin']);
Route::post('/clear-session', [App\Http\Controllers\AccountController::class, 'clearSession']);



Route::get('/job/{id}', [App\Http\Controllers\AccountController::class, 'getJobById']);






Route::post('/post_service', [App\Http\Controllers\ServiceController::class, 'postService'])->name('post_service');

Route::get('/careers', [App\Http\Controllers\CareerController::class, 'getCareers']);
