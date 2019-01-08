@extends('layouts.master')

@section('contenido')	
		
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<script src="http://maps.google.com/maps/api/js?key=AIzaSyCXfXxJBmiaGBzHGH4Z9gnQj5TDE1iY378&callback=initMap"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/gmaps.js/0.4.24/gmaps.js"></script>

<style type="text/css">

#mymap 
{

	width: 100%;

	height: 500px;

}

</style>	

<div id="mymap"></div>


<script type="text/javascript">

	var loca = <?php print_r(json_encode($posiciones)) ?>; // Si se descarta los cambios cambiar loca a locations
	locations = [];
	
	var punto;

	function dist(lat1,lon1,lat2,lon2)
	{
		 
		var p = 0.017453292519943295;    // Math.PI / 180
			var c = Math.cos;
			var a = 0.5 - c((lat2 - lat1) * p)/2 + c(lat1 * p) * c(lat2 * p) * (1 - c((lon2 - lon1) * p))/2;

			var result= (12742 * Math.asin(Math.sqrt(a)))*1000
		return (result.toFixed(2));
		
	}

	switch (loca.length)
	{
		case 0: alert("El dispositivo seleccionado no tiene posiciones para la fecha indicada");
				break;

		case 1: // Introduce el punto
				var punto = {latitud:loca[0].latitud, longitud: loca[0].longitud, fecha: loca[0].fecha};
				locations.push(punto);
				break;

		default: // Mas de un punto
				var inicio = 0;
				var distancia = 0;

				while (inicio + 1 < loca.length)
				{
					distancia = dist(loca[inicio].latitud, loca[inicio].longitud, loca[inicio+1].latitud, loca[inicio+1].longitud)
					
					if (distancia < 50)
					{
						// Iniciamos las variables que nos van a hacer falta

						var latitud = 0;
						var longitud = 0;
						var cont = 0;
						var fechaMedia;
						var i = inicio;

						// Estamos a menos de 25 metros. Tenemos buscar el punto medio de la nube de puntos

						fechaMedia = loca[i].fecha; // fecha que asignaremos al punto medio

						while ((i+1 < loca.length) && (dist(loca[i].latitud, loca[i].longitud, loca[i+1].latitud, loca[i+1].longitud) < 50))
						{
							latitud += parseFloat(loca[i].latitud);
							longitud += parseFloat(loca[i].longitud);
							cont ++; 
							i ++;
						}

						// Insertamos el punto medio
 						
 						var insertar = 1;

 						punto = {latitud:(latitud/cont), longitud: (longitud/cont), fecha: fechaMedia};

 						for (var j = 0; j < locations.length; j++)
 						{
 							if (dist(locations[j].latitud, locations[j].longitud, punto.latitud, punto.longitud) < 50)
 								insertar = 0;
 						}
						
						if (insertar == 1)
							locations.push(punto);
						
						// Volvemos al bucle externo

						inicio = i;


					}

					else 
					{
						// Estamos a mas de 25 metros, por lo que insertamos el punto siempre
						if ((parseFloat(loca[inicio].latitud) !== 5.00000000) && (parseFloat(loca[inicio].longitud) !== 5.00000000))
						{
							// Insertamos solo si es una coordenada valida
							punto = {latitud:loca[inicio].latitud, longitud: loca[inicio].longitud, fecha: loca[inicio].fecha};
							locations.push(punto);
						}
						inicio ++;
					}
					
				}
				
				for (i=0; i<locations.length;i++)
					console.log("latitud es: " + locations[i].latitud + " longitud es: " + locations[i].longitud);

				
				break;
	}

	// Creamos el mapa

	var mymap = new GMaps({

	  el: '#mymap',

	  lat: locations[0].latitud,

	  lng: locations[0].longitud,

	  zoom: 15
	});


	// Rellenamos el mapa

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

	// Dibujamos las lineas

	path = [];

	for (var i = 0; i<locations.length; i+=1){
		punto = [locations[i].latitud, locations[i].longitud];
		path.push(punto);
	}


	mymap.drawPolyline({
	  path: path,
	  strokeColor: '#005db5ff',
	  strokeOpacity: 0.6,
	  strokeWeight: 3
	});

</script>
@endsection