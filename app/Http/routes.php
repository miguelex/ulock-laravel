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