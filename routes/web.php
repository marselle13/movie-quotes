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

Route::view('/', 'movie.index')->name('movie.index');
Route::view('movie', 'movie.show')->name('movie.show');

Route::view('login', 'auth.loginPage')->name('auth.index')->middleware('guest');

Route::view('admin/movies/', 'admin.index')->name('admin.index');
