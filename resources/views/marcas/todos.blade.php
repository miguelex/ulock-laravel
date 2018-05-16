@extends('layouts.master')

@section('contenido')		
		@if(sizeof($marcas) > 0)

		<table class="table table-striped table-hover">
			<thead>
				<tr>
					<th>Id</th>
					<th>Nombre</th>
				</tr>
			</thead>
			<tbody>
				@foreach($marcas as $marca)
				<tr>
					<td>{{$marca->id}}</td>
					<td>{{$marca->nombre}}</td>
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