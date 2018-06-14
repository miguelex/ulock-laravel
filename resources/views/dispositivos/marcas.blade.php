@extends('layouts.master')

@section('contenido')		

		@if(sizeof($marcas) > 0)

		<form action="{{url('/dispositivos/marca')}}" method="POST" role="form">
			{{csrf_field()}}
			<legend>Seleccione una marca</legend>
		
			<div class="form-group">
				<label for="">Marca</label>
				<select name="marca_id" id="inputMarca_id" class="form-control" required="required">
					<option>Seleccione una marca</option>
					@foreach($marcas as $marca)
					<option value="{{$marca->id}}">{{$marca->nombre}}</option>
					@endforeach
				</select>
				
			</div>
		
			<br>
		
			<button type="submit" class="btn btn-primary">Obtener Listado</button>
		</form>

		@else

		<div class="alert alert-danger">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<strong>Ups</strong> No hay marcas en este momento
		</div>

		@endif

@endsection