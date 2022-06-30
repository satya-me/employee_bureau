<?php

use Illuminate\Support\Facades\Route;

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
    return view('landing');
    // return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/database', [App\Http\Controllers\HomeController::class, 'Database'])->name('database');
Route::get('/add_database', [App\Http\Controllers\HomeController::class, 'AddDatabase'])->name('add_database');
Route::post('/add_database', [App\Http\Controllers\HomeController::class, 'AddDatabase'])->name('add_database');



Route::post('/aadhar/search', [App\Http\Controllers\HomeController::class, 'AadharSearch'])->name('search_by_aadhar');
