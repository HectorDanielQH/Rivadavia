<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Productos;
use App\Http\Livewire\TipoProductos;
use App\Http\Livewire\Empleados;
use App\Http\Livewire\Administradores;
use App\Http\Livewire\ProductoCliente;
use App\Http\Livewire\ServicioCliente;
use App\Http\Livewire\RealizarPedidos;
use App\Http\Livewire\PedidosPendientesClientes;
use App\Http\Livewire\PedidosAprobadosCliente;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/tipo-productos', TipoProductos::class);
    Route::get('/producto',Productos::class);
    Route::get('/empleados',Empleados::class);
    Route::get('/administrador',Administradores::class);
    Route::get('/ProductosImprenta',ProductoCliente::class);
    Route::get('/ServiciosImprenta',ServicioCliente::class);
    Route::get('/RealizarPedidos',RealizarPedidos::class);
    Route::get('/PedidosPendientesClientes',PedidosPendientesClientes::class);
    Route::get('/PedidosAprobadosClientes',PedidosAprobadosCliente::class);
    Route::get('/dashboard',function(){
        return view('dashboard');
    })->name('dashboard');
});