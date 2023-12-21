<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\productController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('product/index', [productController::class, 'index']);
Route::get('product/create', [productController::class, 'create']);
Route::post('product/postCreate', [productController::class, 'postCreate']);
Route::get('product/update/{id}', [productController::class, 'update']);
Route::post('product/postUpdate/{id}', [productController::class, 'postUpdate']);
Route::get('product/delete/{id}', [productController::class, 'delete']);
