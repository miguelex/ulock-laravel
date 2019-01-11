@extends('layouts.master')

@section('contenido')	

<div class="container pt-4">
	<nav aria-label="breadcrumb">
		<ol class="breadcrumb breadcrum">
		    <li class="breadcrumb-item"><a href="/">@lang('breadcrumbs.inicio')</a></li>
		    <li class="breadcrumb-item active" aria-current="page">@lang('breadcrumbs.cancelacion')</li>
		</ol>
	</nav>
	<br>

	<h2>Renovaciones y cancelaciones</h2>
	<br>
	<div class="row justify-content-center">
	    <main class="col-lg-12 contenido-principal">
	    	<div class="accordion" id="accordionExample">
  				<div class="card border-light">
    				<div class="card-header text-center" id="headingOne">
                <a data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    <h5 class="mb-0">
                      <strong>Renovaciones</strong>
                      </h5>
                  </a>
            </div>

    				<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      					<div class="card-body text-justify">
        					<p>La cuota de suscripción al servicio SigFox asociado a tun dispositivo, así como impuestos y potenciales tarifas de transacción, se facturarán anualmente a tu Método de pago el día natural que corresponda al inicio de la porción de pago de tu suscripción. Visita nuestro sitio web y haz clic en el la ficha de tu dispositivo en la página " Mi Cuenta" para consultar la fecha de tu próximo pago</p>
      					</div>
    				</div>
  				</div>
  				<div class="card border-light mt-2">
    				<div class="card-header text-center" id="headingTwo">
                <a data-toggle="collapse" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <h5 class="mb-0">
                      <strong>Métodos de pago</strong>
                      </h5>
                  </a>
            </div>

    				<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      					<div class="card-body text-justify">
        					<p>Para utilizar el servicio SigFox debes proporcionar uno o más Métodos de pago. Puedes modificar tus Métodos de pago en la página "Mi Cuenta". Nosotros también podemos modificar tus Métodos de pago de acuerdo con los datos suministrados por los proveedores del servicio de pago. Después de cada modificación, nos autorizas a seguir cobrándote a través del Método o Métodos de pagos pertinentes. Si tu Método de pago principal es rechazado o ya no está disponible para que podamos cobrarte tu cuota de suscripción, nos autorizas a cobrarte a través de cualquier otro Método de pago asociado a tu cuenta. Tú seguirás siendo el responsable de cualquier importe no cobrado. Si no conseguimos cobrar un importe (por motivos como la caducidad de tu Método de pago, falta de fondos o cualquier otra causa) y tú no cancelas tu cuenta, podemos suspender tu acceso al servicio hasta que hayamos cobrado la deuda a través de un Método de pago válido. El emisor de algunos Métodos de pago puede cobrarte ciertas tarifas por conceptos como una operación en moneda extranjera u otros cargos relacionados con el procesamiento de tu Método de pago. Los cargos por impuestos locales pueden variar dependiendo del Método de pago usado. Consulta con tu proveedor de servicio de Método de pago para obtener detalles.</p>
      					</div>
    				</div>
  				</div>
  				<div class="card border-light mt-2">
    				<div class="card-header text-center" id="headingThree">
                <a data-toggle="collapse" href="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                    <h5 class="mb-0">
                      <strong>Cancelación</strong>
                      </h5>
                  </a>
            </div>

    				<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      					<div class="card-body text-justify">
        					<p>Puedes cancelar tu suscripción de SigFox en cualquier momento, y seguirás teniendo acceso al servicio hasta el final de tu periodo de facturación anual. En la medida en que lo permita la ley, los pagos no son reembolsables y no facilitamos devoluciones ni abonos por periodos parciales de suscripción anual. Para cancelar tu suscripción, ve a la página "Mi Cuenta" y sigue las instrucciones para la cancelación. Si cancelas tu suscripción, tu cuenta seguirá activa hasta que decidas darte de baja en de la misma.</p>
      				</div>
    				</div>
  				</div>
  				
	    </main>
				
	</div>
</div>

		

@endsection