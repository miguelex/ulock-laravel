<?php

namespace ulock\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use ulock\Http\Requests;
use ulock\Http\Requests\UnicoRequest;

class DispositivosController extends ApiController
{
    // Clase que contiene los metodos que realzian funciones con los dispositivos

    public function mostrarDispositivos()
    {
        // Metodo que devuelve un listado con todos lso dispositivos de la BD

        $dispositivos = $this->obtenerTodosLosDispositivos();
        return view('dispositivos.todos', ['dispositivos' => $dispositivos]);
    }

    public function SeleccionarMarca()
    {
        // Metodo que nos devuelve la lista de marcas que tenemos en la BD y nos permite seleccionar una

        $marcas = $this->obtenerTodosLosMarcas();

        return view('dispositivos.marcas', ['marcas' => $marcas]);
    }
    
    public function mostrarDispositivoMarca(Request $request)
    {
        // Metodo que nos devuelve un listado de todos los dispositivos que pertenecen a la marca que hemos seleccioando previamente

        $marcaId = $request->get('marca_id');

        $dispositivos = $this->obtenerDispositivosMarca($marcaId);

        return view('dispositivos.todos', ['dispositivos' => $dispositivos]);
    }

    public function SeleccionarTipo()
    {
        // Metodo que nos devuelve la lista de tipos que tenemos en la BD y nos permite seleccionar uno

        $tipos = $this->obtenerTodosLosTipos();

        return view('dispositivos.tipos', ['tipos' => $tipos]);
    }
    
    public function mostrarDispositivoTipo(Request $request)
    {
        
        // Metodo que nos devuelve un listado de todos los dispositivos que pertenecen a la marca que hemos seleccioando previamente

        $tipoId = $request->get('tipo_id');

        $dispositivos = $this->obtenerDispositivosTipo($tipoId);

        return view('dispositivos.todos', ['dispositivos' => $dispositivos]);
    }
   
}