@extends('layouts.master')

@section('contenido')		
		
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
				<select name="pais_id" id="pais_id" class="form-control" required="required">
					@foreach($paises as $pais)
					<option value="{{$pais->id}}">{{$pais->nombre}}</option>
					@endforeach
				</select>
			</div>

			<div class="form-group">
	            <label for="">Provincia</label>
	            <select class="form-control" name="provincia_id" id="provincia_id">
	              	<option value="0" disable="true" selected="true">=== Selecciona Provincia ===</option>
	            </select>
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

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

		<script type="text/javascript">
	      $('#pais_id').on('change', function(e){
	        console.log(e);
	        var province_id = e.target.value;
	        $.get('/provincias?province_id=' + province_id,function(data) {
	          console.log(data);
	          $('#provincia_id').empty();
	          //$('#provincias').append('<option value="0" disable="true" selected="true">== Selecciona Provincia ===</option>');

	          $.each(data, function(index, regenciesObj){
	            $('#provincia_id').append('<option value="'+ regenciesObj.id +'">'+ regenciesObj.nombre +'</option>');
	          })
	        });
	      });
      </script>
@endsection