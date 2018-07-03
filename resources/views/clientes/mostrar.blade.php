@extends('layouts.master')

@section('contenido')

	<h1>
  		{{$cliente->nombre}} {{$cliente->apellidos}}
	</h1>
	<hr>
 	<p><strong>Correo electrónico:</strong> {{$cliente->correo}}</p>
	<p><strong>Fecha de Alta en el sistema:</strong> {{date('d/m/Y H:i:s', strtotime($cliente->created_at))}}</p>

 		<p><strong>Fecha de Nacimiento:</strong> {{date('d/m/Y', $cliente->fechaNacimiento)}}</p>
	@if ($cliente->tipo == 1)
	    <p><strong>Rol:</strong> Administrador</p>
	@else 
		<p><strong>Rol:</strong> Usuario</p>
	@endif
	
	@if ($cliente->genero == 1)
	    <p><strong>Genero:</strong> Hombre</p>
	@else 
		<p><strong>Genero:</strong> Mujer</p>
	@endif
	<p><strong>Código Postal:</strong> {{$cliente->codigoPostal}}</p>
	<p><strong>País:</strong> {{$pais}}</p>
	<p><strong>Provincia:</strong> {{$provincia}}</p>
	<hr>

	<a href="/clientes" class="btn btn-success" role="button">Volver</a>
		
@endsection