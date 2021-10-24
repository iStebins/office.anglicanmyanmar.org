<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DioceseController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\EthnicityController;
use App\Http\Controllers\MagazineController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ParishController;
use Illuminate\Support\Facades\Auth;
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
    return redirect('dashboard');
});

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::resource('/news', NewsController::class);

Route::resource('/magazines', MagazineController::class);

Route::resource('/parishes', ParishController::class);
Route::resource('/dioceses', DioceseController::class);
Route::resource('/ethinicities', EthnicityController::class);
Route::resource('/employees', EmployeeController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
