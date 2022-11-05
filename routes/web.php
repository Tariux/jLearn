<?php

use App\Http\Controllers\CreateAccountController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginAccountController;
use App\Models\Service;
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

Route::get('/account/create/service' , [DashboardController::class , 'create_service_page'])->name('create-service-page')->middleware(['auth']);
Route::post('/account/create/service' , [DashboardController::class , 'create_service'])->name('create-service')->middleware(['auth']);


Route::get('/service/{service}', function ($service) {
    $service_data = Service::find($service);

    if (!empty($service_data)) {
        $title = $service_data->service_title;

        return view('service' , compact('service_data' , 'title'));
    } else {
        return redirect(route('home'));
    }
});