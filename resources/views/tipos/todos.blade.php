@extends('layouts.master')

@section('contenido')		
		<a href="{{url('/tipos/agregar')}}" class="btn btn-success" role="button">Nuevo Tipo</a>

		@if(sizeof($tipos) > 0)

		<table class="table table-striped table-hover">
			<thead>
				<tr>
					<th>Id</th>
					<th>Nombre</th>
					<th>Operaciones</th>
				</tr>
			</thead>
			<tbody>
				@foreach($tipos as $tipo)
				<tr>
					<td>{{$tipo->id}}</td>
					<td>{{$tipo->nombre}}</td>
					<td>
						<a href="/tipo/ver/{{$tipo->id}}" class="btn btn-info" role="button">Ver</a>
						<a href="/tipo/editar/{{$tipo->id}}" class="btn btn-primary" role="button">Editar</a>
						<a href="/tipo/borrar/{{$tipo->id}}" class="btn btn-danger" role="button">Borrar</a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>

		@else

		<div class="alert alert-danger">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<strong>Ups</strong> No hay tipos en este momento
		</div>

		@endif
@endsection