@extends('layouts.master')

@section('contenido')		
		<a href="{{url('/clientes/agregar')}}" class="btn btn-success" role="button">Nuevo Cliente</a>

		@if(sizeof($clientes) > 0)
		<br><br>
		<table class="table table-striped table-hover">
			<thead>
				<tr>
					<th>Id</th>
					<th>Nombre</th>
					<th>Apellidos</th>
					<th>Correo</th>
					<th>Código Postal</th>
					<th>Tipo</th>
					<th>Genero</th>
					<th>Operaciones</th>
				</tr>
			</thead>
			<tbody>
				@foreach($clientes as $cliente)
				<tr>
					<td>{{$cliente->id}}</td>
					<td>{{$cliente->nombre}}</td>
					<td>{{$cliente->apellidos}}</td>
					<td>{{$cliente->correo}}</td>
					<td>{{$cliente->codigoPostal}}</td>
					@if ($cliente->tipo == 1)
					    <td>Administrador</td>
					@else 
						<td>Cliente</td>
					@endif
					
					@if ($cliente->genero == 1)
					    <td>Hombre</td>
					@else 
						<td>Mujer</td>
					@endif
					<td>
						<a href="/cliente/ver/{{$cliente->id}}" class="btn btn-info" role="button">Ver</a>
						<a href="/cliente/editar/{{$cliente->id}}" class="btn btn-primary" role="button">Editar</a>
						<a href="/cliente/borrar/{{$cliente->id}}" class="btn btn-danger" role="button">Borrar</a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>

		@else

		<div class="alert alert-danger">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<strong>ERROR</strong> No hay clientes en este momento
		</div>

		@endif
@endsection