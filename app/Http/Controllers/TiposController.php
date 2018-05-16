<?php

namespace ulock\Http\Controllers;

use Illuminate\Http\Request;

use ulock\Http\Requests;

class TiposController extends Controller
{
    public function mostrarTipos()
    {
    	$tipos = $this->obtenerTodosLosTipos();
    	return view('tipos.todos', ['tipos' => $tipos]);
    }
    protected function obtenerTodosLosTipos()
    {
    	$respuesta = $this->realizarPeticion('GET', 'https://ziptest.com.es/tipos');
    	$datos = json_decode($respuesta);
    	$tipos = $datos->data;
    	return $tipos;
    }
}
