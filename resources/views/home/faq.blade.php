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
    				<div class="card-header text-center" id="headingOne">
                <a data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    <h5 class="mb-0">
                      <strong>Pregunta 1</strong>
                      </h5>
                  </a>
            </div>

    				<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      					<div class="card-body text-justify">
        					<p>Respuesta 1</p>
      					</div>
    				</div>
  				</div>
  				<div class="card border-light mt-2">
    				<div class="card-header text-center" id="headingTwo">
                <a data-toggle="collapse" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <h5 class="mb-0">
                      <strong>Pregunta 2</strong>
                      </h5>
                  </a>
            </div>

    				<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      					<div class="card-body text-justify">
        					<p>Respuesta 2</p>
    				</div>
  				</div>
  				<div class="card border-light mt-2">
    				<div class="card-header text-center" id="headingThree">
                <a data-toggle="collapse" href="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                    <h5 class="mb-0">
                      <strong>Pregunta 3</strong>
                      </h5>
                  </a>
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