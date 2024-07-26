<?php

use App\Http\Controllers\Front\AboutController;
use App\Http\Controllers\Front\BlogController;
use App\Http\Controllers\Front\ChartController;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\ShopController;
use App\Http\Controllers\Front\TentangProdukController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index']);

Route::get('shop', [ShopController::class, 'index']);
// Route::get('shop-detail/{produk}', [ShopController::class, 'show']);
Route::get('shop-detail/{produk}', [ShopController::class, 'show'])->name('shop-detail');


Route::get('about', [AboutController::class, 'index']);
Route::get('cart', [ChartController::class, 'index']);
Route::get('blog', [BlogController::class, 'index']);

Route::resource('tentang-produk', TentangProdukController::class);
