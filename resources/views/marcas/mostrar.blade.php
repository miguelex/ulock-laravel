@extends('layouts.master')

@section('contenido')

		<table class="table table-striped table-hover">
			<thead>
				<tr>
					<th>Id</th>
					<th>Nombre</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>{{$marca->id}}</td>
					<td>{{$marca->nombre}}</td>
				</tr>
			</tbody>
		</table>
@endsection