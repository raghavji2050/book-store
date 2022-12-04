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


Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function () {
  Route::get('my-account', [App\Http\Controllers\HomeController::class, 'myAccount'])->name('myAccount');
  Route::get('checkout', [App\Http\Controllers\HomeController::class, 'checkout'])->name('checkout');
  Route::get('cart', [App\Http\Controllers\HomeController::class, 'cart'])->name('cart');
});

Route::get('contact', [App\Http\Controllers\HomeController::class, 'contact'])->name('contact');
Route::get('about', [App\Http\Controllers\HomeController::class, 'about'])->name('about');
Route::get('product-detail', [App\Http\Controllers\HomeController::class, 'productDetail'])->name('productDetail');
