<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FullNameController;
use App\Http\Controllers\CalculatorController;

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
Route::get('/full-name', [FullNameController::class, 'fullName'])->name('full-name');
Route::post('/get-full-name', [FullNameController::class, 'getFullName'])->name('get-full-name');
Route::get('/calculator', [CalculatorController::class, 'calculator'])->name('calculator');
Route::post('/calculate', [CalculatorController::class, 'calculate'])->name('calculate');
