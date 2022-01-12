<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
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

Route::get('/', [HomeController::class, 'index']);
Route::get('/category/{category}', [HomeController::class, 'show'])->name('showCategory');

Route::get('/products/{product}', [ProductController::class, 'show'])->name('showProduct');

Route::get('/cart', [CartController::class, 'index'])->name('showCart');
Route::post('/add-product/{product}', [CartController::class, 'addProduct'])->name('addProduct');
Route::post('/cart/update', [CartController::class, 'update'])->name('updateProduct');
Route::get('cart/remove/{id}', [CartController::class, 'removeProduct'])->name('removeProduct');

Route::resource('users', UserController::class);

