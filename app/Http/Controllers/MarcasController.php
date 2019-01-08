<?php

namespace ulock\Http\Controllers;

use Illuminate\Http\Request;

use ulock\Http\Requests;

use ulock\Http\Requests\UnicoRequest;

class MarcasController extends ApiController
{
    // Clase que trabaja con el modelo Marcas

    public function mostrarMarcas()
    {
        // Metodo que nos devuelve un lsitado con todos las marcas que tenemos en la BD

        $marcas = $this->obtenerTodosLosmarcas();
        return view('marcas.todos', ['marcas' => $marcas]);
    }

    public function mostrarMarca()
    {
        // Metodo que nos devuelve un select con todas las marcas de la BD y nos permite seleccionar una para usar en el sigueitne metodo
        $marcas = $this->obtenerTodosLosmarcas();
        return view('marcas.unico', ['marcas' => $marcas]);
    }

    public function obtenerMarca(UnicoRequest $request)
    {
        // Metodo que nos devuelve la informacion de la marca que hemos seleccionado en la vista anterior

        $id = $request->get('id');
        $marca = $this->obtenerUnaMarca($id);
        return view('marcas.mostrar', ['marca' => $marca]);
    }
    
    public function agregarMarca()
    {
        // Metodo que nos devuelve el formulario que debemos rellenar para añadir una nueva marca a la BD

        return view('marcas.agregar');
    }

    public function crearMarca(Request $request)
    {
        // Metodo que inserta en la BD la nueva marca creada en el formulario anterior

        $this->almacenarMarca($request);

        return redirect('/marcas');
    }

    public function elegirMarca()
    {
        // Metodo que devuelve la vista que nos va a permitir seleccionar la marca que queremso editar en el metodo que sigue

        $marcas = $this->obtenerTodosLosMarcas();
        return view('marcas.elegir', ['marcas' => $marcas]);
    }

    public function editarMarca(Request $request)
    {
        // Metodo que nos devuelve el formulario de edicion de la marca que seleccionamos previamente

        $id = $request->get('marca_id');
        $marca = $this->obtenerUnaMarca($id);
        return view('marcas.editar', ['marca' => $marca]);
    }

    public function actualizarMarca(Request $request)
    {
        // Metodo que mete en la BD los nuevos datos que hemos dado de alta en el paso anterior

        $this->modificarMarca($request);
        
        return redirect('/marcas');
    }

    public function seleccionarMarca()
    {
        // Metodo que nos devuelve uan vista para seleccionar la marca que queremos eliminar

        $marcas = $this->obtenerTodosLosMarcas();
        return view('marcas.seleccionar', ['marcas' => $marcas]);
    }

    public function eliminarMarca(Request $request)
    {
        // Metodo que elimina de la BD la marca que seleccionamos en la vista anterior
        
        $this->removerMarca($request);
        
        return redirect('/marcas');
    }

    public function verMarca($id)
    {
        // Metodo que se usa en el boton ver del la pagina de index de marcas

        $marca = $this->obtenerUnaMarca($id);

        return view('marcas.mostrar', ['marca' => $marca]);
    }

    public function editMarca($id)
    {
        // Metodo que se usa en el boton editar del la pagina de index de marcas

        $marca = $this->obtenerUnaMarca($id);
    
        return view('marcas.editar', ['marca' => $marca]);
    }

    public function borrarMarca($id)
    {
        // Metodo que se usa en el boton borrar del la pagina de index de marcas

        $this->deleteMarca($id);
        
        return redirect('/marcas');
    }
}