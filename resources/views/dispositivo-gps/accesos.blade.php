@extends('layouts.master')

@section('contenido')	
		
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

		<script src="http://maps.google.com/maps/api/js?key=AIzaSyDp_jHkjoUPPreyOdYUvaQvQYzgSP4wgfI&callback=initMap"></script>

	  	<script src="https://cdnjs.cloudflare.com/ajax/libs/gmaps.js/0.4.24/gmaps.js"></script>


	  	<style type="text/css">

	    	#mymap {

	      		width: 100%;

	      		height: 500px;

	    	}

	  	</style>	

		@if(sizeof($posiciones) > 0)

		<table class="table table-striped table-hover">
			<thead>
				<tr>
					<th>Fecha</th>
					<th>Latitud</th>
					<th>Longitud</th>
					<th>tipo</th>
					<th>tipo_id</th>
				</tr>
			</thead>
			<tbody>
				@foreach($posiciones as $posicion)
				<tr>
					<td>{{date('d/m/Y H:i:s', $posicion->fecha)}}</td>
					<td>{{$posicion->latitud}}</td>
					<td>{{$posicion->longitud}}</td>
					<td>{{$posicion->tipo}}</td>
					<td>{{$posicion->tipo_id}}</td>
				</tr>
				@endforeach
			</tbody>
		</table>

		@else

		<div class="alert alert-danger">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<strong>Ups</strong> No hay ningun acceso para el dispositivo seleccionado
		</div>

		@endif

		<div id="mymap"></div>


	  <script type="text/javascript">


	    var locations = <?php print_r(json_encode($posiciones)) ?>;


	    var mymap = new GMaps({

	      el: '#mymap',

	      lat: locations[0].latitud,

	      lng: locations[0].longitud,

	      zoom: 15
	    });


	    $.each( locations, function( index, value ){

	    	var dateTime = new Date(value.fecha*1000);
			
		    mymap.addMarker({

		      lat: value.latitud,

		      lng: value.longitud,

		      title: dateTime.toString(),
		      
		      infoWindow: {
          		content: '<p>' + '<strong>Fecha: </strong>' + dateTime.getDate() + '/' + (dateTime.getMonth()+1) + '/' + dateTime.getFullYear() + '<br> <strong>Hora: </strong>' + dateTime.getHours() + ':' + dateTime.getMinutes() + ':' + dateTime.getSeconds() + '</p>'
        	  },

		    });

	   });

	    
	  </script>
@endsection