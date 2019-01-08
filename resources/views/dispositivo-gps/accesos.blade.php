@extends('layouts.master')

@section('contenido')	
		
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

		<script src="http://maps.google.com/maps/api/js?key=AIzaSyCXfXxJBmiaGBzHGH4Z9gnQj5TDE1iY378&callback=initMap"></script>

	  	<script src="https://cdnjs.cloudflare.com/ajax/libs/gmaps.js/0.4.24/gmaps.js"></script>

		<div class="container pt-4">
			<nav aria-label="breadcrumb">
			  <ol class="breadcrumb breadcrum">
			    <li class="breadcrumb-item"><a href="/">@lang('breadcrumbs.inicio')</a></li>
			    <li class="breadcrumb-item"><a href="/">@lang('Usuario')</a></li>
			    <li class="breadcrumb-item active" aria-current="page">@lang('Accesos')</li>
			  </ol>
			</nav>
			<br>
			<div class="row justify-content-end">
				<img src="{{ asset("assets/img/accesos.svg")}}" width="10%" class="img-fluid d-block float-right" alt="logo GPS">				
			</div>
			<br>
			<div class="row justify-content-center">
	        	<main class="col-lg-12 contenido-principal">
	        		@php
	        			$fecha = date('d/m/Y')
	        		@endphp

					@if(sizeof($posiciones) > 0)
						@foreach(array_reverse($posiciones) as $posicion)

							{{-- Primero vemos si cambia de dia para meter separación--}}
							@if ($fecha != date('d/m/Y', $posicion->fecha))
								@php 
									$fecha = date('d/m/Y', $posicion->fecha)
								@endphp
								<div class="text-center fecha">
									<strong>{{date('d/m/Y', $posicion->fecha)}}</strong>
								</div>
							@endif
							@if ($posicion->tipo == 1)
								<div class="thumbnail text-center">
								    <a href="#" data-toggle="modal" data-target="#miModal">
								    	<img src="{{ asset("assets/img/fail.svg")}}" width="30%" class="img-fluid mx-auto d-block" alt="Enlace fail">
										<div class="caption">
											<p><strong>{{date('d/m/Y H:i:s', $posicion->fecha)}}</strong></p>
										</div>
									</a>
								</div>
							@else
								<div class="thumbnail text-center">
									<a href="#" data-toggle="modal" data-target="#miModal">
										<img src="{{ asset("assets/img/ok.svg")}}" width="30%" class="img-fluid mx-auto d-block" alt="Enlace ok">
										<div class="caption">
											<p><strong>{{date('d/m/Y H:i:s', $posicion->fecha)}}</strong></p>
										</div>
									</a>
								</div>
							@endif
						@endforeach
					@else
						<div class="alert alert-danger">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
							<strong>Ups</strong> No hay ningun acceso para el dispositivo seleccionado
						</div>
					@endif

				</main>
				
			</div>
		</div>

		<div class="modal fade" id="miModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title" id="myModalLabel">Información</h4>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<div class="container-fluid">
							<div class="form-group">
                        		<label for="Identificador" class="titulo"><strong>ID:</strong></label>
                        	</div>		
                        	<div class="form-group">
                        		<label for="Tipo"  class="titulo"><strong>Tipo:</strong></label>
                        	</div>
                        	<div class="form-group">
                        		<label for="Fecha" class="titulo"><strong>Fecha:</strong></label>
                        	</div>	
                        	<div class="form-group">
                        		<label for="Hora" class="titulo"><strong>Hora</strong></label>
                        	</div>			
						</div>
					</div>
					<div class="modal-footer">
						Texto del modal
					</div>
				</div>
			</div>
		</div>
	  	
	  
@endsection