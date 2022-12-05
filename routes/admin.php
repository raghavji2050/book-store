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

Route::get('/', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('index');

Route::resource('collections', Admin\CollectionController::class)->except(['show']);

Route::resource('categories', Admin\CategoryController::class)->except(['show']);

Route::resource('authors', Admin\AuthorController::class)->except(['show']);

Route::resource('books', Admin\BookController::class)->except(['show']);
