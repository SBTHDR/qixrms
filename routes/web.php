<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Management\MenuController;
use App\Http\Controllers\Management\TableController;
use App\Http\Controllers\Management\CategoryController;
use App\Http\Controllers\Payment\PaymentController;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Management View
Route::view('/management', 'management.index')->name('management.index');
// Management Route
Route::resource('/management/category', CategoryController::class);
Route::resource('/management/menu', MenuController::class);
Route::resource('/management/table', TableController::class);


// Tables Route
Route::get('/payment/tables', [PaymentController::class, 'getTables']);
// Payment Route
Route::get('/payment', [PaymentController::class, 'index'])->name('payment.index');
