<?php

namespace ulock\Http\Controllers;

use Illuminate\Http\Request;

use ulock\Http\Requests;

use ulock\Http\Requests\UnicoRequest;

class TiposController extends ApiController
{
    // Clase que gestiona al modelo Tipos

    public function mostrarTipos()
    {
        // Metodo que nos devuelve un lsitado con todos los tipos que tenemos en la BD

        $tipos = $this->obtenerTodosLosTipos();
        return view('tipos.todos', ['tipos' => $tipos]);
    }

    public function mostrarTipo()
    {
        // Metodo que nos devuelve uan vista para seleccionar el tipo que queremos comproabar

        return view('tipos.unico');
    }

    public function obtenerTipo(UnicoRequest $request)
    {
        // Metodo que nos devuelve la información del tipo que hemos seleccioando previamente

        $id = $request->get('id');
        $tipo = $this->obtenerUnTipo($id);
        return view('tipos.mostrar', ['tipo' => $tipo]);
    }
        
    public function agregarTipo()
    {
        // Metodo que nos da el formulario que nos va a permirtir dar de alta un nuevo tipo en la BD

        return view('tipos.agregar');
    }

    public function crearTipo(Request $request)
    {
        // Metodo que inserta en la BD el nuevo tipo creado en el formulario anterior

        $this->almacenarTipo($request);
   
        return redirect('/tipos');
    }

    public function elegirTipo()
    {
        // Metodo que nos devuelve una vista para seleccioanr un tipo, que psoteriormente sera el que editemos

        $tipos = $this->obtenerTodosLosTipos();
        return view('tipos.elegir', ['tipos' => $tipos]);
    }

    public function editarTipo(Request $request)
    {
        // Metodo que nos da un formulario que nos va a permitir editar los datos del tipo que recuperamos mendiante el formulario anterior

        $id = $request->get('tipo_id');
        $tipo = $this->obtenerUnTipo($id);
        return view('tipos.editar', ['tipo' => $tipo]);
    }

    public function actualizarTipo(Request $request)
    {
        // Metodo que actualiza la BD con los nuevos datos que hemos introducido

        $this->modificarMarca($request);
        
        return redirect('tipos');
    }

    public function seleccionarTipo()
    {
        // Metodo que nos devuelve uan vista destinada a seleccionar un tipo para su eliminacion

        $tipos = $this->obtenerTodosLosTipos();
        return view('tipos.seleccionar', ['tipos' => $tipos]);
    }

    public function eliminarTipo(Request $request)
    {
        // Metodo que elimina de la BD al tipo que hemos seleccionado en la vista anterior

        $this->removerTipo($request);
        
        return redirect('/tipos');
    }
}