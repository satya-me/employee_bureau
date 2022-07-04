<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\ApiCheckPoint;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\HomeController;

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

// Route::post('/aadhar/search', Route::get('/api_setting', [App\Http\Controllers\HomeController::class, 'ApiSetting'])->name('api_setting');

Route::post('/aadhar/search',[App\Http\Controllers\SecureController::class, 'AadharSearch'])->name('search_by_aadhar');

// account settings_system_daydream
Route::get('/account/organization', [App\Http\Controllers\AccountController::class, 'AccountView'])->name('account_view');
Route::get('/account/generate_api', [App\Http\Controllers\AccountController::class, 'GenerateApiKey'])->name('generate_api');
Route::get('/account/get_api', [App\Http\Controllers\AccountController::class, 'GetApiKey'])->name('get_api');


// Wallet
Route::get('/account/wallet', [App\Http\Controllers\WalletController::class, 'MyWallet'])->name('wallet');
Route::get('/account/recharge', [App\Http\Controllers\WalletController::class, 'WalletTopUp'])->name('recharge');
Route::post('/account/recharge', [App\Http\Controllers\WalletController::class, 'WalletTopUp'])->name('recharge');






