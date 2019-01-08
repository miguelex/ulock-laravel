@extends('layouts.master')

@section('contenido')

	<h1>
  		{{$marca->nombre}}
	</h1>
	<hr>

	<p><strong>Fecha de Alta en el sistema:</strong> {{date('d/m/Y H:i:s', strtotime($marca->created_at))}}</p>
	<p><strong>Fecha última modificación:</strong> {{date('d/m/Y H:i:s', strtotime($marca->updated_at))}}</p>

	<hr>

	<a href="/marcas" class="btn btn-success" role="button">Volver</a>
@endsection