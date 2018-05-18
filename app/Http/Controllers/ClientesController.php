<?php

namespace ulock\Http\Controllers;

use Illuminate\Http\Request;

use ulock\Http\Requests;

use ulock\Http\Requests\UnicoRequest;

class ClientesController extends ApiController
{
    public function mostrarClientes()
    {
        $clientes = $this->obtenerTodosLosClientes();
        return view('clientes.todos', ['clientes' => $clientes]);
    }

    public function mostrarCliente()
    {
        return view('clientes.unico');
    }

    public function obtenerCliente(UnicoRequest $request)
    {
        $id = $request->get('id');
        $cliente = $this->obtenerUncliente($id);
        return view('clientes.mostrar', ['cliente' => $cliente]);
    }
    
    public function agregarCliente()
    {
        $paises = $this->obtenerTodosLosPaises(); 
        return view('clientes.agregar',['paises' => $paises]);
    }

    public function crearCliente(Request $request)
    {
        $this->almacenarCliente($request);
        
        return redirect('/clientes');
    }
   
}
