<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [App\Http\Controllers\FrontendController::class, 'index']);
Route::get('/category/{id}', [App\Http\Controllers\FrontendController::class, 'categorydetail'])->name('category.detail');
Route::get('/productdetail/{id}', [App\Http\Controllers\FrontendController::class, 'productdetail'])->name('product.detail');
Route::get('/profile',[App\Http\Controllers\HomeController::class, 'profile'])->name('profile');
Auth::routes();

Route::get('/search', [App\Http\Controllers\HomeController::class, 'search'])->name('search');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/product/{id}', [App\Http\Controllers\HomeController::class, 'addCart']);
Route::get('/cart', [App\Http\Controllers\HomeController::class, 'cart']);
Route::get('/cart/{id}', [App\Http\Controllers\HomeController::class, 'deleteCart']);


