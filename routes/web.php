<?php

use Illuminate\Support\Facades\Route;

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

route::get('cliente','ClienteController@index');
Route::get('compra', 'CompraController@index');
Route::get('compradetalle', 'CompradetalleController@index');
Route::get('producto', 'ProductoController@index');
Route::get('proveedores', 'ProveedoresController@index');
Route::get('usuario', 'UsuarioController@index');
Route::get('venta', 'VentaController@index');
Route::get('ventadetalle', 'VentadetalleController@index');

