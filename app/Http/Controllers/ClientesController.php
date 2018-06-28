<?php

namespace ulock\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use ulock\Http\Requests;
use ulock\Http\Requests\UnicoRequest;

class ClientesController extends ApiController
{
    // Clase que trabaja con el modelo cliente

    public function mostrarClientes()
    {
        // Metodo que nos permite obtener un listado con todos los clientes de la BD

        $clientes = $this->obtenerTodosLosClientes();
        return view('clientes.todos', ['clientes' => $clientes]);
    }

    public function mostrarCliente()
    {
        // Metodo que nos devuelve una vista que nos va a permitir seleccionar al cliente al que queremos acceder

        $clientes = $this->obtenerTodosLosClientes();
        return view('clientes.unico', ['clientes' => $clientes]);
    }

    public function obtenerCliente(UnicoRequest $request)
    {
        // Metodo que nos devuelve los datos del cliente que selecccionamos previaamente (mediante el metodo anterior)

        $id = $request->get('id');
        $cliente = $this->obtenerUncliente($id);
        return view('clientes.mostrar', ['cliente' => $cliente]);
    }
    
    public function verCliente($id)
    {
        // Metodo que se usa en el boton ver del la pagina de index de clientes

        $cliente = $this->obtenerUncliente($id);
        return view('clientes.mostrar', ['cliente' => $cliente]);
    }

    public function agregarCliente()
    {
        // Metodo que nos permite añadir un nuevo cliente a la BD

        $paises = $this->obtenerTodosLosPaises(); 
        return view('clientes.agregar',['paises' => $paises]);
    }

    public function crearCliente(Request $request)
    {
        // Metodo que inserta en la BD el lciente que hemos creado en el metodo anterior

        $this->almacenarCliente($request);
        
        return redirect('/clientes');
    }
   
   public function elegirCliente()
    {
        // Metodo que nos permite seleccioanr un cliente para su posterior edicion

        $clientes = $this->obtenerTodosLosClientes();
        return view('clientes.elegir', ['clientes' => $clientes]);
    }

    public function editarCliente(Request $request)
    {
        // Metodo que recuepera lso datos del cliente que solicitamos anteriormente para poder terminar de editarlo
        $id = $request->get('cliente_id');
        $cliente = $this->obtenerUnCliente($id);
        $paises = $this->obtenerTodosLosPaises();
        $provincias = $this->obtenerProvincias($cliente->pais_id);
        return view('clientes.editar', ['cliente' => $cliente, 'paises' => $paises, 'provincias' => $provincias]);
    }

    public function actualizarCliente(Request $request)
    {
        // Metodo que actualiza al lcleinte en la BD con los nuevos datos que hemos puesto

        $this->modificarCliente($request);

        return redirect('clientes');
    }

    public function seleccionarCliente()
    {
        // Metodo que nos permite seleccioanr un cliente para su posterior eliminacion

        $clientes = $this->obtenerTodosLosClientes();
        return view('clientes.seleccionar', ['clientes' => $clientes]);
    }

    public function eliminarCliente(Request $request)
    {
        // Metodo que borra de la BD al cliente que sleccionamos anteriormente

        $this->removerCliente($request);
        
        return redirect('/clientes');
    }

    public function editCliente($id)
    {
        // Metodo que se usa en el boton editar del la pagina de index de clientes

        $cliente = $this->obtenerUncliente($id);
        $paises = $this->obtenerTodosLosPaises();
        $provincias = $this->obtenerProvincias($cliente->pais_id);
        return view('clientes.editar', ['cliente' => $cliente, 'paises' => $paises, 'provincias' => $provincias]);
    }

    public function borrarCliente($id)
    {
        // Metodo que se usa en el boton borrar del la pagina de index de clientes

        $this->deleteCliente($id);
        
        return redirect('/clientes');
    }
}
