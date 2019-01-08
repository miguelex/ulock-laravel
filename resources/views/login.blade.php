@extends('layouts.master')

@section('contenido')	

	<nav aria-label="breadcrumb">
	  <ol class="breadcrumb breadcrum">
	    <li class="breadcrumb-item"><a href="/">@lang('breadcrumbs.inicio')</a></li>
	    <li class="breadcrumb-item active" aria-current="page">@lang('breadcrumbs.login')</li>
	  </ol>
	</nav>
	
	<div class="container pt-4">
        <div class="row justify-content-center">
            <main class="col-lg-8 contenido-principal">
                <h2 class="d-block d-md-none text-uppercase text-center">
                    @lang('login.titulo')
                </h2>
                <form class="p-5 mt-5 formulario-contacto needs-validation" action="{{url('/login')}}" method="POST" role="form" novalidate>
                	{{csrf_field()}}
                    <div class="form-group">
                        <label for="nombre">@lang('login.correo')</label>
                        <input type="text" class="form-control" id="nombre" placeholder="@lang('login.msjCE')" required>
                        <div class="invalid-feedback">
                            El nombre es obligatorio
                        </div>
                        <div class="valid-feedback">
                            Correcto
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="email">@lang('login.clave')</label>
                        <input type="email" class="form-control" id="email" placeholder="@lang('login.msjPW')" required>
                        <div class="invalid-feedback">
                            El email es obligatorio
                        </div>
                        <div class="valid-feedback">
                            Correcto
                        </div>
                    </div>
                    
                    <input type="submit" class="btn btn-primary text-uppercase" value="@lang('login.boton')">
                </form>
            </main>

        </div>
    </div>
	
@endsection