<?php

use App\Http\Controllers\ProductController;
use App\Models\Product;
use Illuminate\Support\Facades\Route;

Route::get('/products',[ProductController::class,'index']);

Route::get('/', function () {
    return view('welcome');
});
