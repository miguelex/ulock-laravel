@extends('layouts.master')

@section('contenido')		
		
		<div class="form-group">
				<label for="">Idioma/Language</label>
				<select name="idioma" id="inputIdioma" class="form-control" required="required">
					<option>-----</option>
					<option value="1">Español</option>
					<option value="2">English</option>
				</select>
		</div>

		<form action="{{url('/clientes/agregar')}}" method="POST" role="form">
			{{csrf_field()}}
			<legend>Ingrese los Datos del Cliente</legend>
		
			<div class="form-group">
				<label for="">Nombre</label>
				<input type="text" class="form-control" name="nombre" required>
			</div>

			<div class="form-group">
				<label for="">Apellidos</label>
				<input type="text" class="form-control" name="apellidos" required>
			</div>

			<div class="form-group">
				<label for="">Correo Electrónico</label>
				<input type="text" class="form-control" name="correo" required>
			</div>

			<div class="form-group">
				<label for="">Password</label>
				<input type="password" class="form-control" name="password" required>
			</div>

			<div class="form-group">
				<label for="">Fecha de nacimiento</label>
				<input type="date" class="form-control" name="fechaNacimiento" required>
			</div>

			<div class="form-group">
				<label for="">Código Postal</label>
				<input type="text" class="form-control" name="codigoPostal" required>
			</div>

			<div class="form-group">
				<label for="">País</label>
				<select name="pais_id" id="inputPais_id" class="form-control" required="required">
					@foreach($paises as $pais)
					<option value="{{$pais->id}}">{{$pais->nombre}}</option>
					@endforeach
				</select>
			</div>

			<div class="form-group">
				<label for="">Provincia</label>
				<input type="text" class="form-control" name="provincia_id" required>
			</div>

			<div class="form-group">
				<label for="">Genero</label>
				<select name="genero" id="inputCarrera" class="form-control" required="required">
					<option>Por favor seleccione un genero</option>
					<option value="1">Hombre</option>
					<option value="2">Mujer</option>
				</select>
			</div>
		
					
			<button type="submit" class="btn btn-primary">Crear Cliente</button>
		</form>

@endsection