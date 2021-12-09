<?php

use App\Http\Controllers\ProductAttributeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('index');
});
Route::middleware('auth')->get('home', function () {
    return view('dashboard');
});

Route::resource('products', ProductController::class);
Route::resource('productAttributes', ProductAttributeController::class);
Route::post('/productAttributes/{product}', [ProductAttributeController::class, 'store'])->name('productAttributes.store_att');
