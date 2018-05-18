@extends('layouts.master')

@section('contenido')		
		
		<form action="{{url('/marcas/actualizar')}}" method="POST" role="form">
			{{csrf_field()}}
	
			{{method_field('PUT')}}

			<input type="hidden" name="id" id="inputId" class="form-control" value="{{$marca->id}}">

			<legend>Ingrese el nombre de la marca</legend>
		
			<div class="form-group">
				<label for="">Nombre</label>
				<input type="text" class="form-control" name="nombre" required value="{{$marca->nombre}}">
			</div>
		
			<button type="submit" class="btn btn-primary">Actualizar Marca</button>
		</form>

@endsection