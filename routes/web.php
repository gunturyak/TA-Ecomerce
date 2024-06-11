<?php


use Illuminate\Support\Facades\Route;





Route::prefix('Admin')->group(function () {
    include "_/backend.php";
});



Route::prefix('/')->group(function () {
    include "_/frontend.php";
});
