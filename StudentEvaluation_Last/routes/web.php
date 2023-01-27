<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CohortsController;
use App\Http\Controllers\CohortFormController;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\UploadController;


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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');   //Authentication has done inside CohortController.php
Route::view('cohorts', 'cohorts');
Route::view('students', 'students');

Route::get('cohortform', 'App\Http\Controllers\CohortFormController@create'); //get or fetch data
Route::post('cohortform', 'App\Http\Controllers\CohortFormController@store'); //post or store data

Route::resource('cohorts', 'App\Http\Controllers\CohortsController');
Route::resource('students', 'App\Http\Controllers\StudentsController');

Route::view('upload', 'upload');
Route::post('upload', [UploadController::class, 'index']);

Route::get('login/google', [App\Http\Controllers\Auth\LoginController::class, 'redirectToGoogle'])->name('login.google');
Route::get('login/google/callback', [App\Http\Controllers\Auth\LoginController::class, 'handleGoogleCallback']);