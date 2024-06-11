<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProdukController;

use Illuminate\Support\Facades\Route;


Route::get('Dashboard', [DashboardController::class, 'index']);
//Produk
Route::resource('Produk', ProdukController::class);
Route::delete('Produk{produk}', [ProdukController::class, 'destroy']);
//Data-Produk
Route::resource('Data-Produk', ProdukController::class);
