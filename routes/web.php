<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Front\ChartController;
use App\Http\Controllers\Front\ContactController;
use Illuminate\Support\Facades\Route;



Route::get('Login', [AuthController::class, 'showLogin']);
Route::post('Login', [AuthController::class, 'loginProcess'])->name('ProsesLogin');
Route::get('Register', [AuthController::class, 'register']);
Route::post('Register', [AuthController::class, 'registerProcess'])->name('ProsesRegister');
Route::get('Logout', [AuthController::class, 'logout']);


Route::prefix('Admin')->group(function () {
    include "_/backend.php";
});



Route::prefix('/')->group(function () {
    include "_/frontend.php";
});

Route::post('/add-to-cart', [ChartController::class, 'addToCart'])->name('add-to-cart');
Route::get('Cart', [ChartController::class, 'index'])->name('cart');
Route::post('/remove-from-cart/{id}', [ChartController::class, 'removeFromCart'])->name('remove-from-cart');
Route::patch('/cart/update', [ChartController::class, 'updateQuantity'])->name('cart.update');

Route::get('Contact', [ContactController::class, 'index']);
