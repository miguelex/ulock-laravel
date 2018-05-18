@extends('layouts.master')

@section('contenido')
	<div class="list-group">
		<a href="{{url('/clientes')}}" class="list-group-item">Obtener todos los clientes</a>
		<a href="{{url('/marcas')}}" class="list-group-item">Obtener todas las marcas</a>
		<a href="{{url('/tipos')}}" class="list-group-item">Obtener todos los tipos</a>
	</div>

	<div class="list-group">
		<a href="{{url('/clientes/unico')}}" class="list-group-item">Obtener un cliente</a>
		<a href="{{url('/marcas/unico')}}" class="list-group-item">Obtener una marca</a>
		<a href="{{url('/tipos/unico')}}" class="list-group-item">Obtener un tipo</a>
	</div>

	<div class="list-group">
		<a href="{{url('/clientes/agregar')}}" class="list-group-item">Agregar Un Cliente</a>
		<a href="{{url('/marcas/agregar')}}" class="list-group-item">Agregar Una Marca</a>
		<a href="{{url('/tipos/agregar')}}" class="list-group-item">Agregar Un Tipo</a>
	</div>

	<div class="list-group">
		<!--<a href="{{url('/clientes/agregar')}}" class="list-group-item">Agregar Un Cliente</a>-->
		<a href="{{url('/marcas/actualizar')}}" class="list-group-item">Actualizar Una Marca</a>
		<a href="{{url('/tipos/actualizar')}}" class="list-group-item">Actualizar Un Tipo</a>
	</div>
	<div class="list-group">
		<a href="{{url('/marcas/eliminar')}}" class="list-group-item">Eliminar Una Marca</a>
		<a href="{{url('/tipos/eliminar')}}" class="list-group-item">Eliminar Un Tipo</a>
	</div>
@endsection