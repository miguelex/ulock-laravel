<?php

namespace ulock\Http\Controllers;

use Illuminate\Http\Request;

use ulock\Http\Requests;

class MarcasController extends Controller
{
    public function mostrarMarcas()
    {
    	$marcas = $this->obtenerTodosLasMarcas();
    	return view('marcas.todos', ['marcas' => $marcas]);
    }
    protected function obtenerTodosLasMarcas()
    {
    	$respuesta = $this->realizarPeticion('GET', 'https://ziptest.com.es/marcas');
    	$datos = json_decode($respuesta);
    	$marcas = $datos->data;
    	return $marcas;
    }
}
