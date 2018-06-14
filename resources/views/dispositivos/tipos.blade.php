@extends('layouts.master')

@section('contenido')		

		@if(sizeof($tipos) > 0)

		<form action="{{url('/dispositivos/tipo')}}" method="POST" role="form">
			{{csrf_field()}}
			<legend>Seleccione un tipo de producto</legend>
		
			<div class="form-group">
				<label for="">Tipo</label>
				<select name="tipo_id" id="inputTipo_id" class="form-control" required="required">
					<option>Seleccione un tipo</option>
					@foreach($tipos as $tipo)
					<option value="{{$tipo->id}}">{{$tipo->nombre}}</option>
					@endforeach
				</select>
				
			</div>
		
			<br>
		
			<button type="submit" class="btn btn-primary">Obtener Listado</button>
		</form>

		@else

		<div class="alert alert-danger">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<strong>Ups</strong> No hay tipos en este momento
		</div>

		@endif

@endsection