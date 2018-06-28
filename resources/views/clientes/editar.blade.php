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
				<input type="date" class="form-control" name="fechaNacimiento" value="{{date('Y-m-d', $cliente->fechaNacimiento)}}">
			</div>

			<div class="form-group">
				<label for="">Código Postal</label>
				<input type="text" class="form-control" name="codigoPostal"  value="{{$cliente->codigoPostal}}">
			</div>

			<div class="form-group">
				<label for="">País</label>
				<select name="pais_id" id="pais_id" class="form-control">
					@foreach($paises as $pais) 
						<option value="{{$pais->id}}" {{ $cliente->pais_id == $pais->id ? 'selected="selected"' : '' }}>{{$pais->nombre}}</option>
					@endforeach
				</select>
			</div>

			<div class="form-group">
	            <label for="">Provincia</label>
	            <select class="form-control" name="provincia_id" id="provincia_id">
	            	@foreach($provincias as $provincia) 
						<option value="{{$provincia->id}}" {{ $cliente->provincia_id == $provincia->id ? 'selected="selected"' : '' }}>{{$provincia->nombre}}</option>
					@endforeach
	            </select>
          	</div>

			<div class="form-group">
				<label for="">Genero</label>
				<select name="genero" id="inputCarrera" class="form-control" >
					<option>Por favor seleccione un genero</option>
					@if ($cliente->genero == 1)
						<option value="1" selected>Hombre</option>
					@else
						<option value="1">Hombre</option>
					@endif
					@if ($cliente->genero == 2)
						<option value="2" selected>Mujer</option>
					@else
						<option value="2">Mujer</option>
					@endif
				</select>
			</div>
		
			<button type="submit" class="btn btn-primary">Actualizar Cliente</button>
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