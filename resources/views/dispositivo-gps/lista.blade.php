@extends('layouts.master')

@section('contenido')		

		@if(sizeof($dispositivos) > 0)

		<form action="{{url('/dispositivos/acceso')}}" method="POST" role="form">
			{{csrf_field()}}
			<legend>Seleccione un Dispositivo</legend>
		
			<div class="form-group">
				<label for="">Dispositivo</label>
				<select name="dispositivo_id" id="inputDispositivo_id" class="form-control" required="required">
					<option>Seleccione un dispositivo</option>
					@foreach($dispositivos as $dispositivo)
					<option value="{{$dispositivo->id}}">{{$dispositivo->sigfox}}</option>
					@endforeach
				</select>
				
			</div>
		
			<br>
		
			<button type="submit" class="btn btn-primary">Obtener Seguimiento</button>
		</form>

		@else

		<div class="alert alert-danger">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<strong>Ups</strong> No hay dispositivos en este momento
		</div>

		@endif

@endsection