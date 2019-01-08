@extends('layouts.master')

@section('contenido')

		
	<div class="container pt-4">

		<nav aria-label="breadcrumb">
		  <ol class="breadcrumb breadcrum">
		    <li class="breadcrumb-item"><a href="/">@lang('breadcrumbs.inicio')</a></li>
		    <li class="breadcrumb-item active" aria-current="page">@lang('breadcrumbs.faq')</li>
		  </ol>
		</nav>
		<h2>@lang('header.noticias')</h2>

		<br>
        <div class="row justify-content-center">
	    <main class="col-lg-12 contenido-principal">
	    	<div class="accordion" id="accordionExample">
  				<div class="card border-light">
    				<div class="card-header" id="headingOne">
      					<h5 class="mb-0">
        					<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          						<strong>Pregunta 1</strong>
        					</button>
      					</h5>
    				</div>

    				<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      					<div class="card-body text-justify">
        					<p>Respuesta 1</p>
      					</div>
    				</div>
  				</div>
  				<div class="card border-light mt-2">
    				<div class="card-header" id="headingTwo">
      					<h5 class="mb-0">
        					<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          						<strong>Pregunta 2</strong>
        					</button>
      					</h5>
    				</div>

    				<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      					<div class="card-body text-justify">
        					<p>Respuesta 2</p>
    				</div>
  				</div>
  				<div class="card border-light mt-2">
    				<div class="card-header" id="headingThree">
      					<h5 class="mb-0">
        					<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          						<strong>Pregunta 3</strong>
        					</button>
      					</h5>
    				</div>

    				<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      					<div class="card-body text-justify">
        					<p>Respuesta 3</p>
							
      					</div>
    				</div>
  				</div>
  				
	    </main>
				
	</div>
</div>
		
@endsection