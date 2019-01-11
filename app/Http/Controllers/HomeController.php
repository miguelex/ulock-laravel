<?php

namespace ulock\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use ulock\Http\Requests;

class HomeController extends Controller
{

	public function index()
	{
		return view('home.index');
	}

	public function noticias()
	{
		return view('home.faq');
	}

	public function acerca()
	{
		return view('home.acerca');
	}

	public function contacto()
	{
		return view('home.contacto');
	}

	public function privacidad()
	{
		return view('home.privacidad');
	}

	public function cookies()
	{
		return view('home.cookies');
	}

	public function compras()
	{
		return view('home.compras');
	}
	public function aviso()
	{
		return view('home.aviso');
	}
	public function cancelacion()
	{
		return view('home.cancelacion');
	}
	public function terminos()
	{
		return view('home.terminos');
	}
}
