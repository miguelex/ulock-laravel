<?php

namespace ulock\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use ulock\Http\Requests;
use ulock\Http\Requests\UnicoRequest;

class LoginController extends ApiController
{
    // Clase que trabaja con el modelo cliente

    public function principal()
    {
        return view('login');
    }

    public function entrar(Request $request)
    {
        $cliente = $this->buscarCliente($request);
        if ($cliente != null)
            return view('principal',['cliente' => $cliente]);
        else
            return view('login');
    }
}
