<?php

namespace ulock\Http\Controllers;

use Illuminate\Http\Request;

use ulock\Http\Requests;

class ApiController extends Controller
{
    protected function obtenerTodosLosClientes()
    {
        $respuesta = $this->realizarPeticion('GET', 'https://ziptest.com.es/clientes');
        $datos = json_decode($respuesta);
        $clientes = $datos->data;
        return $clientes;
    }

    protected function obtenerUnCliente($id)
    {
        $respuesta = $this->realizarPeticion('GET', "https://ziptest.com.es/clientes/{$id}");
        $datos = json_decode($respuesta);
        $cliente = $datos->data;
        return $cliente;
    }

    protected function obtenerTodosLosPaises()
    {
        $respuesta = $this->realizarPeticion('GET', 'https://ziptest.com.es/paises');
        $datos = json_decode($respuesta);
        $paises = $datos->data;
        return $paises;
    }

    protected function obtenerTodosLosMarcas()
    {
        $respuesta = $this->realizarPeticion('GET', 'https://ziptest.com.es/marcas');
        $datos = json_decode($respuesta);
        $marcas = $datos->data;
        return $marcas;
    }

    protected function obtenerUnaMarca($id)
    {
        $respuesta = $this->realizarPeticion('GET', "https://ziptest.com.es/marcas/{$id}");
        $datos = json_decode($respuesta);
        $marca = $datos->data;
        return $marca;
    }

    protected function obtenerTodosLosTipos()
    {
        $respuesta = $this->realizarPeticion('GET', 'https://ziptest.com.es/tipos');
        $datos = json_decode($respuesta);
        $tipos = $datos->data;
        return $tipos;
    }

    protected function obtenerUnTipo($id)
    {
        $respuesta = $this->realizarPeticion('GET', "https://ziptest.com.es/tipos/{$id}");
        $datos = json_decode($respuesta);
        $tipo = $datos->data;
        return $tipo;
    }

    protected function almacenarCliente(Request $request)
    {
    	$respuesta = $this->realizarPeticion('POST', 'https://ziptest.com.es/clientes', ['form_params' => $request->all()]);
    }

    protected function almacenarMarca(Request $request)
    {
        $respuesta = $this->realizarPeticion('POST', 'https://ziptest.com.es/marcas', ['form_params' => $request->all()]);
    }

    protected function modificarMarca(Request $request)
    {
		$id = $request->get('id');

        $respuesta = $this->realizarPeticion('PUT', "https://ziptest.com.es/marcas/{$id}", ['form_params' => $request->except('id')]);    
    }

    protected function removerMarca(Request $request)
    {
        $id = $request->get('marca_id');

        $respuesta = $this->realizarPeticion('DELETE', "https://ziptest.com.es/marcas/{$id}");
    }

    protected function almacenarTipo(Request $request)
    {
		$respuesta = $this->realizarPeticion('POST', 'https://ziptest.com.es/tipos', ['form_params' => $request->all()]);    
	}

    protected function modificarTipo(Request $request)
    {
		$id = $request->get('id');

        $respuesta = $this->realizarPeticion('PUT', "https://ziptest.com.es/tipos/{$id}", ['form_params' => $request->except('id')]);   
    }

    protected function removerTipo(Request $request)
    {
        $id = $request->get('tipo_id');
        
        $respuesta = $this->realizarPeticion('DELETE', "https://ziptest.com.es/tipos/{$id}");
    }
}
