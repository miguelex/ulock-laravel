<?php

namespace ulock\Http\Controllers;

use Illuminate\Http\Request;

use ulock\Http\Requests;


class DispositivoGpsController extends ApiController
{
	public function mostrarDispositivos()
	{
		$dispositivos = $this->obtenerTodosLosDispositivos();

    	return view('dispositivo-gps.dispositivos', ['dispositivos' => $dispositivos]);
	}

	public function mostrarPosiciones(Request $request)
    {
        $dispositivoId = $request->get('dispositivo_id');
        $opFecha = $request->get('fecha');
        $numDias = $request->get('rango');
        $fechaInicial = $request->get('fechaInicial');
        $fechaFinal = $request->get('fechaFinal');

        switch ($opFecha) {

            case 1: $fecha = date('Y-m-d');
                    $fecha = strtotime($fecha);
                    $posiciones = $this->obtenerUnSeguimiento($dispositivoId, $fecha);
                    break;
            case 2: $fecha = date('Y-m-d');
                    $fecha = strtotime ( '-1 day' , strtotime ($fecha)); 
                    $posiciones = $this->obtenerUnSeguimiento($dispositivoId, $fecha);
                    break;
            case 3: $fecha = date('Y-m-d');
                    $fecha = strtotime ( '-'.$numDias .' day' , strtotime ($fecha));
                    $posiciones = $this->obtenerUnSeguimiento($dispositivoId, $fecha);
                    break;
            case 4: $fechaInicial = strtotime($fechaInicial);
                    $fechaFinal = strtotime($fechaFinal);
                    $posicionesIntermedia = $this->obtenerUnSeguimiento($dispositivoId, $fechaInicial);
                    $posiciones = array();
                    foreach ($posicionesIntermedia as $pos)
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
        $dispositivos = $this->obtenerTodosLosDispositivos();

        return view('dispositivo-gps.lista', ['dispositivos' => $dispositivos]);
    }

    public function mostrarAccesos(Request $request)
    {
        $dispositivoId = $request->get('dispositivo_id');
        
        $posiciones = $this->obtenerAccesos($dispositivoId);
                                  
        return view('dispositivo-gps.accesos', ['posiciones' => $posiciones]);
    }
}