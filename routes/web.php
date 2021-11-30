<?php

use App\Http\Controllers\FrontEndController;
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

Route::get('/', [FrontEndController::class, 'index'])->name('home');
Route::get('/about-us', [FrontEndController::class, 'aboutus'])->name('aboutus');
Route::get('/products', [FrontEndController::class, 'products'])->name('products');
Route::get('/products/cocoa', [FrontEndController::class, 'cocoa'])->name('cocoa');
Route::get('/products/fruits', [FrontEndController::class, 'fruits'])->name('fruits');
