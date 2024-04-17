<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DestinoController;
use App\Http\Controllers\AvionController;
use App\Http\Controllers\compraController;


use Illuminate\Support\Facades\Route;

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
    return view('index');
});

//registro clientes
Route::get('/auth/login', [AuthController::class, 'login'])->name('login');
Route::get('/auth/sign', [AuthController::class, 'sign'])->name('sign');
Route::post('/api/crear-cliente', [AuthController::class, 'crearCliente'])->name('crearCliente');

//admin
Route::get('/admin', [AdminController::class, 'index'])->name('admin');
Route::post('/api/agregar-aeronave', [AdminController::class, 'agregarAeronave'])->name('agregarAeronave');
Route::delete('/api/eliminar-aeronave/{id}', [AdminController::class, 'eliminarAeronave'])->name('eliminarAeronave');
Route::get('/destinos', [DestinoController::class, 'index'])->name('destinos');

// Route::get('/aeronaves', [AvionController::class, 'index'])->name('aviones');
// Route::post('/guardar-aeronave', [AvionController::class, 'agregarAeronave'])->name('guardarAeronave');

Route::get('/comprar-boletos', [compraController::class, 'index'])->name('compraBoletos');
