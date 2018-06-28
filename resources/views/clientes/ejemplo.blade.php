@extends('layouts.master')

@section('contenido')

<form action="{{url('/clientes/ejemplo')}}" method="POST" role="form">
			{{csrf_field()}}

			<div class="form-group">
				<label for="">País</label>
				<select name="pais_id" id="country" class="form-control" required="required">
					<option selected="selected">--Seleccionar Pais--</option>
					@foreach($paises as $pais)
						 <option value="{{ $pais->id }}">{{ $pais->nombre }}</option> 
					@endforeach
				</select>
			</div>

			
			<div class="form-group">
	            <label for="">Your Regencies</label>
	            <select class="form-control" name="provincia_id" id="provincias">
	              	<option value="0" disable="true" selected="true">=== Select Provincia ===</option>
	            </select>
          	</div>

			<button type="submit" class="btn btn-primary">Crear Cliente</button>

		</form>
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

		<script type="text/javascript">
	      $('#country').on('change', function(e){
	        console.log(e);
	        var province_id = e.target.value;
	        $.get('/provincias?province_id=' + province_id,function(data) {
	          console.log(data);
	          $('#provincias').empty();
	          $('#provincias').append('<option value="0" disable="true" selected="true">=== Select Regencies ===</option>');

	          $.each(data, function(index, regenciesObj){
	            $('#provincias').append('<option value="'+ regenciesObj.id +'">'+ regenciesObj.nombre +'</option>');
	          })
	        });
	      });
      </script>
@endsection
