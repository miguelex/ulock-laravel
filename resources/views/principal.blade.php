@extends('layouts.master')

@section('contenido')
	<div class="list-group">
		<a href="{{url('/clientes')}}" class="list-group-item">Obtener todos los clientes</a>
		<a href="{{url('/marcas')}}" class="list-group-item">Obtener todas las marcas</a>
		<a href="{{url('/tipos')}}" class="list-group-item">Obtener todos los tipos</a>
	</div>

	<div class="list-group">
		<a href="{{url('/clientes/unico')}}" class="list-group-item">Obtener un cliente</a>
		<a href="#" class="list-group-item">Obtener una marca</a>
		<a href="#" class="list-group-item">Obtener un tipo</a>
	</div>
@endsection