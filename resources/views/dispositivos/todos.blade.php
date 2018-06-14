@extends('layouts.master')

@section('contenido')		

		@if(sizeof($dispositivos) > 0)
		<br><br>
		<table class="table table-striped table-hover">
			<thead>
				<tr>
					<th>Id</th>
					<th>Cod. Sigfox</th>
					<th>Nº Mensajes</th>
					<th>Nº Serie</th>
					<th>Tipo</th>
					<th>Marca</th>
					<th>Id Cliente</th>
					<th>Operaciones</th>
				</tr>
			</thead>
			<tbody>
				@foreach($dispositivos as $dispositivo)
				<tr>
					<td>{{$dispositivo->id}}</td>
					<td>{{$dispositivo->sigfox}}</td>
					<td>{{$dispositivo->numMensaje}}</td>
					<td>{{$dispositivo->numSerie}}</td>
					<td>{{$dispositivo->tipo_id}}</td>
					<td>{{$dispositivo->marca_id}}</td>
					<td>{{$dispositivo->cliente_id}}</td>
					<td>
						<a href="#" class="btn btn-info" role="button">Ver</a>
						<a href="#" class="btn btn-primary" role="button">Editar</a>
						<a href="#" class="btn btn-danger" role="button">Borrar</a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>

		@else

		<div class="alert alert-danger">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<strong>ERROR</strong> No hay dispositivos en este momento
		</div>

		@endif
@endsection