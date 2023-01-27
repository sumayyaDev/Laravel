<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CohortsController;
use App\Http\Controllers\CohortFormController;

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

Route::view('admin', 'admin');
Route::resource('admin', 'App\Http\Controllers\TestsController');


Route::get('login/google', [App\Http\Controllers\Auth\LoginController::class, 'redirectToGoogle'])->name('login.google');
Route::get('login/google/callback', [App\Http\Controllers\Auth\LoginController::class, 'handleGoogleCallback']);


// Admin
// Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth.admin']], function () {
//     Route::get('/', 'App\Http\Controllers\Admin\HomeController@index')->name('home');
//     // Permissions
//     Route::delete('permissions/destroy', 'App\Http\Controllers\Admin\PermissionsController@massDestroy')->name('permissions.massDestroy');
//     Route::resource('permissions', 'App\Http\Controllers\Admin\PermissionsController');

//     // Roles
//     Route::delete('roles/destroy', 'App\Http\Controllers\Admin\RolesController@massDestroy')->name('roles.massDestroy');
//     Route::resource('roles', 'App\Http\Controllers\Admin\RolesController');

//     // Users
//     Route::delete('users/destroy', 'App\Http\Controllers\Admin\UsersController@massDestroy')->name('users.massDestroy');
//     Route::resource('users', 'App\Http\Controllers\Admin\UsersController');

//     // Categories
//     Route::delete('categories/destroy', 'App\Http\Controllers\Admin\CategoriesController@massDestroy')->name('categories.massDestroy');
//     Route::resource('categories', 'App\Http\Controllers\Admin\CategoriesController');

//     // Questions
//     Route::delete('questions/destroy', 'App\Http\Controllers\Admin\QuestionsController@massDestroy')->name('questions.massDestroy');
//     Route::resource('questions', 'App\Http\Controllers\Admin\QuestionsController');

//     // Options
//     Route::delete('options/destroy', 'App\Http\Controllers\Admin\OptionsController@massDestroy')->name('options.massDestroy');
//     Route::resource('options', 'App\Http\Controllers\Admin\OptionsController');

//     // Results
//     Route::delete('results/destroy', 'App\Http\Controllers\Admin\ResultsController@massDestroy')->name('results.massDestroy');
//     Route::resource('results', 'App\Http\Controllers\Admin\ResultsController');
// });