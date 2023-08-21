<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ProveedoresController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/productos', [ProductoController::class, 'index']);  //->name('prestamo.index');
Route::get('/productos/crear', [ProductoController::class, 'create']); 
Route::post('/productos/guardar', [ProductoController::class, 'store'])->name('producto.guardar');; 


Route::get('/empleado', [EmpleadoController::class, 'index']);
Route::get('/empleado/crear', [EmpleadoController::class, 'create']); 
Route::post('/empleado/guardar', [EmpleadoController::class, 'store'])->name('empleado.guardar');; 


Route::get('/proveedores', [ProveedoresController::class, 'index']);
Route::get('/proveedores/crear', [ProveedoresController::class, 'create']); 
Route::post('/proveedores/guardar', [ProveedoresController::class, 'store'])->name('proveedor.guardar');; 