<?php

use App\Http\Controllers\AddToCartController;
use App\Http\Controllers\BackendController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ProductController;
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
// ==========frontend=========================

Route::get('/', [FrontendController::class, 'index']);
Route::get('show/category/{id}', [FrontendController::class, 'UniqCategory'])->name('UniqCategory');
Route::get('add/details/{add_id}', [AddToCartController::class, 'addCart'])->name('addCart');
Route::get('add/cart/{cart_id}', [AddToCartController::class, 'addCartShow'])->name('addCartShow');


// ==========frontend=========================

// ==========backend banner=========================
Route::get('home', [BackendController::class, 'index']);
Route::get('show/banner', [BannerController::class, 'show'])->name('banner');
Route::post('store', [BannerController::class, 'store'])->name('store');
// ==========backend=========================
// ==========product=========================
Route::get('show/product', [ProductController::class, 'show'])->name('product');
Route::post('store/product', [ProductController::class, 'store'])->name('store.product');
// ==========product=========================
// ==========category=========================
Route::get('show/category', [CategoryController::class, 'show'])->name('category');

Route::post('store/category', [CategoryController::class, 'store'])->name('store');
// ==========category=========================
