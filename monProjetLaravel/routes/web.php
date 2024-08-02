<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ProductController as AdminProductController;


Route::get('/', [HomeController::class, 'index']);

Route::get('/product', [ProductController::class, 'index']);

Route::get('/product/{id}', [ProductController::class, 'show']);

Route::get('/products/name', [ProductController::class, 'productByName']);

Route::get('/products/price', [ProductController::class, 'productByPrice']);

Route::get('/cart',[CartController::class, 'index']);


Route::get('backoffice/show', [AdminController::class, 'show']);

Route::get('/backoffice/create', [AdminController::class, 'create']);

Route::get('/backoffice/{id}/edit', [AdminController::class, 'edit']);

Route::get('/backoffice/{id}/delete', [AdminController::class, 'destroy']);

