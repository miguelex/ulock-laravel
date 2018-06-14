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
				</tr>
			</thead>
			<tbody>
				@foreach($posiciones as $posicion)
				<tr>
					<td>{{date('d/m/Y H:i:s', $posicion->fecha)}}</td>
					<td>{{$posicion->latitud}}</td>
					<td>{{$posicion->longitud}}</td>
				</tr>
				@endforeach
			</tbody>
		</table>

		@else

		<div class="alert alert-danger">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<strong>Ups</strong> No hay posiciones en el dispositivo seleccionado
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

	    path = [];
	    for (var i = 0; i<locations.length; i+=1){
	    	punto = [locations[i].latitud, locations[i].longitud];
	    	path.push(punto);
	    }

	    mymap.drawPolyline({
		  path: path,
		  strokeColor: '#131540',
		  strokeOpacity: 0.6,
		  strokeWeight: 6
		});
	    
	  </script>
@endsection