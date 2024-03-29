<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/blog/add', [BlogController::class, 'index'])->name('blog.add');
Route::get('/blog/manage', [BlogController::class, 'manage'])->name('blog.manage');
Route::post('/blog/create', [BlogController::class, 'create'])->name('blog.create');

