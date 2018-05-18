<?php

namespace ulock\Http\Controllers;

use Illuminate\Http\Request;

use ulock\Http\Requests;

use ulock\Http\Requests\UnicoRequest;

class MarcasController extends Controller
{
    public function mostrarMarcas()
    {
        $marcas = $this->obtenerTodosLosmarcas();
        return view('marcas.todos', ['marcas' => $marcas]);
    }

    protected function obtenerTodosLosMarcas()
    {
        $respuesta = $this->realizarPeticion('GET', 'https://ziptest.com.es/marcas');
        $datos = json_decode($respuesta);
        $marcas = $datos->data;
        return $marcas;
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
    
    protected function obtenerUnaMarca($id)
    {
        $respuesta = $this->realizarPeticion('GET', "https://ziptest.com.es/marcas/{$id}");
        $datos = json_decode($respuesta);
        $marca = $datos->data;
        return $marca;
    }

    public function agregarMarca()
    {
        return view('marcas.agregar');
    }

    public function crearMarca(Request $request)
    {
        $respuesta = $this->realizarPeticion('POST', 'https://ziptest.com.es/marcas', ['form_params' => $request->all()]);
        
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
        $id = $request->get('id');
        $respuesta = $this->realizarPeticion('PUT', "https://ziptest.com.es/marcas/{$id}", ['form_params' => $request->except('id')]);
        return redirect('/marcas');
    }
}
