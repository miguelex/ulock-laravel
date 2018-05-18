<?php

namespace ulock\Http\Controllers;

use Illuminate\Http\Request;

use ulock\Http\Requests;

use ulock\Http\Requests\UnicoRequest;

class MarcasController extends ApiController
{
    public function mostrarMarcas()
    {
        $marcas = $this->obtenerTodosLosmarcas();
        return view('marcas.todos', ['marcas' => $marcas]);
    }

    public function mostrarMarca()
    {
        return view('marcas.unico');
    }

    public function obtenerMarca(UnicoRequest $request)
    {
        $id = $request->get('id');
        $marca = $this->obtenerUnaMarca($id);
        return view('marcas.mostrar', ['marca' => $marca]);
    }
    
    public function agregarMarca()
    {
        return view('marcas.agregar');
    }

    public function crearMarca(Request $request)
    {
        $this->almacenarMarca($request);

        return redirect('/marcas');
    }

    public function elegirMarca()
    {
        $marcas = $this->obtenerTodosLosMarcas();
        return view('marcas.elegir', ['marcas' => $marcas]);
    }

    public function editarMarca(Request $request)
    {
        $id = $request->get('marca_id');
        $marca = $this->obtenerUnaMarca($id);
        return view('marcas.editar', ['marca' => $marca]);
    }

    public function actualizarMarca(Request $request)
    {
        $this->modificarMarca($request);
        
        return redirect('/marcas');
    }

    public function seleccionarMarca()
    {
        $marcas = $this->obtenerTodosLosMarcas();
        return view('marcas.seleccionar', ['marcas' => $marcas]);
    }

    public function eliminarMarca(Request $request)
    {
        $this->removerMarca($request);
        
        return redirect('/marcas');
    }
}
