<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProdukController;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\ShopController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('Home', [HomeController::class, 'index']);
Route::get('Shop', [ShopController::class, 'index']);
//Dashboard
Route::get('Admin/Dashboard', [DashboardController::class, 'index']);
//Produk
Route::get('Admin/Produk', [ProdukController::class, 'index']);
Route::delete('Admin/Produk{produk}', [ProdukController::class, 'destroy']);
//Data-Produk
Route::get('Admin/Data-Produk', [ProdukController::class, 'data']);