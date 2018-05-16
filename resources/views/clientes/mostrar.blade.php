@extends('layouts.master')

@section('contenido')

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
				</tr>
			</thead>
			<tbody>
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
				</tr>
			</tbody>
		</table>
@endsection