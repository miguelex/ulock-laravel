<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('principal');
});

Route::get('/clientes', 'ClientesController@mostrarClientes');
Route::get('/tipos', 'TiposController@mostrarTipos');
Route::get('/marcas', 'MarcasController@mostrarMarcas');
Route::post('/clientes/unico', 'ClientesController@obtenerCliente');
Route::get('/clientes/unico', 'ClientesController@mostrarCliente');
Route::post('/marcas/unico', 'MarcasController@obtenerMarca');
Route::get('/marcas/unico', 'MarcasController@mostrarMarca');
Route::post('/tipos/unico', 'TiposController@obtenerTipo');
Route::get('/tipos/unico', 'TiposController@mostrarTipo');
Route::post('/clientes/agregar', 'ClientesController@crearCliente');
Route::get('/clientes/agregar', 'ClientesController@agregarCliente');
Route::post('/marcas/agregar', 'MarcasController@crearMarca');
Route::get('/marcas/agregar', 'MarcasController@agregarMarca');
Route::post('/tipos/agregar', 'TiposController@crearTipo');
Route::get('/tipos/agregar', 'TiposController@agregarTipo');
Route::put('/marcas/actualizar', 'MarcasController@actualizarMarca');
Route::post('/marcas/actualizar', 'MarcasController@editarMarca');
Route::get('/marcas/actualizar', 'MarcasController@elegirMarca');