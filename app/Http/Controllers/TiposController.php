<?php

namespace ulock\Http\Controllers;

use Illuminate\Http\Request;

use ulock\Http\Requests;

use ulock\Http\Requests\UnicoRequest;

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

    public function mostrarTipo()
    {
        return view('tipos.unico');
    }

    public function obtenerTipo(UnicoRequest $request)
    {
        $id = $request->get('id');
        $tipo = $this->obtenerUnTipo($id);
        return view('tipos.mostrar', ['tipo' => $tipo]);
    }
    
    protected function obtenerUnTipo($id)
    {
        $respuesta = $this->realizarPeticion('GET', "https://ziptest.com.es/tipos/{$id}");
        $datos = json_decode($respuesta);
        $tipo = $datos->data;
        return $tipo;
    }

    public function agregarTipo()
    {
        return view('tipos.agregar');
    }

    public function crearTipo(Request $request)
    {
        $respuesta = $this->realizarPeticion('POST', 'https://ziptest.com.es/tipos', ['form_params' => $request->all()]);
        
        return redirect('/tipos');
    }
}
