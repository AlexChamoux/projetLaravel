<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index']);

Route::get('/product', [ProductController::class, 'index']);

Route::get('/product/{id}', [ProductController::class, 'show']);

Route::get('/products/name', [ProductController::class, 'productByName']);

Route::get('/products/price', [ProductController::class, 'productByPrice']);



Route::get('backoffice/', [AdminController::class, 'index'])->name('admin.index');

Route::get('/backoffice/create', [AdminController::class, 'create']);
Route::post('/backoffice/store', [AdminController::class, 'store']);

Route::get('/backoffice/show/{id}', [AdminController::class, 'show']);

Route::get('/backoffice/edit/{id}', [AdminController::class, 'edit']);
Route::put('/backoffice/update/{id}', [AdminController::class, 'update']);

Route::delete('/backoffice/delete/{id}', [AdminController::class, 'destroy']);


Route::get('/HomeController/productByOrder/{id}', [HomeController::class, 'productsByOrder']);
Route::get('/HomeController/productByOrderAndCategory/{id}', [HomeController::class, 'productsByOrderAndCategory']);
Route::get('/HomeController/productByCategory/', [HomeController::class, 'productsByCategory']);



