<?php

use App\Http\Controllers\CreateAccountController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginAccountController;
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

Route::get('/' , [DashboardController::class , 'welcome'])->name('home');

Route::get('/account' , [DashboardController::class , 'index'])->name('account')->middleware(['auth']);

Route::post('/account/create', [CreateAccountController::class, 'create'])->name('create-account');
Route::get('/account/create', [CreateAccountController::class, 'index'])->name('create-account-page');

Route::post('/account/login', [LoginAccountController::class, 'check'])->name('login');
Route::get('/account/login' , [LoginAccountController::class , 'index'])->name('login-page');

Route::get('/account/logout' , [LoginAccountController::class , 'logout'])->name('logout');


Route::post('/account/save/profile' , [DashboardController::class , 'save_profile'])->name('save-profile')->middleware(['auth']);
