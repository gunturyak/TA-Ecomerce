<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProdukController;
use App\Http\Controllers\Front\AboutController;
use App\Http\Controllers\Front\BlogController;
use App\Http\Controllers\Front\ChartController;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\ShopController;
use Illuminate\Support\Facades\Route;




Route::get('/', [HomeController::class, 'index']);

Route::get('shop', [ShopController::class, 'index']);
Route::get('shop-detail', [ShopController::class, 'show']);

Route::get('about', [AboutController::class, 'index']);
Route::get('cart', [ChartController::class, 'index']);
Route::get('blog', [BlogController::class, 'index']);
//Dashboard
Route::get('Admin/Dashboard', [DashboardController::class, 'index']);
//Produk
Route::get('Admin/Produk', [ProdukController::class, 'index']);
Route::resource('Admin/Produk', ProdukController::class);
Route::delete('Admin/Produk{produk}', [ProdukController::class, 'destroy']);
//Data-Produk
Route::get('Admin/Data-Produk', [ProdukController::class, 'data']);
