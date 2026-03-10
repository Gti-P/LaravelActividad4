<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\VentaController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClienteController;

/* DASHBOARD */

Route::get('/', [AdminController::class,'dashboard']);

/* INVENTARIO */

Route::get('/inventario', [ProductoController::class,'index']);

/* VENTAS */

Route::get('/venta', [VentaController::class,'crearVenta']);
Route::post('/venta/guardar', [VentaController::class,'guardarVenta']);

/* ADMIN */

Route::get('/admin/ventas', [AdminController::class,'ventas'])->name('admin.ventas');
Route::get('/admin/resumen', [AdminController::class,'resumenDiario']);
Route::post('/admin/inventario/agregar', [ProductoController::class,'agregarStock'])->name('inventario.agregar');

/* CLIENTE */

Route::get('/cliente', [ClienteController::class,'catalogo']);
Route::get('/cliente/catalogo', [ClienteController::class, 'catalogo'])->name('cliente.catalogo');