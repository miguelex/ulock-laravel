@extends('layouts.master')

@section('contenido')

	<nav aria-label="breadcrumb">
	  <ol class="breadcrumb breadcrum">
	    <li class="breadcrumb-item"><a href="/">@lang('breadcrumbs.inicio')</a></li>
	    <li class="breadcrumb-item active" aria-current="page">@lang('breadcrumbs.contacto')</li>
	  </ol>
	</nav>
	
	<div class="container pt-4">
		<h2>@lang('header.contacto')</h2>

		<br>
        <div class="row justify-content-center">
        	<main class="col-lg-8 contenido-principal">
				<form class="p-3 mt-3 formulario-contacto needs-validation" novalidate>
	                    <div class="form-group">
	                        <label for="nombre">Nombre:</label>
	                        <input type="text" class="form-control" id="nombre" placeholder="Tu nombre" required>
	                        <div class="invalid-feedback">
	                            El nombre es obligatorio
	                        </div>
	                        <div class="valid-feedback">
	                            Correcto
	                        </div>
	                    </div>

	                    <div class="form-group">
	                        <label for="email">E-Mail:</label>
	                        <input type="email" class="form-control" id="email" placeholder="Tu correo electrónico" required>
	                        <div class="invalid-feedback">
	                            El email es obligatorio
	                        </div>
	                        <div class="valid-feedback">
	                            Correcto
	                        </div>
	                    </div>
	                    <div class="form-group">
	                        <label for="mensaje">Mensaje:</label>
	                        <textarea class="form-control" id="mensaje" required></textarea>
	                        <div class="invalid-feedback">
	                            Es obligatorio escribir un mensaje
	                        </div>
	                        <div class="valid-feedback">
	                            Correcto
	                        </div>
	                    </div>
	                    <input type="submit" class="btn btn-primary text-uppercase" value="Enviar">
	                </form>
	            </main>
        	
			

		</div>
	</div>

@endsection