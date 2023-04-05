<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
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
Route::controller(MovieController::class)->group(function (){
    Route::get('/', 'index')->name('movie.index');
    Route::get('movie/{movie:slug}', 'show')->name('movie.show');
});


Route::view('login', 'auth.loginPage')->name('auth.index')->middleware('guest');

Route::view('admin/movies/', 'admin.index')->name('admin.index');
