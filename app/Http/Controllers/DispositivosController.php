<?php

namespace ulock\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use ulock\Http\Requests;
use ulock\Http\Requests\UnicoRequest;

class DispositivosController extends ApiController
{
    public function mostrarDispositivos()
    {
        $dispositivos = $this->obtenerTodosLosDispositivos();
        return view('dispositivos.todos', ['dispositivos' => $dispositivos]);
    }

    public function SeleccionarMarca()
    {

        $marcas = $this->obtenerTodosLosMarcas();

        return view('dispositivos.marcas', ['marcas' => $marcas]);
    }
    
    public function mostrarDispositivoMarca(Request $request)
    {

        $marcaId = $request->get('marca_id');

        $dispositivos = $this->obtenerDispositivosMarca($marcaId);

        return view('dispositivos.todos', ['dispositivos' => $dispositivos]);
    }

    public function SeleccionarTipo()
    {

        $tipos = $this->obtenerTodosLosTipos();

        return view('dispositivos.tipos', ['tipos' => $tipos]);
    }
    
    public function mostrarDispositivoTipo(Request $request)
    {

        $tipoId = $request->get('tipo_id');

        $dispositivos = $this->obtenerDispositivosTipo($tipoId);

        return view('dispositivos.todos', ['dispositivos' => $dispositivos]);
    }
   
}
