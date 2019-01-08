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

Route::get('/principal', function () {
    return view('principal');
});

// Ruta Home
Route::get('/','HomeController@index');
Route::get('/faq','HomeController@noticias');
Route::get('/contacto','HomeController@contacto');
Route::get('/acerca','HomeController@acerca');
Route::get('/privacidad','HomeController@privacidad');
Route::get('/cookies','HomeController@cookies');

// Rutas clientes

Route::get('/clientes', 'ClientesController@mostrarClientes');
Route::post('/clientes/unico', 'ClientesController@obtenerCliente');
Route::get('/clientes/unico', 'ClientesController@mostrarCliente');
Route::post('/clientes/agregar', 'ClientesController@crearCliente');
Route::get('/clientes/agregar', 'ClientesController@agregarCliente');
Route::put('/clientes/actualizar', 'ClientesController@actualizarCliente');
Route::post('/clientes/actualizar', 'ClientesController@editarCliente');
Route::get('/clientes/actualizar', 'ClientesController@elegirCliente');
Route::post('/clientes/eliminar', 'ClientesController@eliminarCliente');
Route::get('/clientes/eliminar', 'ClientesController@seleccionarCliente');


// ------------------------------------------------------------------------------------

// Rutas clientes especiales

Route::get('/cliente/ver/{id}', 'ClientesController@verCliente');
Route::get('/cliente/editar/{id}', 'ClientesController@editCliente'); 
Route::get('/cliente/borrar/{id}', 'ClientesController@borrarCliente'); 

// ------------------------------------------------------------------------------------

// Rutas tipos

Route::get('/tipos', 'TiposController@mostrarTipos');
Route::post('/tipos/unico', 'TiposController@obtenerTipo');
Route::get('/tipos/unico', 'TiposController@mostrarTipo');
Route::post('/tipos/agregar', 'TiposController@crearTipo');
Route::get('/tipos/agregar', 'TiposController@agregarTipo');
Route::put('/tipos/actualizar', 'TiposController@actualizarTipo');
Route::post('/tipos/actualizar', 'TiposController@editarTipo');
Route::get('/tipos/actualizar', 'TiposController@elegirTipo');
Route::post('/tipos/eliminar', 'TiposController@eliminarTipo');
Route::get('/tipos/eliminar', 'TiposController@seleccionarTipo');

// --------------------------------------------------------------------------------------

// Rutas tipos especiales

Route::get('/tipo/ver/{id}', 'TiposController@verTipo');
Route::get('/tipo/editar/{id}', 'TiposController@editTipo'); 
Route::get('/tipo/borrar/{id}', 'TiposController@borrarTipo'); 

// ------------------------------------------------------------------------------------

// Rutas marcas

Route::get('/marcas', 'MarcasController@mostrarMarcas');
Route::post('/marcas/unico', 'MarcasController@obtenerMarca');
Route::get('/marcas/unico', 'MarcasController@mostrarMarca');
Route::post('/marcas/agregar', 'MarcasController@crearMarca');
Route::get('/marcas/agregar', 'MarcasController@agregarMarca');
Route::put('/marcas/actualizar', 'MarcasController@actualizarMarca');
Route::post('/marcas/actualizar', 'MarcasController@editarMarca');
Route::get('/marcas/actualizar', 'MarcasController@elegirMarca');
Route::post('/marcas/eliminar', 'MarcasController@eliminarMarca');
Route::get('/marcas/eliminar', 'MarcasController@seleccionarMarca');

// ----------------------------------------------------------------------------------------

// Rutas marcas especiales

Route::get('/marca/ver/{id}', 'MarcasController@verMarca');
Route::get('/marca/editar/{id}', 'MarcasController@editMarca'); 
Route::get('/marca/borrar/{id}', 'MarcasController@borrarMarca'); 

// ------------------------------------------------------------------------------------

// Rutas dispositivos

Route::get('/dispositivos', 'DispositivosController@mostrarDispositivos');

// ----------------------------------------------------------------------------------------

// Ruta GPS

Route::get('/dispositivos/gps', 'DispositivoGpsController@mostrarDispositivos');
Route::post('/dispositivos/gps', 'DispositivoGpsController@mostrarPosiciones');
Route::get('/dispositivos/filtrado', 'DispositivoGpsController@filtrarPosiciones');

// -----------------------------------------------------------------------------------------

// Rutas accesos

Route::get('/dispositivos/acceso', 'DispositivoGpsController@seleccionarDispositivos');
Route::post('/dispositivos/acceso', 'DispositivoGpsController@mostrarAccesos');

// -----------------------------------------------------------------------------------------

// Rutas dispositivos por marca

Route::get('/dispositivos/marca', 'DispositivosController@seleccionarMarca');
Route::post('/dispositivos/marca', 'DispositivosController@mostrarDispositivoMarca');

// -----------------------------------------------------------------------------------------

// Rutas dispositivos por tipos

Route::get('/dispositivos/tipo', 'DispositivosController@seleccionarTipo');
Route::post('/dispositivos/tipo', 'DispositivosController@mostrarDispositivoTipo');
Route::get('/provincias', 'ApiController@obtenerProvinciasPais');

// -----------------------------------------------------------------------------------------

// Rutas login

Route::get('/login', 'LoginController@principal');
Route::post('/login', 'LoginController@entrar');

Route::get('lang/{lang}', function($lang) {
  \Session::put('lang', $lang);
  return \Redirect::back();
})->middleware('web')->name('change_lang');