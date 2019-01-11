@extends('layouts.master')

@section('contenido')	

<div class="container pt-4">
	<nav aria-label="breadcrumb">
		<ol class="breadcrumb breadcrum">
		    <li class="breadcrumb-item"><a href="/">@lang('breadcrumbs.inicio')</a></li>
		    <li class="breadcrumb-item active" aria-current="page">@lang('breadcrumbs.terminos')</li>
		</ol>
	</nav>
	<br>

	<h2>Terminos de uso</h2>
	<br>
	<div class="row justify-content-center">
	    <main class="col-lg-12 contenido-principal">
	    	<div class="accordion" id="accordionExample">
  				<div class="card border-light">
    				<div class="card-header text-center" id="headingOne">
                <a data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    <h5 class="mb-0">
                      <strong>Objeto y ámbito de aplicación. Identidad de la Compañía e información de contacto</strong>
                      </h5>
                  </a>
            </div>

    				<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      					<div class="card-body text-justify">
        					<p>Las presentes Condiciones Generales tienen como objeto regular la relación entre UBRISECURITY S.L.  (en adelante, UBRISECURITY), sociedad limitada, con domicilio social  en Avenida de España número 4, 11600, Ubrique (Cádiz), y C.I.F. Nº B72349830, inscrita en el Registro Mercantil de Cádiz, Folio 131, Tomo 2.271, Hoja CA-5.313 , y Vd. (en adelante el CLIENTE), relativas a todas las transacciones realizadas en la tienda online de UBRISECURITY. </p>
                  <p>Vd. Puede contactarnos mediante el formulario de contacto disponible en <a href ="/contacto">https://www.ubrisecurity.com/contacto</a>.</p>
      					</div>
    				</div>
  				</div>
  				<div class="card border-light mt-2">
    				<div class="card-header text-center" id="headingTwo">
                <a data-toggle="collapse" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <h5 class="mb-0">
                      <strong>Proceso de compra, aceptación de las condiciones de contratación y prueba de aceptación</strong>
                      </h5>
                  </a>
            </div>

    				<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      					<div class="card-body text-justify">
        					<p>A través de la tienda online de UBRISECURITY podrá adquirir nuestros productos puestos a su disposición. La adquisición de los mismos se realizará siguiendo los siguientes pasos:</p>
                  <ol>
                    <li>Seleccionar el producto que le interesa</li>
                    <li>Accederá a la página de información del producto, donde podrá encontrar la siguiente información y opciones
                      <ol type="a">
                        <li>Características técnicas, información.</li>
                        <li>En su caso, tamaños.</li>
                        <li>En su caso, colores.</li>
                      </ol>
                    </li>
                    <li>Una vez decidido el producto que quiere adquirir, seleccionado en su caso tamaño y color, podrá añadirlo a su carrito de compra mediante el botón “añadir a mi carrito”. Esta acción no supone todavía adquirir el producto.</li>
                    <li>Cuando haya acabado de incorporar productos al carrito, podrá acceder a él para revisar el total de la compra a efectuar. En la pantalla de carrito se le mostrará:
                        <ol type="a">
                          <li>productos escogidos</li>
                          <li>características de los productos (color, tamaño…)</li>
                          <li>coste individual y total</li>
                          <li>en su caso, ofertas en cada producto</li>
                          <li>los impuestos correspondientes a su compra</li>                       
                        </ol>
                    </li>
                    <li>Una vez haya revisado toda la información, podrá pulsar en el botón “Validar carrito”;</li>
                    <li>Si todavía no ha iniciado sesión o no se ha registrado, accederá a una pantalla intermedia donde se le ofrecerán ambas opciones.</li>
                    <li>Una vez iniciada la sesión, accederá a la pantalla de selección de método de envío, donde podrá escoger entre el envío estándar u otras opciones ofrecidas. Tenga en cuenta que el coste y plazo de envío variará según la opción escogida. En esta pantalla podrá ver los cambios que el método de envío supone en el precio total del carrito.</li>
                    <li>Finalmente accederá a una última página, donde podrá revisar todos los datos relativos a la compra, esto es los productos escogidos, el precio de cada uno, el total, los gastos de transporte, las ofertas, los impuestos oportunos, y la dirección de envío y facturación escogidas por usted durante el proceso de compra. Asimismo, es en esta pantalla donde aceptará las presentes Condiciones Generales de Contratación, como paso previo a proceder al pago. </li>
                    <li>Pulsando sobre el botón “Proceder al pago”, se le redireccionará a la página de elección de método de pago, donde encontrará el pago por tarjeta de crédito, Paypal, y cualesquiera otras opciones que podamos ofrecer en cada momento. Esta página está bajo el control de nuestro proveedor de pasarela de pago. Una vez introducidos y validados los datos de pago mediante el botón “Validar”, se procederá a la finalización del pedido, y Ud. y UBRISECURITY quedarán vinculados por las condiciones del presente documento.</li>
                  </ol>

                  <p>Tenga en cuenta que las presentes Condiciones Generales de Contratación pueden cambiar con el tiempo, por lo que es importante que las revise cada vez que realice una compra.</p>
                  <p>Desde el momento de la aceptación, adquiere la condición de CLIENTE de UBRISECURITY. Cualquier producto o servicio ofertado con posterioridad por UBRISECURITY deberá ser objeto de una nueva contratación.</p>
                  <p>Si desea leer con más detenimiento las Condiciones Generales de Contratación, las puede imprimir en papel o guardarlas en formato electrónico. Asimismo, puede solicitar una copia de las vigentes en cada momento poniéndose en contacto con nuestro Servicio de Atención al Cliente.</p>
                  <p>UBRISECURITY remitirá al CLIENTE, una vez aceptadas de forma expresa las presentes Condiciones Generales de Contratación, justificación de la contratación efectuada, con todos sus términos, a través de correo electrónico, antes de que se cumplan 24 horas de la compra o, como más tarde, junto a la entrega del primer ejemplar adquirido. </p>
                  <p>UBRISECURITY le informa de que archiva los documentos electrónicos en los que quedan formalizadas las compras. </p>
                  <p>En caso de que el CLIENTE cometiese un error al enviar los datos podrá modificar los mismos contactando con el Servicio de Atención al Cliente. Si el dato modificado se refiere a la dirección postal donde el CLIENTE ha solicitado que se le entregue el producto adquirido, siempre que el producto no haya sido enviado, dicho envío se realizará a la nueva dirección indicada. En caso contrario el CLIENTE deberá esperar a que se le vuelva a remitir el producto.</p>
      					</div>
    				</div>
  				</div>
  				<div class="card border-light mt-2">
    				<div class="card-header text-center" id="headingThree">
                <a data-toggle="collapse" href="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                    <h5 class="mb-0">
                      <strong>Precios, Forma de Pago y Entrega</strong>
                      </h5>
                  </a>
            </div>

    				<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      					<div class="card-body text-justify">
        					<p style="text-decoration: underline;">Precios</p>

                  <p>Los precios aplicables a cada producto son los indicados en la página web en la fecha del pedido incluyendo todos ellos el IVA (Impuesto sobre el Valor Añadido).</p>
                  <p>Las ofertas estarán debidamente marcadas e identificadas como tal, indicando convenientemente el precio anterior y el precio de la oferta.</p>
                  <p>UBRISECURITY se reserva el derecho de efectuar en la web, en cualquier momento y sin previo aviso, las modificaciones que considere oportunas, pudiendo actualizar diariamente productos y servicios en función del mercado. </p>
                  <p>Los gastos de envío correspondientes siempre se indican en el pedido. En los envíos realizados a países no pertenecientes a la Unión Europea, UBRISECURITY no asumirá los gastos correspondientes a impuestos y aranceles aduaneros propios de cada país.</p>

                  <p style="text-decoration: underline;">Forma de pago</p>

                  <p>Las compras se pueden pagar por cualquiera de los medios indicados en la página Web en cada momento.</p>

                  <p style="text-decoration: underline;">Entrega</p>

                  <p>Las entregas se envían a la dirección de entrega que el CLIENTE indica, en un plazo máximo de treinta (30) días naturales a contar desde la celebración del contrato para entregas en la Península Ibérica. En el supuesto de que las entregas se efectúen a Ceuta/Melilla y/o Canarias, el plazo máximo de entrega será de………días naturales/el plazo máximo de entrega será el anteriormente indicado.</p>
                  <p>En el supuesto de que el CLIENTE no recibiera los productos adquiridos podrá reclamar el envío de los mismos contactando con el Servicio de Atención al Cliente. Únicamente podrán reclamarse los productos enviados y no recibidos durante los sesenta (60) días anteriores a la fecha de la reclamación.</p>
                  <p>Se dará por cumplido el plazo de entrega establecido en el momento en que la empresa de transportes ponga a disposición del CLIENTE el o los artículos adquiridos, considerando a tales efectos como domicilio de entrega el informado en el proceso de compra. Cualquier cambio de domicilio con posterioridad al proceso de adquisición podría conllevar gastos adicionales sobre el precio informado, que serán a cargo del CLIENTE que lo solicite.</p>
                  <p>UBRISECURITY, mediante el proveedor logístico responsable del envío, intentarán varias entregas hasta poder finalizar la misma. Para ello, nos podremos poner en contacto directamente o mediante el propio proveedor logístico para gestionar la entrega, utilizando para ello los datos de contacto que nos haya proporcionado. Los pedidos que no hayan podido ser entregados transcurridos quince (15) días desde la salida de los mismos del almacén por causa no imputable a UBRISECURITY o al proveedor logístico serán devueltos a éste, restituyéndose el precio pagado por el CLIENTE salvo los gastos de envío correspondientes, sin que proceda reclamación alguna por daños y perjuicios, presentes o futuros, directos o indirectos, ni bajo las modalidades de daño emergente o lucro cesante.</p>
                  <p>El CLIENTE deberá firmar debidamente el albarán de entrega, indicando cualquier desperfecto, golpe o anomalía detectado en el o los artículos, en su caso.</p>

      				</div>
    				</div>
  				</div>
  				<div class="card border-light mt-2">
    				<div class="card-header text-center" id="headingFour">
                <a data-toggle="collapse" href="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                    <h5 class="mb-0">
                      <strong>Atención al Cliente</strong>
                      </h5>
                  </a>
            </div>

    				<div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
      					<div class="card-body text-justify">
        					<p>Para cualquier reclamación o consulta puede ponerse en contacto con UBRISECURITY a través del formulario habilitado en la dirección web  <a href ="/contacto">https://www.ubrisecurity.com/contacto</p>
      					</div>
    				</div>
  				</div>
  				<div class="card border-light mt-2">
    				<div class="card-header text-center" id="headingFive">
                <a data-toggle="collapse" href="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                    <h5 class="mb-0">
                      <strong>Idioma</strong>
                      </h5>
                  </a>
            </div>

    				<div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
      					<div class="card-body text-justify">
          				<p>El idioma en que se perfeccionará el contrato entre UBRISECURITY y el CLIENTE es el castellano. </p>
                  
      					</div>
    				</div>
  				</div>
  				<div class="card border-light mt-2">
    				<div class="card-header text-center" id="headingSix">
                <a data-toggle="collapse" href="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
                    <h5 class="mb-0">
                      <strong>Responsabilidades de UBRISECURITY</strong>
                      </h5>
                  </a>
            </div>

    				<div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
      					<div class="card-body text-justify">
        					<p>UBRISECURITY garantiza la calidad del servicio contratado a través de la página Web.</p> 
                  <p>Quedan garantizados todos los derechos que las Leyes en vigor garanticen a los consumidores y usuarios.</p> 
                  <p>El incumplimiento de cualquiera de estas Condiciones Generales de Contratación podrá dar lugar a la devolución de los productos adquiridos por el CLIENTE.		</p>			
      					</div>
    				</div>
  				</div>
          <!-- nueva tarjeta -->
          <div class="card border-light mt-2">
            <div class="card-header text-center" id="headingSeven">
                <a data-toggle="collapse" href="#collapseSeven" aria-expanded="true" aria-controls="collapseSeven">
                    <h5 class="mb-0">
                      <strong>Responsabilidades del Cliente</strong>
                      </h5>
                  </a>
            </div>

            <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordionExample">
                <div class="card-body text-justify">
                  <p>El CLIENTE se obliga a realizar un uso lícito de los Servicios, sin contravenir la legislación vigente, ni lesionar los derechos e intereses de terceras personas.</p>
                  <p>El CLIENTE garantiza la veracidad y exactitud de los datos facilitados al cumplimentar los formularios de contratación, evitando la causación de perjuicios a UBRISECURITY producto de la incorrección de los mismos.</p>
                  <p>El incumplimiento de cualquiera de estas Condiciones podrá dar lugar a la retirada o cancelación de los Servicios por parte de UBRISECURITY sin necesidad de preaviso al CLIENTE y sin que ello dé derecho a indemnización alguna. </p>    
                </div>
            </div>
          </div>
          <!-- nueva tarjeta -->
          <div class="card border-light mt-2">
            <div class="card-header text-center" id="headingTwenty">
                <a data-toggle="collapse" href="#collapseTwenty" aria-expanded="true" aria-controls="collapseTwenty">
                    <h5 class="mb-0">
                      <strong>Seguridad</strong>
                      </h5>
                  </a>
            </div>

            <div id="collapseTwenty" class="collapse" aria-labelledby="headingTwenty" data-parent="#accordionExample">
                <div class="card-body text-justify">
                  <p>El sitio we butiliza técnicas de seguridad de lainformación generalmente aceptada en la industria, tales como firewalls, procedimientos de control de acceso y mecanismos criptográficos, todo ello con el objeto de evitar el acceso no autorizado de datos. Para lograr estos fines, el usuario/cliente acepta que el prestador obtenga datos para efecto de la correspondiente autenticación de los controles de acceso.</p>    
                </div>
            </div>
          </div>
          <!-- nueva tarjeta -->
          <div class="card border-light mt-2">
            <div class="card-header text-center" id="headingEight">
                <a data-toggle="collapse" href="#collapseEight" aria-expanded="true" aria-controls="collapseEight">
                    <h5 class="mb-0">
                      <strong>Datos personales y comunicaciones comerciales</strong>
                      </h5>
                  </a>
            </div>

            <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordionExample">
                <div class="card-body text-justify">
                  <p>UBRISECURITY es una sociedad comprometida con la privacidad de los datos de sus Clientes.</p>
                  <p>La captación, el uso y la comunicación de sus datos de carácter personal se realizan conforme a lo indicado en nuestra política de privacidad, que puede encontrar en el siguiente <a href="/privacidad">enlace</a> </p>
                  <p>Para ejercitar sus derechos, o realizar cualquier consulta relacionada con la forma en que gestionamos sus datos de carácter personal, puede ponerse en contacto con nosotros en <a href="mailto:soporte@ubrisecurity.com">soporte@ubrisecurity.com</a>. </p>   
                </div>
            </div>
          </div>
          <!-- nueva tarjeta -->
          <div class="card border-light mt-2">
            <div class="card-header text-center" id="headingNine">
                <a data-toggle="collapse" href="#collapseNine" aria-expanded="true" aria-controls="collapseNine">
                    <h5 class="mb-0">
                      <strong>Propiedad Industrial e Intelectual</strong>
                      </h5>
                  </a>
            </div>

            <div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#accordionExample">
                <div class="card-body text-justify">
                  <p>Los derechos de propiedad intelectual e industrial sobre las marcas, logos, y cualquier otro susceptible de protección, contenidos en la página web de UBRISECURITY corresponden en exclusiva a UBRISECURITY o a terceros que han autorizado su inclusión en la página web. La reproducción, distribución, comercialización o transformación no autorizadas de tales, marcas, logos, etc. constituye una infracción de los derechos de propiedad intelectual e industrial de UBRISECURITY o del titular de los mismos, y podrá dar lugar al ejercicio de cuantas acciones judiciales o extrajudiciales les pudieran corresponder en el ejercicio de sus derechos.</p>
                  <p>Asimismo, la información a la cual el CLIENTE puede acceder a través de la web, puede estar protegida por derechos de propiedad industrial, intelectual o de otra índole. UBRISECURITY no será responsable en ningún caso y bajo ningún concepto de las infracciones de tales derechos que pueda cometer como usuario.   </p>
                </div>
            </div>
          </div>
          <!-- nueva tarjeta -->
          <div class="card border-light mt-2">
            <div class="card-header text-center" id="headingTen">
                <a data-toggle="collapse" href="#collapseTen" aria-expanded="true" aria-controls="collapseTen">
                    <h5 class="mb-0">
                      <strong>Jurisdicción y Ley aplicable</strong>
                      </h5>
                  </a>
            </div>

            <div id="collapseTen" class="collapse" aria-labelledby="headingTen" data-parent="#accordionExample">
                <div class="card-body text-justify">
                  <p>En el supuesto de que surja cualquier conflicto o discrepancia en la interpretación o aplicación de las presentes Condiciones Generales de Contratación, los Juzgados y Tribunales que, en su caso, conocerán del asunto, serán los que disponga la normativa legal aplicable en materia de jurisdicción competente, en la que se atiende, tratándose de consumidores finales, al lugar del cumplimiento de la obligación o al del domicilio de la parte compradora. </p>
                  <p>Todo ello sin perjuicio de la facultad del CLIENTE de acudir a la Junta Arbitral de Consumo de su demarcación.</p>
                  <p>Asimismo, le informamos de que la Comisión Europea pone a disposición de los consumidores una plataforma para la resolución de reclamaciones online en materia de consumo, que como consumidor puede utilizar y que se se encuentra disponible en el siguiente enlace: http://ec.europa.eu/consumers/odr/index_en.htm </p>
            </div>
          </div>
          
	    </main>
				
	</div>
</div>

		

@endsection