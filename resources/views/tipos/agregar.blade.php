@extends('layouts.master')

@section('contenido')		
		
		
		<form action="{{url('/tipos/agregar')}}" method="POST" role="form">
			{{csrf_field()}}
			<legend>Ingrese el nombre del tipo</legend>
		
			<div class="form-group">
				<label for="">Nombre</label>
				<input type="text" class="form-control" name="nombre" required>
			</div>

			<button type="submit" class="btn btn-primary">Crear Tipo</button>
		</form>

@endsection