@extends('layouts.master')

@section('contenido')
	<div class="list-group">
		<a href="{{url('/clientes')}}" class="list-group-item">Obtener todos los clientes</a>
		<a href="{{url('/marcas')}}" class="list-group-item">Obtener todas las marcas</a>
		<a href="{{url('/tipos')}}" class="list-group-item">Obtener todos los tipos</a>
		<a href="{{url('/dispositivos')}}" class="list-group-item">Obtener todos los dispositivos</a>
		<a href="{{url('/dispositivos/marca')}}" class="list-group-item">Obtener todos los dispositivos por marca</a>
		<a href="{{url('/dispositivos/tipo')}}" class="list-group-item">Obtener todos los dispositivos por tipo</a>
	</div>

	<div class="list-group">
		<a href="{{url('/clientes/unico')}}" class="list-group-item">Obtener un cliente</a>
		<a href="{{url('/marcas/unico')}}" class="list-group-item">Obtener una marca</a>
		<a href="{{url('/tipos/unico')}}" class="list-group-item">Obtener un tipo</a>
		<a href="{{url('/dispositivos/gps')}}" class="list-group-item">Obtener un seguimiento</a>
		<a href="{{url('/dispositivos/acceso')}}" class="list-group-item">Obtener lista de accesos</a>
	</div>

	<div class="list-group">
		<a href="{{url('/clientes/agregar')}}" class="list-group-item">Agregar Un Cliente</a>
		<a href="{{url('/marcas/agregar')}}" class="list-group-item">Agregar Una Marca</a>
		<a href="{{url('/tipos/agregar')}}" class="list-group-item">Agregar Un Tipo</a>
	</div>

	<div class="list-group">
		<a href="{{url('/clientes/actualizar')}}" class="list-group-item">Actualizar Un Cliente</a>
		<a href="{{url('/marcas/actualizar')}}" class="list-group-item">Actualizar Una Marca</a>
		<a href="{{url('/tipos/actualizar')}}" class="list-group-item">Actualizar Un Tipo</a>
	</div>
	<div class="list-group">
		<a href="{{url('/clientes/eliminar')}}" class="list-group-item">Eliminar Un Cliente</a>
		<a href="{{url('/marcas/eliminar')}}" class="list-group-item">Eliminar Una Marca</a>
		<a href="{{url('/tipos/eliminar')}}" class="list-group-item">Eliminar Un Tipo</a>
	</div>
@endsection