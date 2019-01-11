@extends('layouts.master')

@section('contenido')	

<div class="container pt-4">
	<nav aria-label="breadcrumb">
		<ol class="breadcrumb breadcrum">
		    <li class="breadcrumb-item"><a href="/">@lang('breadcrumbs.inicio')</a></li>
		    <li class="breadcrumb-item active" aria-current="page">@lang('breadcrumbs.cookies')</li>
		</ol>
	</nav>
	<br>

	<h2>Cookies</h2>
	<br>
	<div class="row justify-content-center">
	    <main class="col-lg-12 contenido-principal">
	    	<div class="accordion" id="accordionExample">
  				<div class="card border-light">
    				<div class="card-header text-center" id="headingOne">
                <a data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    <h5 class="mb-0">
                      <strong>Cuestiones generales</strong>
                      </h5>
                  </a>
            </div>

    				<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      					<div class="card-body text-justify">
        					<p>Cuando los usuarios visitan el sitio web, se instala en su terminal una cookie sujeta a la configuración y las opciones que resulten de los parámetros del navegador utilizado.</p>
      					</div>
    				</div>
  				</div>
  				<div class="card border-light mt-2">
    				<div class="card-header text-center" id="headingTwo">
                <a data-toggle="collapse" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <h5 class="mb-0">
                      <strong>Definición de cookies</strong>
                      </h5>
                  </a>
            </div>

    				<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      					<div class="card-body text-justify">
        					<p>Las cookies son unos datos que utiliza un servidor para enviar información de estado al navegador de un usuario, y dicho navegador para reenviar la información de estado al servidor de origen.</p>
							    <p>La información de estado puede ser, por ejemplo, un identificador de sesión, el idioma, una fecha de vencimiento, un dominio de respuesta, etc.</p>
                  <p>Las cookies permiten conservar, durante su periodo de validez, información de estado cuando un navegador accede a distintas páginas de un sitio web o cuando dicho navegador vuelve posteriormente a ese sitio web.</p>
                  <p>Solo el emisor de una cookie puede leer o modificar la información que contiene.</p>
      					</div>
    				</div>
  				</div>
  				<div class="card border-light mt-2">
    				<div class="card-header text-center" id="headingThree">
                <a data-toggle="collapse" href="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                    <h5 class="mb-0">
                      <strong>Tipos de cookies</strong>
                      </h5>
                  </a>
            </div>

    				<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      					<div class="card-body text-justify">
        					<p>Existen distintos tipos de cookies:</p>
    							<ul>
    								<li>Cookies de sesión, que desaparecen cuando el usuario abandona el sitio web.</li>

    								<li>Cookies permanentes, que se conservan en el terminal hasta que llega su fecha de vencimiento o hasta que son suprimidas mediante ciertas funciones del navegador.</li>
    							</ul>
      				</div>
    				</div>
  				</div>
  				<div class="card border-light mt-2">
    				<div class="card-header text-center" id="headingFour">
                <a data-toggle="collapse" href="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                    <h5 class="mb-0">
                      <strong>Uso de las cookies por parte de UBRISECURITY</strong>
                      </h5>
                  </a>
            </div>

    				<div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
      					<div class="card-body text-justify">
        					<p>Los principales objetivos de las cookies utilizadas en este sitio web son: </p>
    							<ul>
    								<li>Recordar la información proporcionada por los usuarios o solicitada a estos en los formularios de nuestro sitio web.</li>
                    <li>Contabilizar los visitantes e identificar la forma en que utilizan el sitio web.</li>
                    <li>Reconocer y diferenciar las visitas.</li>
                    <li>Permitir el acceso a espacios privados (como el área personal del usuario) mediante identificadores o datos facilitados previamente por el usuario.</li>
                    <li>Identificar desde qué sitio web o motor de búsqueda y mediante qué expresión de búsqueda ha llegado el usuario al sitio web.</li>
                    <li>Realizar análisis estadísticos, de tráfico y de uso para mejorar el sitio web.</li>
                    <li>Adaptar la presentación de los contenidos de acuerdo con las preferencias del usuario.</li>
                    <li>Gestionar la seguridad.</li>
                    <li>Mejorar la relevancia de la publicidad de Internet y los destinatarios mediante el ajuste de los anuncios a los hábitos de navegación del usuario.</li>
                    <li>Gestionar el carrito de la compra y los productos que el usuario haya podido añadir.</li>
    							</ul>
      					</div>
    				</div>
  				</div>
  				<div class="card border-light mt-2">
    				<div class="card-header text-center" id="headingFive">
                <a data-toggle="collapse" href="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                    <h5 class="mb-0">
                      <strong>Cookies que usamos</strong>
                      </h5>
                  </a>
            </div>

    				<div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
      					<div class="card-body text-justify">
        					<p style="text-decoration: underline;">Cookies técnicas de uso interno<p>
                  <p>Esta web utiliza cookies de uso interno imprescindibles para el funcionamiento de la web, como por ejemplo aquellas que permiten la autenticación o el mantenimiento de la sesión del usuario registrado cuando navega por la página, ofrecer mejor experiencia de navegación, y, en definitiva, asegurar el buen funcionamiento de la web. La desactivación de estas cookies impide el funcionamiento correcto de algunas de las funcionalidades de la web.</p>

                  <p style="text-decoration: underline;">Cookies Analíticas</p>
                  <p>Esta web utiliza cookies analíticas para recabar estadísticas sobre la actividad del usuario en la web y la actividad general de la misma. La información recopilada permite optimizar la navegación por nuestra página web y garantizar el mejor servicio al usuario, conociendo por ejemplo el número de páginas visitadas, el idioma utilizado, la frecuencia y reincidencia de las visitas, el tiempo de las visitas o el navegador utilizado, entre otra. El usuario puede excluir su actividad mediante los sistemas de exclusión facilitados por las herramientas analíticas o por la propia configuración de su navegador.</p>

                  <p>La aplicación utilizada para obtener esta información es la siguiente:</p>
                  <p><strong>Servicio:</strong> Google Analytics</p>
                  <p><strong>PROVEEDOR:</strong> Google</p>
                  <p><strong>MAS INFORMACIÓN:</strong></p>
                  <p><a href="http://www.google.com/analytics/">http://www.google.com/analytics/</a><P>
                  <p><a href="https://www.google.com/intl/es_es/policies/technologies/cookies/">https://www.google.com/intl/es_es/policies/technologies/cookies/</a></p>

                  <p style="text-decoration: underline;">Cookies de redes sociales.</p>
                  <p>Nuestra página web incorpora espacios en los que se han incluido botones sociales para que los usuarios puedan compartir nuestros contenidos en ellas. No controlamos las cookies que instala cada red social, aunque éstas suelen ser técnicas para el control del inicio de sesión o mostrar el contador que muestra cuantas veces se ha compartido un determinado contenido. Recomendamos a todos los usuarios que revisen las condiciones de privacidad y cookies de cada red social, y en su caso, que modifiquen los parámetros de privacidad en cada una de ellas para limitar las finalidades de rastreo que puedan llevar a cabo.</p>
                  <p><strong>COOKIES DE REDES SOCIALES</strong></p>
                  <p><strong>RED SOCIAL</strong> Facebook Connect</p>
                  <p><strong>MAS INFORMACIÓN:</strong> <a href="https://www.facebook.com/policies/cookies/">https://www.facebook.com/policies/cookies/</a></p>

                  <p style="text-decoration: underline;">Consentimiento en la primera visita al sitio web</p>
                  <p>En su primera visita al sitio www.ubrisecurity.com, se pregunta a los usuarios si aceptan o rechazan las cookies, a fin de garantizar la obtención del consentimiento del usuario antes de instalar las cookies en su equipo.</p>
                  <p>Si el usuario rechaza las cookies, se instalará una cookie de rechazo en su dispositivo para que UBRISECURITY registre la información según la cual solicita que no se instale ninguna cookie.</p>
                  <p>No obstante, conviene precisar que, si se elimina la cookie de rechazo, las cookies de UBRISECURITY se volverán a instalar en el dispositivo del usuario. Si el usuario acepta las cookies, se instalarán en su terminal las cookies utilizadas por UBRISECURITY.</p>
                  <p>El usuario podrá cambiar de opinión en cualquier momento:</p>
                  <ul>
                    <li>bien eliminando la cookie de rechazo</li>
                    <li>bien por otros medios descritos en la sección «Gestión de cookies»</li>
                  </ul>

                  <p style="text-decoration: underline;">Gestión de cookies</p>
                  <p>El usuario dispone de varias opciones para gestionar las cookies.
                  Puede decidir en cualquier momento expresar y modificar sus deseos en cuanto a las cookies, por los medios que se describen a continuación.</p>
                 <p> La mayoría de los navegadores utilizan la configuración predeterminada y aceptan la instalación de cookies, pero el usuario tiene la posibilidad de hacer que se acepten todas las cookies, o que se rechacen sistemáticamente, o incluso hacer que se acepten en función de cuál sea su procedencia.</p>
                  <p>El usuario también puede configurar el navegador para aceptar o rechazar las cookies caso por caso, antes de que se instalen. Además, puede borrar las cookies periódicamente de su dispositivo a través del navegador. El usuario no debe olvidar que tendrá que configurar todos los navegadores de los diversos dispositivos que utilice (tabletas, smartphones, ordenadores, etc.).</p>
                  <p>Asimismo, el usuario puede activar la navegación privada, mediante la cual su navegador deja de guardar el historial de navegación, contraseñas de sitios web, cookies y otra información de las páginas que visita.</p>
                  <p>Le recomendamos que consulte la ayuda de su navegador para informarse de las diferentes opciones sobre cómo gestionar las cookies. Tenga en cuenta que el bloqueo de cookies puede afectar a todas o algunas de las funcionalidades de nuestra web. Para su comodidad, a continuación, le proporcionamos los links de ayuda o configuración de cookies de los navegadores principales:</p>
                  <ul>
                    <li><strong>Microsoft Internet Explorer 11:</strong> <a href="http://windows.microsoft.com/es-es/internet-explorer/delete-manage-cookies#ie=ie-11">http://windows.microsoft.com/es-es/internet-explorer/delete-manage-cookies#ie=ie-11</a></li>
                    <li><strong>Microsoft Edge:</strong> <a href="http://windows.microsoft.com/es-xl/windows-10/edge-privacy-faq">http://windows.microsoft.com/es-xl/windows-10/edge-privacy-faq</a></li>
                    <li><strong>Apple Safari 8 (Yosemite):</strong> <a href="https://support.apple.com/kb/PH19214?locale=es_ES">https://support.apple.com/kb/PH19214?locale=es_ES</a></li>
                    <li><strong>Apple Safari 9 (El Capitán):</strong> <a href="https://support.apple.com/kb/PH21411?locale=es_ES">https://support.apple.com/kb/PH21411?locale=es_ES</a></li>
                    <li><strong>Google Chrome:</strong> <a href="https://support.google.com/chrome/answer/95647?hl=es">https://support.google.com/chrome/answer/95647?hl=es</a></li>
                    <li><strong>Mozilla Firefox:</strong> <a href="https://support.mozilla.org/es/kb/habilitar-y-deshabilitar-cookies-que-los-sitios-we">https://support.mozilla.org/es/kb/habilitar-y-deshabilitar-cookies-que-los-sitios-we</a> y                  <a href="https://support.mozilla.org/es/kb/Borrar cookies">https://support.mozilla.org/es/kb/Borrar cookies</a></li>
                  </ul>

                  <p>Los links anteriores pueden actualizarse por parte de las Empresas desarrolladoras de dichos navegadores. UBRISECURiTY pondrá todos los esfuerzos razonables para mantener el listado anterior debidamente actualizado. Sin embargo, si algún link no funcionara o no estuviera actualizado, puede acudir al menú “Ayuda” de su navegador.</p>
                  <p>Si desea tener un mayor control sobre la instalación de Cookies, puede instalar programas o complementos a su navegador, conocidos como herramientas de “Do Not Track”, que le permitirán escoger aquellas Cookies que desea permitir.</p>

                  <p style="text-decoration: underline;">Oponerse a la instalación de Cookies de proveedores (opt out)</p>
                  <p>Como se indica en el apartado anterior, el Usuario puede, en cualquier momento, rechazar la instalación de un determinado tipo de cookies, como las cookies de publicidad y de terceros. Algunos de nuestros proveedores tienen un sistema directo para oponerse a la instalación de sus Cookies.</p>
                  <p>A continuación, encontrará una relación de proveedores y links (puede que alguno de ellos no esté en castellano, aunque encontrará fácilmente el botón de “opt-out” para oponerse):</p>
                  <ul>
                    <li><strong>Google Analytics:</strong> <a href="https://tools.google.com/dlpage/gaoptout?hl=es">https://tools.google.com/dlpage/gaoptout?hl=es</a></li>
                    <li><strong>Facebook:</strong> <a href="https://www.facebook.com/help/568137493302217">https://www.facebook.com/help/568137493302217</a></li>
                  </ul>

                  <p>Tenga en cuenta que, si en algún momento elimina las cookies de su navegador, es posible que se eliminen sus preferencias de opt-out de los anteriores proveedores, por lo que deberá volver a oponerse a su instalación.</p>
                  <p>Asimismo, tenga en cuenta que si se desactivan totalmente las Cookies, se podría impedir el uso o el acceso a algunas funcionalidades del sitio web.</p>
							
      					</div>
    				</div>
  				</div>
  				<div class="card border-light mt-2">
    				<div class="card-header text-center" id="headingSix">
                <a data-toggle="collapse" href="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
                    <h5 class="mb-0">
                      <strong>Más información</strong>
                      </h5>
                  </a>
            </div>

    				<div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
      					<div class="card-body text-justify">
        					<p>Para más información sobre el uso de las cookies o sus datos personales, puede consultar nuestra <a href="/privacidad">Política de Privacidad</a> o bien contactar con nosotros a la dirección electrónica <a href="mailto:soporte@ubrisecurity.com">soporte@ubrisecurity.com</a>.</p>							
      					</div>
    				</div>
  				</div>
	    </main>
				
	</div>
</div>

		

@endsection