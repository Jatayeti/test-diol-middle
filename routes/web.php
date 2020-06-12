<?php

use App\Http\Controllers\CartsController;
use App\Http\Controllers\ProductsController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/products', [ProductsController::class, 'index']);
Route::get('/products/{product}', [ProductsController::class, 'show']);

Route::get('/cart', [CartsController::class, 'index']);
Route::get('/cart/toggle/{product}', [CartsController::class, 'toggle']);
Route::get('/cart/remove/{product}', [CartsController::class, 'remove']);
