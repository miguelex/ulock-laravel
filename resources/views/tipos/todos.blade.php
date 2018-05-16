@extends('layouts.master')

@section('contenido')		
		@if(sizeof($tipos) > 0)

		<table class="table table-striped table-hover">
			<thead>
				<tr>
					<th>Id</th>
					<th>Nombre</th>
				</tr>
			</thead>
			<tbody>
				@foreach($tipos as $tipo)
				<tr>
					<td>{{$tipo->id}}</td>
					<td>{{$tipo->nombre}}</td>
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