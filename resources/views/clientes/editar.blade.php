@extends('layouts.master')

@section('contenido')		
		
		<form action="{{url('/clientes/actualizar')}}" method="POST" role="form">
			{{csrf_field()}}
	
			{{method_field('PUT')}}

			<input type="hidden" name="id" id="inputId" class="form-control" value="{{$cliente->id}}">

			<legend>Datos del cliente</legend>
		
			<div class="form-group">
				<label for="">Nombre</label>
				<input type="text" class="form-control" name="nombre"  value="{{$cliente->nombre}}">
			</div>

			<div class="form-group">
				<label for="">Apellidos</label>
				<input type="text" class="form-control" name="apellidos"  value="{{$cliente->apellidos}}">
			</div>

			<div class="form-group">
				<label for="">Correo Electrónico</label>
				<input type="text" class="form-control" name="correo"  value="{{$cliente->correo}}">
			</div>

			<div class="form-group">
				<label for="">Fecha de nacimiento</label>
				<input type="date" class="form-control" name="fechaNacimiento" >
			</div>

			<div class="form-group">
				<label for="">Código Postal</label>
				<input type="text" class="form-control" name="codigoPostal"  value="{{$cliente->codigoPostal}}">
			</div>

			<div class="form-group">
				<label for="">País</label>
				<select name="pais_id" id="inputPais_id" class="form-control" elected="{{$cliente->pais_id}}>
					@foreach($paises as $pais)
					<option value="{{$pais->id}}">{{$pais->nombre}}</option>
					@endforeach
				</select>
			</div>

			<div class="form-group">
				<label for="">Provincia</label>
				<input type="text" class="form-control" name="provincia_id" value="{{$cliente->provincia_id}}" >
			</div>

			<div class="form-group">
				<label for="">Genero</label>
				<select name="genero" id="inputCarrera" class="form-control" selected="{{$cliente->genero}}">
					<option>Por favor seleccione un genero</option>
					<option value="1">Hombre</option>
					<option value="2">Mujer</option>
				</select>
			</div>
		
			<button type="submit" class="btn btn-primary">Actualizar Cliente</button>
		</form>

@endsection