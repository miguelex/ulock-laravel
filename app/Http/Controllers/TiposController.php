<?php

namespace ulock\Http\Controllers;

use Illuminate\Http\Request;

use ulock\Http\Requests;

use ulock\Http\Requests\UnicoRequest;

class TiposController extends ApiController
{
    public function mostrarTipos()
    {
        $tipos = $this->obtenerTodosLosTipos();
        return view('tipos.todos', ['tipos' => $tipos]);
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
        
    public function agregarTipo()
    {
        return view('tipos.agregar');
    }

    public function crearTipo(Request $request)
    {
        $this->almacenarTipo($request);
   
        return redirect('/tipos');
    }

    public function elegirTipo()
    {
        $tipos = $this->obtenerTodosLosTipos();
        return view('tipos.elegir', ['tipos' => $tipos]);
    }

    public function editarTipo(Request $request)
    {
        $id = $request->get('tipo_id');
        $tipo = $this->obtenerUnTipo($id);
        return view('tipos.editar', ['tipo' => $tipo]);
    }

    public function actualizarTipo(Request $request)
    {
        $this->modificarMarca($request);
        
        return redirect('tipos');
    }

    public function seleccionarTipo()
    {
        $tipos = $this->obtenerTodosLosTipos();
        return view('tipos.seleccionar', ['tipos' => $tipos]);
    }

    public function eliminarTipo(Request $request)
    {
        $this->removerTipo($request);
        
        return redirect('/tipos');
    }
}
