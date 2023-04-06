<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\Admin\MovieController;
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
Route::get('language/{locale}', [LanguageController::class, 'setLanguage'])->name('language.set');

Route::controller(PageController::class)->group(function () {
	Route::get('/', 'quote')->name('page.quote');
	Route::get('movies/{movie:slug}', 'movie')->name('page.movie');
});

Route::view('login', 'auth.loginPage')->middleware('guest')->name('auth.loginPage');
Route::controller(AuthController::class)->group(function () {
	Route::post('login', 'login')->middleware('guest')->name('auth.login');
	Route::post('logout', 'logout')->middleware('auth')->name('auth.logout');
});

Route::controller(MovieController::class)->group(function () {
	Route::get('admin/movies/', 'index')->name('movies.index')->middleware('auth');
	Route::get('admin/movies/create', 'create')->name('movies.create')->middleware('auth');
});
