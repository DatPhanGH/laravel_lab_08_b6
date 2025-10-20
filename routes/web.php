<?php

use App\Http\Controllers\ProductController;
use App\Models\Product;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;


Route::get('/students',[StudentController::class,'index']);
Route::get('/products',[ProductController::class,'index']);

Route::get('/', function () {
    return view('welcome');
});
