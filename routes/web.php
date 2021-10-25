<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\ShopController;
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

Route::get('/', [LandingPageController::class, 'index']);

Route::get('login', function(){
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/shop', [ShopController::class, 'index']);

Route::get('/shop/category/{id}', [ShopController::class, 'category']);

Route::get('/cart', [CartController::class, 'index']);

Route::get('/shop/detail/{id}', [ShopController::class, 'show']);

Route::post('/cart/store', [CartController::class, 'store']);

Route::patch('cart/{id}', [CartController::class, 'update']);

Route::post('/check_out', [CheckoutController::class, 'store']);