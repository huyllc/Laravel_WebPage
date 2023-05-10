<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', 'App\Http\Controllers\UserController@loginview');

Route::get('/login', 'App\Http\Controllers\UserController@loginview');

Route::get('/register', 'App\Http\Controllers\UserController@registerview');

Route::post('/register-user', 'App\Http\Controllers\UserController@register')->name('register-user');

Route::post('/login-user', 'App\Http\Controllers\UserController@login')->name('login-user');

Route::get('/forgot', function(){
    return view('forgot'); 
});