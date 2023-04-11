<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\Admin\MovieController;
use App\Http\Controllers\Admin\QuoteController;
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

Route::view('login', 'auth.loginPage')->middleware('guest')->name('auth.loginPage');
Route::controller(AuthController::class)->group(function () {
	Route::post('login', 'login')->middleware('guest')->name('auth.login');
	Route::post('logout', 'logout')->middleware('auth')->name('auth.logout');
});

Route::controller(MovieController::class)->middleware('auth')->group(function () {
	Route::get('admin/movies/', 'index')->name('movies.index');
	Route::get('movies/{movie:slug}', 'show')->name('movies.show')->withoutMiddleware('auth');
	Route::get('admin/movies/create', 'create')->name('movies.create');
	Route::post('admin/movies', 'store')->name('movies.store');
	Route::get('admin/movies/{movie}/edit', 'edit')->name('movies.edit');
	Route::patch('admin/movies/{movie}', 'update')->name('movies.update');
	Route::delete('admin/movies/{movie}', 'destroy')->name('movies.destroy');
});

Route::controller(QuoteController::class)->middleware('auth')->group(function () {
	Route::get('admin/quotes', 'index')->name('quotes.index');
	Route::get('/', 'show')->name('quotes.show')->withoutMiddleware('auth');
	Route::get('admin/quotes/create', 'create')->name('quotes.create');
	Route::post('admin/quotes', 'store')->name('quotes.store');
	Route::get('admin/quotes/{quote}/edit', 'edit')->name('quotes.edit');
	Route::patch('admin/quotes/{quote}', 'update')->name('quotes.update');
	Route::delete('admin/quotes/{quote}', 'destroy')->name('quotes.destroy');
});
