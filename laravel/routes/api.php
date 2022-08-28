<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\v1\ProductosController; //colocar david
use App\Http\Controllers\v1\CategoriasController; //colocar david2
use App\Http\Controllers\v1\ClientesController; //colocar david3
use App\Http\Controllers\v1\PedidosController; //colocar david3
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/v1/productos', [ProductosController::class, 'getproductos']);
Route::get('/v1/productos/{id}', [ProductosController::class, 'getitem']);
//Route::get('/v1/categorias', [CategoriasController::class, 'getcategorias']);
//Route::get('/v1/clientes', [ClientesController::class, 'getclientes']);



Route::post('/v1/productos', [ProductosController::class, 'store']);
Route::put('/v1/productos/{id}', [ProductosController::class, 'update']);
Route::patch('/v1/productos/{id}', [ProductosController::class, 'patchUpdate']);

Route::delete('/v1/productos/{id}', [ProductosController::class, 'delete']);

//roteo de clientes

Route::get('/v1/clientes', [ClientesController::class, 'getclientes']);
Route::get('/v1/cientes/{id}', [ClientesController::class, 'getitem']);




Route::post('/v1/clientes', [ClientesController::class, 'store']);
Route::put('/v1/clientes/{id}', [ClientesController::class, 'update']);
Route::patch('/v1/clientes/{id}', [ClientesController::class, 'patchUpdate']);

Route::delete('/v1/clientes/{id}', [ClientesController::class, 'delete']);

//roteo de pedidos

Route::get('/v1/pedidos', [PedidosController::class, 'getpedidos']);
Route::get('/v1/pedidos/{id}', [PedidosController::class, 'getitem']);




Route::post('/v1/pedidos', [PedidosController::class, 'store']);
Route::put('/v1/pedidos/{id}', [PedidosController::class, 'update']);
Route::patch('/v1/pedidos/{id}', [PedidosController::class, 'patchUpdate']);

Route::delete('/v1/pedidos/{id}', [PedidosController::class, 'delete']);
