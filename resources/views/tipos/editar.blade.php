@extends('layouts.master')

@section('contenido')		
		
		<form action="{{url('/tipos/actualizar')}}" method="POST" role="form">
			{{csrf_field()}}
	
			{{method_field('PUT')}}

			<input type="hidden" name="id" id="inputId" class="form-control" value="{{$tipo->id}}">

			<legend>Ingrese el nombre del tipo</legend>
		
			<div class="form-group">
				<label for="">Nombre</label>
				<input type="text" class="form-control" name="nombre" required value="{{$tipo->nombre}}">
			</div>
		
			<button type="submit" class="btn btn-primary">Actualizar Tipo</button>
		</form>

@endsection