@extends('layouts.master')

@section('contenido')	

<div class="container pt-4">
	<nav aria-label="breadcrumb">
		<ol class="breadcrumb breadcrum">
		    <li class="breadcrumb-item"><a href="/">@lang('breadcrumbs.inicio')</a></li>
		    <li class="breadcrumb-item active" aria-current="page">@lang('breadcrumbs.aviso')</li>
		</ol>
	</nav>
	<br>

	<h2>Aviso legal</h2>
	<br>
	<div class="row justify-content-center">
	    <main class="col-lg-12 contenido-principal">
	    	<div class="accordion" id="accordionExample">
  				<div class="card border-light">
    				<div class="card-header text-center" id="headingOne">
                <a data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    <h5 class="mb-0">
                      <strong>Preambulo y aceptación</strong>
                      </h5>
                  </a>
            </div>

    				<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      					<div class="card-body text-justify">
        					<p>Este sitio web pertenece exclusivamente a UBRISECURITY. Se presupone que los usuarios que desean utilizar este sitio web han leído y aceptado sin reservas el presente aviso legal. Los usuarios deben leer cualquier versión nueva de este aviso legal siempre que visiten este sitio web. Este aviso no representa ni las condiciones generales del servicio ni las condiciones generales de venta. </p>
      					</div>
    				</div>
  				</div>
  				<div class="card border-light mt-2">
    				<div class="card-header text-center" id="headingTwo">
                <a data-toggle="collapse" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <h5 class="mb-0">
                      <strong>Información legal</strong>
                      </h5>
                  </a>
            </div>

    				<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      					<div class="card-body text-justify">
        					<p>UBRISECURITY S.L. es una sociedad limitada, con domicilio social con domicilio en Avenida de España número 4, 11600, Ubrique (Cádiz), y C.I.F. Nº B72349830, inscrita en el Registro Mercantil de Cádiz, Folio 131, Tomo 2.271, Hoja CA-5.313</p>
      					</div>
    				</div>
  				</div>
  				<div class="card border-light mt-2">
    				<div class="card-header text-center" id="headingThree">
                <a data-toggle="collapse" href="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                    <h5 class="mb-0">
                      <strong>Limitación de responsabilidad</strong>
                      </h5>
                  </a>
            </div>

    				<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      					<div class="card-body text-justify">
        					<p>Los usuarios afirman disponer de la competencia y los medios necesarios para acceder a este sitio web y utilizarlo. Los usuarios admiten haber comprobado que la configuración del ordenador que utilizan no tiene virus y que se encuentra en perfecto estado. El editor del sitio web se ocupa de todo lo necesario para poder ofrecer a los usuarios información o herramientas disponibles y verificadas, pero no se le podrá hacer responsable de los errores, del fallo en la disponibilidad de las funciones o de la presencia de virus en el sitio web, ni garantiza que ello no pueda ocurrir. El editor del sitio web no será responsable de:</p>
                  <ul>
                    <li>La calidad del servicio, que se ofrece «tal cual».</li>
                    <li>La interrupción en el uso del sitio web.</li>
                    <li>La imposibilidad de uso del sitio web.</li>
                    <li>Los atentados a la seguridad informática que puedan causar daños a los equipos informáticos de los usuarios o a sus datos.</li>
                    <li>La violación de los derechos de los usuarios de manera general.</li>
                  </ul>

                  <p>La información facilitada por el editor del sitio web es orientativa y no exime al usuario de realizar análisis complementarios y personalizados. El editor del sitio web no puede garantizar la exactitud, la completitud y la actualidad de la información difundida en este sitio web. Por lo tanto, los usuarios aceptan asumir toda la responsabilidad del uso que hagan de esta información.</p>
                  <p>Los usuarios se comprometen a utilizar esta web y los servicios de conformidad con las presentes condiciones y la normativa vigente que sea de aplicación.</p>
                  <p>Asimismo, los usuarios se obligan a abstenerse de utilizar esta web y sus servicios con fines o efectos ilícitos, contrarios a lo establecido en el presente aviso legal, lesivos de los derechos e intereses de terceros, o que de cualquier otra forma puedan dañar, inutilizar, sobrecargar o deteriorar la web y los servicios o impedir la normal utilización o disfrute de esta web y de sus servicios por parte de los usuarios.</p>
                  <p>Los usuarios deberán abstenerse de obtener e incluso intentar obtener informaciones, mensajes, gráficos, dibujos, archivos de sonido y/o imagen, fotografías, grabaciones, software y, en general, cualquier clase de material accesibles a través de la web o sus servicios, empleando para ello medios o procedimientos distintos de lo que, según el caso, se hayan puesto a su disposición a este efecto o se hayan indicado a través de esta web.</p>
                  <p>No está permitida la inclusión de los contenidos de esta web en otros portales de Internet, ni en otros medios o soportes. Tampoco se permite la reproducción, distribución, comunicación pública ni transformación de los contenidos de esta web en cualquier forma o soporte, ya sea gratuitamente o mediante contraprestación económica.</p>
                  <p>UBRISECURITY se reserva el derecho a modificar o suprimir en cualquier momento y sin previo aviso los contenidos, servicios e informaciones que se encuentran en esta web.</p>
      				</div>
    				</div>
  				</div>
  				<div class="card border-light mt-2">
    				<div class="card-header text-center" id="headingFour">
                <a data-toggle="collapse" href="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                    <h5 class="mb-0">
                      <strong>Propiedad intelectual</strong>
                      </h5>
                  </a>
            </div>

    				<div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
      					<div class="card-body text-justify">
        					<p>La estructura general, así como el software, los textos, las imágenes (animadas o no), las fotografías, el sonido, las funcionalidades y los demás elementos que componen el sitio web son propiedad exclusiva del editor del mismo. </p>
                  <p>Se prohíbe la reproducción total o parcial de este sitio por cualquier persona sin la autorización expresa del editor del sitio, y hacerlo constituiría una falsificación sancionada por la ley española sobre propiedad intelectual. Lo mismo se aplica para las bases de datos que pudieran figurar en el sitio web y que estarían protegidas por la ley española sobre propiedad intelectual. Asimismo, se prohíbe expresamente la copia, comunicación pública, distribución, modificación, transformación, supresión, manipulación y cualquier otra forma de utilización, con o sin ánimo de lucro, de todo o parte de esta web o cualquiera de sus contenidos, sin la previa y expresa autorización del editor del sitio web.</p>
                  <p>Las marcas comerciales, sean figurativas, mixtas o de otro tipo, y los logotipos que aparecen en el sitio web son propiedad del operador del sitio web. Se prohíbe la reproducción total o parcial de estas marcas comerciales o de estos logotipos efectuada a partir de los elementos del sitio web sin la autorización expresa del propietario del sitio, según ley española sobre propiedad intelectual. </p>
                  <p>Los diseños y los modelos que aparecen en el sitio web son propiedad del operador del sitio web. Se prohíbe la fabricación, el ofrecimiento, la comercialización, la importación, la exportación, el uso o la retención para estos fines de un producto que lleve el diseño o el modelo sin la autorización expresa del propietario del diseño o del modelo, según ley española sobre propiedad intelectual.</p>
                  <p>Bajo ningún concepto se entenderá que, por el acceso a esta web, los usuarios obtengan licencia o autorización alguna de UBRISECURITY para la utilización, más allá del uso estrictamente personal, de ningún contenido, información o servicio existentes en la Web, ni sobre ningún derecho relacionado con ellos, especialmente los de propiedad intelectual o industrial.</p>
      					</div>
    				</div>
  				</div>
  				<div class="card border-light mt-2">
    				<div class="card-header text-center" id="headingFive">
                <a data-toggle="collapse" href="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                    <h5 class="mb-0">
                      <strong>Acceso a la web y contraseñas</strong>
                      </h5>
                  </a>
            </div>

    				<div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
      					<div class="card-body text-justify">
          				<p>Los datos de los usuarios obtenidos a través de la suscripción o registro en la presente web están protegidos mediante contraseñas escogidas por ellos mismos. Los usuarios se comprometen a mantener su contraseña en secreto y a protegerla de usos no autorizados por terceros. En el caso de que fuera revelada a terceros, el Usuario será responsable del uso que hagan del servicio estos terceros. Asimismo, deberá notificar a UBRISECURITY inmediatamente cualquier uso no consentido de su cuenta o cualquier violación de la seguridad relacionada con el servicio de la página web, de la que haya tenido conocimiento. </p>
                  <p>En Internet no existe la seguridad absoluta pero UBRISECURITY adopta las medidas técnicas y organizativas necesarias para garantizar la protección de los datos de carácter personal y evitar su alteración, pérdida, tratamiento y/o acceso no autorizado, habida cuenta del estado de la técnica, la naturaleza de los datos almacenados y los riesgos a que están expuestos.</p>
                  <p>UBRISECURITY no se hace responsable frente a los usuarios, por la revelación de sus datos personales a terceros que no sea debida a causas directamente imputables a UBRISECURITY, ni por el uso que de tales datos hagan terceros ajenos a UBRISECURITY.</p>
      					</div>
    				</div>
  				</div>
  				<div class="card border-light mt-2">
    				<div class="card-header text-center" id="headingSix">
                <a data-toggle="collapse" href="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
                    <h5 class="mb-0">
                      <strong>Créditos</strong>
                      </h5>
                  </a>
            </div>

    				<div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
      					<div class="card-body text-justify">
        					<p>El sitio web es propiedad del editor del mismo. </p>			
      					</div>
    				</div>
  				</div>
          <!-- Nueva tarjeta -->
          <div class="card border-light mt-2">
            <div class="card-header text-center" id="headingSeven">
                <a data-toggle="collapse" href="#collapseSeven" aria-expanded="true" aria-controls="collapseSeven">
                    <h5 class="mb-0">
                      <strong>Hipervínculos</strong>
                      </h5>
                  </a>
            </div>

            <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordionExample">
                <div class="card-body text-justify">
                  <p>El sitio web contiene vínculos a otros sitios web cuya manera de obrar respecto a la privacidad y la protección de datos de carácter personal puede ser distinta a la de UBRISECURITY. Si el usuario envía datos personales a algunos de estos sitios, dichos datos estarán sujetos a sus declaraciones de confidencialidad. UBRISECURITY anima a los usuarios a leer atentamente la declaración de confidencialidad de todos los sitios web que visiten. </p>
                  <p>Este sitio web puede contener hipervínculos que redirigen a otros recursos existentes en Internet, y concretamente a sus colaboradores; todos estos vínculos cuentan con autorización previa por escrito. El editor del sitio web no se hace responsable del acceso a otros recursos de Internet por parte de los usuarios mediante los hipervínculos presentes en el sitio web.</p>
                  <p>El usuario no puede incluir en otro lugar un hipervínculo hacia este sitio web sin la autorización previa y expresa del editor de este sitio web. En ningún caso se podrá considerar dicha autorización como un acuerdo de afiliación implícito. En todo caso, los hipervínculos que reenvíen hacia este sitio web deberán ser eliminados a la primera solicitud del editor del sitio.</p>
                  <p>Asimismo, tampoco se permite (i) crear un browser o border environment, (ii) realizar manifestaciones falsas, inexactas o incorrectas sobre esta web y/o sus contenidos y, en especial dar a entender que UBRISECURITY ha autorizado el enlace.</p>
                  <p>La existencia de un enlace en una web tercera hacia esta web no implica en ningún caso la existencia de relaciones entre UBRISECURITY y el propietario de la web tercera, ni la aceptación y/o aprobación por parte de UBRISECURITY de sus contenidos o servicios, salvo que se indique expresamente lo contrario.   </p> 
                </div>
            </div>
          </div>
          <!-- Nueva tarjeta -->
          <div class="card border-light mt-2">
            <div class="card-header text-center" id="headingEight">
                <a data-toggle="collapse" href="#collapseEight" aria-expanded="true" aria-controls="collapseEight">
                    <h5 class="mb-0">
                      <strong>Legislación aplicable</strong>
                      </h5>
                  </a>
            </div>

            <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordionExample">
                <div class="card-body text-justify">
                  <p>Para el sitio web corporativo, para el conjunto de las páginas del sitio web www.ubrisecurity.com, será de aplicación la ley española, quedando excluidas todas las demás. Toda disputa que se derive directa o indirectamente del uso de estas páginas será competencia de las jurisdicciones españolas. </p>     
                </div>
            </div>
          </div>
          <!-- Nueva tarjeta -->
          <div class="card border-light mt-2">
            <div class="card-header text-center" id="headingNine">
                <a data-toggle="collapse" href="#collapseNine" aria-expanded="true" aria-controls="collapseNine">
                    <h5 class="mb-0">
                      <strong>Modificación del aviso legal</strong>
                      </h5>
                  </a>
            </div>

            <div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#accordionExample">
                <div class="card-body text-justify">
                  <p>Podemos actualizar este aviso legal para reflejar cambios en nuestras prácticas informativas. Si realizamos algún cambio material, le avisaremos por correo electrónico (enviado a la dirección especificada en su cuenta) o por medio de un aviso destacado en este sitio web, antes de la fecha efectiva del cambio. Le animamos a que revise periódicamente esta página para estar al tanto de la información más reciente sobre las condiciones legales de esta web.</p>     
                </div>
            </div>
          </div>
          <!-- Nueva tarjeta -->
          <div class="card border-light mt-2">
            <div class="card-header text-center" id="headingTen">
                <a data-toggle="collapse" href="#collapseTen" aria-expanded="true" aria-controls="collapseTen">
                    <h5 class="mb-0">
                      <strong>Contactar</strong>
                      </h5>
                  </a>
            </div>

            <div id="collapseTen" class="collapse" aria-labelledby="headingTen" data-parent="#accordionExample">
                <div class="card-body text-justify">
                  <p>Si tiene alguna pregunta, puede ponerse en contacto con nosotros en la dirección física: UBRISECURITY S.L., Avenidad de España nº4, 11600 Ubrique, Cádiz (España)., o a través de la dirección de correo electrónico  <a href="mailto:ubrisecurity@ubrisecurity.com">ubrisecurity@ubrisecurity.com</a> </p>     
                </div>
            </div>
          </div>
          
	    </main>
				
	</div>
</div>

		

@endsection