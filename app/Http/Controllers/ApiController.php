<?php

namespace ulock\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use ulock\Http\Requests;

class ApiController extends Controller
{
    // Clase que usaremos para relacionarnos con la API

    // --------------- METODOS CLIENTES -----------------------------------------------------------------

    protected function obtenerTodosLosClientes()
    {
        // Llama a la API para obtener un listado de todos los clientes

        $respuesta = $this->realizarPeticion('GET', 'https://ziptest.com.es/clientes');
        $datos = json_decode($respuesta);
        $clientes = $datos->data;
        return $clientes;
    }

    protected function obtenerUnCliente($id)
    {
        // Llama a la API para obtener los datos del cliente identificado por $id

        $respuesta = $this->realizarPeticion('GET', "https://ziptest.com.es/clientes/{$id}");
        $datos = json_decode($respuesta);
        $cliente = $datos->data;
        return $cliente;
    }

    protected function almacenarCliente(Request $request)
    {
        // Llama a la API para almacenar en la BD a un nuevo cliente

        $respuesta = $this->realizarPeticion('POST', 'https://ziptest.com.es/clientes', ['form_params' => $request->all()]);
    }

    protected function modificarCliente(Request $request)
    {
        // Llama a la API para modificar los valores de un cliente (edicion)
        $id = $request->get('id');

        $respuesta = $this->realizarPeticion('PUT', "https://ziptest.com.es/clientes/{$id}", ['form_params' => $request->except('id')]);    
    }

    protected function removerCliente(Request $request)
    {
        // Llama a la AAPI para eliminar a un cliente de la BD

        $id = $request->get('cliente_id');
        
        $respuesta = $this->realizarPeticion('DELETE', "https://ziptest.com.es/clientes/{$id}");
    }

    // --------------- METODOS BOTONES CLIENTES -----------------------------------------------------------------

    protected function deleteCliente($id)
    {
        // Metodo que atiende la petició nde eliminación desde la pantalla index de clientes

        $respuesta = $this->realizarPeticion('DELETE', "https://ziptest.com.es/clientes/{$id}");
    }

    // --------------- METODOS PAISES -----------------------------------------------------------------

    protected function obtenerTodosLosPaises()
    {
        // Llama a la API para obtener el lsitado de paises que tenemos lmacenada en la BD

        $respuesta = $this->realizarPeticion('GET', 'https://ziptest.com.es/paises');
        $datos = json_decode($respuesta);
        $paises = $datos->data;
        return $paises;
    }

    protected function obtenerProvinciasPais()
    {
        $provincia_id = Input::get('province_id');
        $respuesta = $this->realizarPeticion('GET', "https://ziptest.com.es/paises/{$provincia_id}/provincias");
        $datos = json_decode($respuesta);
        $provincias = $datos->data;
        return $provincias;
    }

    protected function obtenerProvincias($pais)
    {
        $respuesta = $this->realizarPeticion('GET', "https://ziptest.com.es/paises/{$pais}/provincias");
        $datos = json_decode($respuesta);
        $provincias = $datos->data;
        return $provincias;
    }
    // --------------- METODOS MARCAS -----------------------------------------------------------------

    protected function obtenerTodosLosMarcas()
    {
        // Llama a la API para obtener un lsitado con todas las marcas que tenemos en nuestra BD

        $respuesta = $this->realizarPeticion('GET', 'https://ziptest.com.es/marcas');
        $datos = json_decode($respuesta);
        $marcas = $datos->data;
        return $marcas;
    }

    protected function obtenerUnaMarca($id)
    {
        // Llama a la API para obtener los datos de la maraca que se identifica mediante el parametro $id

        $respuesta = $this->realizarPeticion('GET', "https://ziptest.com.es/marcas/{$id}");
        $datos = json_decode($respuesta);
        $marca = $datos->data;
        return $marca;
    }

    protected function almacenarMarca(Request $request)
    {
        // Llama a la API para almacenar una nueva marca en la BD

        $respuesta = $this->realizarPeticion('POST', 'https://ziptest.com.es/marcas', ['form_params' => $request->all()]);
    }

    protected function modificarMarca(Request $request)
    {
        // Llama a la API pra modificar una marca que previamente hemos indicado 

        $id = $request->get('id');

        $respuesta = $this->realizarPeticion('PUT', "https://ziptest.com.es/marcas/{$id}", ['form_params' => $request->except('id')]);    
    }

    protected function removerMarca(Request $request)
    {
        // Llama a la API para eliminar de la BD la marca que previamente hemos seleccionado

        $id = $request->get('marca_id');

        $respuesta = $this->realizarPeticion('DELETE', "https://ziptest.com.es/marcas/{$id}");
    }

    // --------------- METODOS TIPOS -----------------------------------------------------------------

    protected function obtenerTodosLosTipos()
    {
        // Llama a la API para obtener un lsitado de los tipso que tenemso almacenados en la BD

        $respuesta = $this->realizarPeticion('GET', 'https://ziptest.com.es/tipos');
        $datos = json_decode($respuesta);
        $tipos = $datos->data;
        return $tipos;
    }

    protected function obtenerUnTipo($id)
    {
        // Llama a la API para obtener lso datos del tipo que previamente hemos seleccioando

        $respuesta = $this->realizarPeticion('GET', "https://ziptest.com.es/tipos/{$id}");
        $datos = json_decode($respuesta);
        $tipo = $datos->data;
        return $tipo;
    }

    protected function almacenarTipo(Request $request)
    {
        // Llama al a API para almacenar un neuvo tipo en la BD

		$respuesta = $this->realizarPeticion('POST', 'https://ziptest.com.es/tipos', ['form_params' => $request->all()]);    
	}

    protected function modificarTipo(Request $request)
    {
        // Llama a la API para modificar un tipo identificado previamente

		$id = $request->get('id');

        $respuesta = $this->realizarPeticion('PUT', "https://ziptest.com.es/tipos/{$id}", ['form_params' => $request->except('id')]);   
    }

    protected function removerTipo(Request $request)
    {
        // Llmama a la API para borrar un tipo que hemos indicado previamente

        $id = $request->get('tipo_id');
        
        $respuesta = $this->realizarPeticion('DELETE', "https://ziptest.com.es/tipos/{$id}");
    }

    // --------------- METODOS SEGUIMIENTO Y ACCESOS -----------------------------------------------------------------

    protected function obtenerUnSeguimiento($id, $fecha)
    {
        // Llama a la API para obtener el tracking de un dispsitivo indicado por $id a partir de la fecha indicada por $fecha

        $respuesta = $this->realizarPeticion('GET', "https://ziptest.com.es/dispositivos/{$id}/gpses/{$fecha}");
        $datos = json_decode($respuesta);
        $posiciones = $datos->data;
        return $posiciones;
    }

    protected function obtenerAccesos($id)
    {
        // Llama a la API para obtener los accesos de un dispsitivo indicado por $id

        $respuesta = $this->realizarPeticion('GET', "https://ziptest.com.es/dispositivos/{$id}/accesos");
        $datos = json_decode($respuesta);
        $posiciones = $datos->data;
        return $posiciones;
    }

    // --------------- METODOS LISTADO DISPOSITIVOS -----------------------------------------------------------------

    protected function obtenerDispositivosMarca($marcaId)
    {
        // Llama a la API para obtener un listado de todos los dispositivos pertenecientes a una marca (indicada por $marcaId)

        $respuesta = $this->realizarPeticion('GET', "https://ziptest.com.es/marcas/{$marcaId}/dispositivos");
        $datos = json_decode($respuesta);
        $dispositivos = $datos->data;
        return $pdispositivos;
    }

    protected function obtenerDispositivosTipo($tipoId)
    {
        // Llama a la API para obtener un listado de todos los dispositivos pertenecientes a un tipo (indicado por $tipoId)

        $respuesta = $this->realizarPeticion('GET', "https://ziptest.com.es/marcas/{$tipoId}/dispositivos");
        $datos = json_decode($respuesta);
        $dispositivos = $datos->data;
        return $dispositivos;
    }

    protected function obtenerTodosLosDispositivos()
    {
        // Llama a la API para obtener un lsitado de todos los dispostivos que tenemso en la BD

        $respuesta = $this->realizarPeticion('GET', 'https://ziptest.com.es/dispositivos');
        $datos = json_decode($respuesta);
        $dispositivos = $datos->data;
        return $dispositivos;
    }


}
