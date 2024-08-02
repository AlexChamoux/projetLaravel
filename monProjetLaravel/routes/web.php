<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);

Route::get('/product', [ProductController::class, 'index']);

Route::get('/product/{id}', [ProductController::class, 'show']);

Route::get('name', [ProductController::class, 'productByName']);

Route::get('/price', [ProductController::class, 'productByPrice']);

Route::get('/cart',[CartController::class, 'index']);


