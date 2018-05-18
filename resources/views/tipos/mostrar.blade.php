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
					<td>{{$tipo->id}}</td>
					<td>{{$tipo->nombre}}</td>
				</tr>
			</tbody>
		</table>
@endsection