<?php

namespace ulock\Http\Controllers;

use Illuminate\Http\Request;

use ulock\Http\Requests;

use ulock\Http\Requests\UnicoRequest;

class ClientesController extends Controller
{
    public function mostrarClientes()
    {
        $clientes = $this->obtenerTodosLosClientes();
        return view('clientes.todos', ['clientes' => $clientes]);
    }
    protected function obtenerTodosLosClientes()
    {
        $respuesta = $this->realizarPeticion('GET', 'https://ziptest.com.es/clientes');
        $datos = json_decode($respuesta);
        $clientes = $datos->data;
        return $clientes;
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
    protected function obtenerUnCliente($id)
    {
        $respuesta = $this->realizarPeticion('GET', "https://ziptest.com.es/clientes/{$id}");
        $datos = json_decode($respuesta);
        $cliente = $datos->data;
        return $cliente;
    }
}
