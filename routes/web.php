<?php

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/account', [App\Http\Controllers\AccountController::class, 'index'])->name('account');
Route::get('/account/dashboard', [App\Http\Controllers\AccountController::class, 'index'])->name('account/dashboard');
Route::get('/account/orders', [App\Http\Controllers\AccountController::class, 'index'])->name('account/orders');
Route::get('/restaurants', [App\Http\Controllers\AccountController::class, 'createOrderPage'])->name('restaurants');
Route::get('/restaurants/{provider_id}', [App\Http\Controllers\AccountController::class, 'getProductsPage'])->name('menu');
Route::post('/cart/append', [App\Http\Controllers\CartController::class, 'addProductToCart'])->name('add-to-cart');
