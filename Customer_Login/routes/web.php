<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomersController;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Auth\AuthenticationException;

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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::view('/', 'home');
Route::get('contact', 'App\Http\Controllers\ContactFormController@create'); //get or fetch data
Route::post('contact', 'App\Http\Controllers\ContactFormController@store'); //post or store data

//Route::view('contact', 'contact'); //pageName(url), fileName
Route::view('about', 'about');

// Route::get('customers', 'App\Http\Controllers\CustomersController@index');
// Route::get('customers/create', 'App\Http\Controllers\CustomersController@create');
// Route::post('customers', 'App\Http\Controllers\CustomersController@store');
// Route::get('customers/{customer}', 'App\Http\Controllers\CustomersController@show');
// Route::get('customers/{customer}/edit', 'App\Http\Controllers\CustomersController@edit');
// Route::patch('customers/{customer}', 'App\Http\Controllers\CustomersController@update');
// Route::delete('customers/{customer}', 'App\Http\Controllers\CustomersController@destroy');

Route::resource('customers', 'App\Http\Controllers\CustomersController');
//Route::resource('customers', 'App\Http\Controllers\CustomersController')->middleware('auth');



// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Google login
Route::get('login/google', [App\Http\Controllers\Auth\LoginController::class, 'redirectToGoogle'])->name('login.google');
Route::get('login/google/callback', [App\Http\Controllers\Auth\LoginController::class, 'handleGoogleCallback']);
 

/*Route::prefix('google')->name('google.')->group(function(){
    Route::get('login', [GoogleController::class, 'loginWithGoogle'])->name('login');
    Route::get('callback', [GoogleController::class, 'callbackFromGoogle'])->name('callback');
});*/
