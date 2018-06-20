@extends('layouts.master')

@section('contenido')		
		<script>
		  //addEventListener('load',inicio,false);

		  /*function inicio()
		  {
		    document.getElementById('rango').addEventListener('change',cambioRango,false);
		  }

		  function cambioRango()
		  {    
		    document.getElementById('dias').innerHTML=document.getElementById('rango').value;
		  }*/

		  //var input = document.getElementById('input');

		function habilitaCampos(sel) {

			switch (sel.value)	{

		        case "3":  divC = document.getElementById("rangoFecha");
		           		   divC.style.display = "";
		           		   divT = document.getElementById("dosFechas");
		           		   divT.style.display = "none";
		           		   break;
		        case "4":  divC = document.getElementById("rangoFecha");
		           		   divC.style.display="none"; 
		                   divT = document.getElementById("dosFechas");
		                   divT.style.display = "";
		                   break;
		        default:   divC = document.getElementById("rangoFecha");
		           		   divC.style.display = "none";
		           		   divT = document.getElementById("dosFechas");
		           		   divT.style.display = "none";
			}

		}

		function updateTextInput(val) {
          document.getElementById('textInput').value=val; 
        }

		</script>  

		@if(sizeof($dispositivos) > 0)

		<form action="{{url('/dispositivos/gps')}}" method="POST" role="form">
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
				
				<br>
				<label for="">Fecha</label>
				<select name="fecha" id="inputFecha" class="form-control" required="required" onChange="habilitaCampos(this)">
					<option>Seleccione fecha</option>
					<option value="1">Hoy</option>
					<option value="2">Ayer</option>
					<option value="3">Últimos x días</option>
					<option value="4">Rango de fecha</option>
				</select>

				
			</div>
		
			<br>
			<div>
				<div id="rangoFecha" style="display:none;">
	           		<label for="">Seleccione número de días: (1 a 30) </label>
	  				<input type="range" name="rango" min="1" max="30" onchange="updateTextInput(this.value);">
					<input type="text" id="textInput" value="16">
	      		</div>
				
				<div id="dosFechas" style="display:none;">
		  			<label for="">Desde el </label>
					<input type="date" class="form-control" name="fechaInicial" value="<?php echo date("Y-m-d");?>" required="required">

					<br>
					<label for=""> Hasta el</label>
					<input type="date" class="form-control" name="fechaFinal" value= "<?php echo date("Y-m-d");?>" required="required">
				</div>
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