<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuoteController;
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

Route::get('movie/{movie:slug}', [MovieController::class, 'show'])->name('movie.show');

Route::get('/', [QuoteController::class, 'index'])->name('quote.index');

Route::view('login', 'auth.loginPage')->name('auth.index')->middleware('guest');

Route::view('admin/movies/', 'admin.index')->name('admin.index');
