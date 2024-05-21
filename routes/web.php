<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProdukController;
use App\Http\Controllers\Front\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('Home', [HomeController::class, 'index']);
Route::get('Admin/Dashboard', [DashboardController::class, 'index']);
Route::get('Admin/Produk', [ProdukController::class, 'index']);
Route::get('Admin/Data-Produk', [ProdukController::class, 'data']);