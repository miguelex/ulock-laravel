<?php

namespace ulock\Http\Controllers;

use Illuminate\Http\Request;

use ulock\Http\Requests;


class DispositivoGpsController extends ApiController
{
    // Clase que contiene los metodos que hacen uso de las funcionalidades GPS de los dispositivos

	public function mostrarDispositivos()
	{
        // Metodo que devuelve un lsitado con todos los dispositivos de la BD

		$dispositivos = $this->obtenerTodosLosDispositivos();

    	return view('dispositivo-gps.dispositivos', ['dispositivos' => $dispositivos]);
	}

	public function mostrarPosiciones(Request $request)
    {
        // Metodo que nos muestras por pantalla el tracking de un dispositivo a partir de la fecha que le indiquemos (0 para todas las que tengamos alamacenadas)

        $dispositivoId = $request->get('dispositivo_id');
        $opFecha = $request->get('fecha'); // Opcion de rango de fecha elegida
        $numDias = $request->get('rango'); // numero de dias que vamos a mostrar
        $fechaInicial = $request->get('fechaInicial'); // fecha inicial del rango de fecha
        $fechaFinal = $request->get('fechaFinal'); // fecha final del rango de fecha

        switch ($opFecha) {

            case 1: // Seguimiento para el dia actual
                    $fecha = date('Y-m-d');
                    $fecha = strtotime($fecha);
                    $posiciones = $this->obtenerUnSeguimiento($dispositivoId, $fecha);
                    break;
            case 2: // Seguimeinto para el dia previo al actual
                    $fecha = date('Y-m-d');
                    $fecha = strtotime ( '-1 day' , strtotime ($fecha)); 
                    $posiciones = $this->obtenerUnSeguimiento($dispositivoId, $fecha);
                    break;
            case 3: // Seguimiento para el nuemro de dias previos idicado en el formulario (minimo 1, maximo 30)
                    $fecha = date('Y-m-d');
                    $fecha = strtotime ( '-'.$numDias .' day' , strtotime ($fecha));
                    $posiciones = $this->obtenerUnSeguimiento($dispositivoId, $fecha);
                    break;
            case 4: // Seguimiento entre un rango de fechas
                    $fechaInicial = strtotime($fechaInicial);
                    $fechaFinal = strtotime($fechaFinal);
                    $posicionesIntermedia = $this->obtenerUnSeguimiento($dispositivoId, $fechaInicial); // Obtenemos todas las posiciones que sean superior a la fecha inicial
                    $posiciones = array();
                    foreach ($posicionesIntermedia as $pos) // Elimina todas las posiciones que sean superior a la fecha final indicada
                    {
                        if ($pos->fecha < $fechaFinal)
                        {
                            array_push($posiciones, $pos);
                        }
                    }
                    break;
        }
               
        return view('dispositivo-gps.posiciones', ['posiciones' => $posiciones]);
    }

    public function seleccionarDispositivos()
    {
        // Metodo que nos permite sleccioanr un dispositivo de entre todos los que tenemos en la BD

        $dispositivos = $this->obtenerTodosLosDispositivos();

        return view('dispositivo-gps.lista', ['dispositivos' => $dispositivos]);
    }

    public function mostrarAccesos(Request $request)
    {
        // Metodo que nos devuelve sobre un mapa todos los accesos que ha tenido el dispositivo indicado en el metodo anterior
        
        $dispositivoId = $request->get('dispositivo_id');
        
        $posiciones = $this->obtenerAccesos($dispositivoId);
                                  
        return view('dispositivo-gps.accesos', ['posiciones' => $posiciones]);
    }
}