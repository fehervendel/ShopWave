<?php

use App\Http\Controllers\ProductsController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\CartController;
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

Route::get('/', function () {
    return view('index');
})->name('welcome');

Route::get('/{category}', [ProductsController::class, 'index'])->where('category', 'sneakers|boots|high-heels')->name('products.index');
Route::get('/products', [ProductsController::class, 'productsIndex'])->name('products');
Route::get('/products/{id}', [ProductsController::class, 'show'])->name('products.show');
Route::get('/cart', [CartController::class, 'index'])->name('cart');
Route::post('/cart/{id}', [CartController::class, 'store'])->name('cart.store');
Route::delete('/cart/{id}', [CartController::class, 'destroy'])->name('cart.destroy');
Route::post('/orders', [OrdersController::class, 'store'])->name('orders.store');
