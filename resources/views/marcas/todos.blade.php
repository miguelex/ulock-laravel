@extends('layouts.master')

@section('contenido')	

		<a href="{{url('/marcas/agregar')}}" class="btn btn-success" role="button">Nueva Marca</a>

		@if(sizeof($marcas) > 0)

		<table class="table table-striped table-hover">
			<thead>
				<tr>
					<th>Id</th>
					<th>Nombre</th>
					<th>Operaciones</th>
				</tr>
			</thead>
			<tbody>
				@foreach($marcas as $marca)
				<tr>
					<td>{{$marca->id}}</td>
					<td>{{$marca->nombre}}</td>
					<td>
						<a href="/marca/ver/{{$marca->id}}" class="btn btn-info" role="button">Ver</a>
						<a href="/marca/editar/{{$marca->id}}" class="btn btn-primary" role="button">Editar</a>
						<a href="/marca/borrar/{{$marca->id}}" class="btn btn-danger" role="button">Borrar</a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>

		@else

		<div class="alert alert-danger">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<strong>Ups</strong> No hay marcas en este momento
		</div>

		@endif
@endsection