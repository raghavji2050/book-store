<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;

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
  Route::get('checkout', [App\Http\Controllers\CheckoutController::class, 'checkout'])->name('checkout');
  Route::post('checkout', [App\Http\Controllers\CheckoutController::class, 'store'])->name('checkout.store');
  Route::get('cart', [App\Http\Controllers\HomeController::class, 'cart'])->name('cart');
});

Route::get('contact', [App\Http\Controllers\HomeController::class, 'contact'])->name('contact');
Route::get('about', [App\Http\Controllers\HomeController::class, 'about'])->name('about');
Route::get('product-detail/{id}', [App\Http\Controllers\BookController::class, 'show'])->name('productDetail');


Route::get('product-detail-modal/{id}', [App\Http\Controllers\BookController::class, 'bookModal']);

Route::post('cart/store', [CartController::class, 'addToCart'])->name('cart.store');
Route::post('update-cart', [CartController::class, 'updateCart'])->name('cart.update');
Route::post('remove-cart', [CartController::class, 'removeCart'])->name('cart.remove');
Route::post('clear', [CartController::class, 'clearAllCart'])->name('cart.clear');
