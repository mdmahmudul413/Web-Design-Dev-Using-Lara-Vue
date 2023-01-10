<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EcommerceController;
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

Route::get('/', [EcommerceController::class, 'index'])->name('home');
Route::get('/product-category', [EcommerceController::class, 'category'])->name('product.category');
Route::get('/product-detail', [EcommerceController::class, 'detail'])->name('product.detail');
Route::get('/cart/add-item', [CartController::class, 'index'])->name('cart.add');
