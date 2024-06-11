<?php

use App\Http\Controllers\Front\ChartController;
use Illuminate\Support\Facades\Route;





Route::prefix('Admin')->group(function () {
    include "_/backend.php";
});



Route::prefix('/')->group(function () {
    include "_/frontend.php";
});

Route::post('/add-to-cart', [ChartController::class, 'addToCart'])->name('add-to-cart');
Route::get('Cart', [ChartController::class, 'index']);
