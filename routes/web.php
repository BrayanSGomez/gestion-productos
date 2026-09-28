<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProductoController;
use Illuminate\Support\Facades\Route;

// Redireccionar la página principal directamente a Categorías
Route::get('/', function () {
    return redirect()->route('categorias.index');
});

// Rutas de tipo Resource para Categorías y Productos
Route::resource('categorias', CategoriaController::class);
Route::resource('productos', ProductoController::class);