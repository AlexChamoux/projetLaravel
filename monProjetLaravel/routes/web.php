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


Route::get('backoffice/', [AdminController::class, 'index'])->name('admin.index');

Route::get('/backoffice/create', [AdminController::class, 'create']);

Route::get('/backoffice/show/{id}', [AdminController::class, 'show']);

Route::get('/backoffice/edit/{id}', [AdminController::class, 'edit']);

Route::delete('/backoffice/delete/{id}', [AdminController::class, 'destroy']);


Route::post('/backoffice/store', [AdminController::class, 'store']);

Route::post('/backoffice/update/{id}', [AdminController::class, 'update']);
