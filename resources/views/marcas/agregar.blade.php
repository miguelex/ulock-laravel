@extends('layouts.master')

@section('contenido')		
		
		
		<form action="{{url('/marcas/agregar')}}" method="POST" role="form">
			{{csrf_field()}}
			<legend>Ingrese el nombre de la marca</legend>
		
			<div class="form-group">
				<label for="">Nombre</label>
				<input type="text" class="form-control" name="nombre" required>
			</div>

			<button type="submit" class="btn btn-primary">Crear Marca</button>
		</form>

@endsection