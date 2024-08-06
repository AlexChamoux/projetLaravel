<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BackofficeController;

Route::get('/', [HomeController::class, 'index']);

Route::get('/product', [ProductController::class, 'index']);

Route::get('/product/{id}', [ProductController::class, 'show']);

Route::get('/cart',[CartController::class, 'index']);
//Route::prefix('backoffice') :ajoute un préfixe 'backoffice' à toutes les routes définies à l'intérieur du groupe
// exemple: si une route définie à l'intérieur du groupe est /create, son URL complète deviendra /backoffice/create
Route::prefix('backoffice')->group(function() {
    //->group(function() : une methode qui prend une fonction dans laquelle on definit toutes
    //toutes les routes qui doivent partager le préfixe spécifié. Toutes les routes définies à
    // l'intérieur de cette fonction auront automatiquement le préfixe backoffice ajouté à leur URL.
    Route::get('/', [BackofficeController::class, 'index'])->name('backoffice.index');
    Route::get('/create', [BackofficeController::class, 'create'])->name('backoffice.create');
    Route::post('/store', [BackofficeController::class, 'store'])->name('backoffice.store');
    Route::get('/edit/{id}', [BackofficeController::class, 'edit'])->name('backoffice.edit');
    Route::put('/update/{id}', [BackofficeController::class, 'update'])->name('backoffice.update');
    Route::delete('/delete/{id}', [BackofficeController::class, 'destroy'])->name('backoffice.destroy');
});