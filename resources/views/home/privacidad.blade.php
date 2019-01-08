@extends('layouts.master')

@section('contenido')	

<div class="container pt-4">
	<nav aria-label="breadcrumb">
		<ol class="breadcrumb breadcrum">
		    <li class="breadcrumb-item"><a href="/">@lang('breadcrumbs.inicio')</a></li>
		    <li class="breadcrumb-item active" aria-current="page">@lang('breadcrumbs.politica')</li>
		</ol>
	</nav>
	<br>

	<h2>Política de privacidad</h2>
	<br>
	<div class="row justify-content-center">
	    <main class="col-lg-12 contenido-principal">
	    	<div class="accordion" id="accordionExample">
  				<div class="card border-light">
    				<div class="card-header" id="headingOne">
      					<h5 class="mb-0">
        					<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          						<strong>Introducción</strong>
        					</button>
      					</h5>
    				</div>

    				<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      					<div class="card-body text-justify">
        					<p>UBRISECURITY S.L. (en adelante, UBRISECURITY), entidad mercantil de nacionalidad española, con domicilio en Avenida de España númeor 4, 11600, Ubrique (Cádiz), y C.I.F. Nº B72349830, inscrita en el Registro Mercantil de Cádiz, Folio 131, Tomo 2.271, Hoja  CA-5.313, trata los datos personales de sus clientes que acceden a la página web www.ubrisecurity.com conforme a lo dispuesto en la presente política de privacidad.</p>
							<p>La presente política de privacidad explica como UBRISECURITY trata sus datos, la forma de captarlos, así como los derechos en materia de protección de datos de carácter personal que le corresponden conforme al Reglamento Europeo de Protección de Datos (Reglamento UE 2016/679).</p>
      					</div>
    				</div>
  				</div>
  				<div class="card border-light mt-2">
    				<div class="card-header" id="headingTwo">
      					<h5 class="mb-0">
        					<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          						<strong>Datos que se solicitan</strong>
        					</button>
      					</h5>
    				</div>

    				<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      					<div class="card-body text-justify">
        					<p>Mientras se utiliza nuestra página web, pueden captarse distintas categorías de datos personales, que se corresponden principalmente con las siguientes:</p>
							<ul>
								<li>Tarjeta de crédito o medio de pago proporcionado a UBRISECURITY</li>
								<li>Datos relativos a la identidad del usuario/cliente (nombre y apellidos, dirección de correo electrónico, etc.)</li>
								<li>Datos relativos a su compra y relacionados con los productos adquiridos (fecha de adquisición, tipo, registros de control, etc.)</li>
							</ul>
							<p>Dichos datos se captan directamente de nuestros clientes y usuarios, de forma voluntaria. Las datos obligatorios se identifican expresamente en los formularios de captación de datos con un asterisco. En caso de no proporcionarlos, no podemos garantizar la prestación del servicio por parte de UBRISECURITY.</p>
      					</div>
    				</div>
  				</div>
  				<div class="card border-light mt-2">
    				<div class="card-header" id="headingThree">
      					<h5 class="mb-0">
        					<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          						<strong>Finalidad de los datos</strong>
        					</button>
      					</h5>
    				</div>

    				<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      					<div class="card-body text-justify">
        					<p>UBRISECURITY gestiona sus datos para facilitar su compra, conocer mejor sus clientes y mejorar y personalizar nuestros servicios, así como asegurar:</p>
							<ul>
								<li>la gestión y seguimiento de pedidos.</li>

								<li>la gestión del registro en línea de sus maletas.</li>

								<li>la gestión del servicio post-venta.</li>

								<li>los informes estadísticos de acceso a nuestra web.</li>

								<li>la medición de la calidad, la satisfacción y la habitualidad en el uso de nuestra página web o servicios prestados por UBRISECURITY.</li>

								<li>la inscripción a la newsletter y el envío de otras comunicaciones comerciales electrónicas.</li>
							 y, entre otros,
								<li>la gestión y seguimiento de las actividades de contratación y gestión de candidaturas.</li>
							</ul>
							<p>En caso de que desee suscribirse a nuestra newsletter, UBRISECURITY utilizará su dirección de correo electrónico para poder remitirla. El usuario tendrá la posibilidad de remitir a UBRISECURITY datos adicionales como por ejemplo una dirección postal o un número de teléfono.</p>
							<p>UBRISECURITY ofrecerá siempre, a todos sus clientes, una forma de cancelar la suscripción indicada. Para ello, puede seguir las instrucciones incluidas en cada boletín informativo o por correo electrónico a <a href="mailto:soporte@ubrisecurity.com">soporte@ubrisecurity.com</a></p>
							<p>En caso de que el cliente o usuario utilice el servicio de referencias de UBRISECURITY para informar a amigos suyos sobre productos disponibles en nuestra página web, le solicitaremos el nombre de su amigo, así como su dirección de correo electrónico. UBRISECURITY enviará automáticamente un correo electrónico invitándole a visitar la página web. En ningún caso los datos del amigo serán conservados por UBRISECURITY, siendo utilizados únicamente una vez para el envío de la comunicación solicitada por el usuario o cliente. En caso que cualquier amigo desee garantizar la supresión de los datos o tenga cualquier duda sobre el tratamiento de los mismos, deberá ponerse en contacto con <a href="mailto:soporte@ubrisecurity.com">soporte@ubrisecurity.com</a></p>
      					</div>
    				</div>
  				</div>
  				<div class="card border-light mt-2">
    				<div class="card-header" id="headingFour">
      					<h5 class="mb-0">
        					<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
          						<strong>Comunicación de datos personales</strong>
        					</button>
      					</h5>
    				</div>

    				<div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
      					<div class="card-body text-justify">
        					<p>Sus datos personales pueden compartirse, principalmente, con: </p>
							<ul>
								<li>Encargados del tratamiento, entendidos como aquellos proveedores que prestan un servicio a UBRISECURITY, y que tratan los datos personales en su nombre y bajo sus instrucciones.</li>
							</ul>
							<p>Asimismo, sus datos podrán ser comunicados a cualquier autoridad competente, especialmente a la autoridad judicial, policial o administrativa.</p>
							<p>UBRISECURITY no comparte, vende o alquila los datos de carácter personal de sus clientes o usuarios de ninguna otra forma que no sea la descrita anteriormente o que, de cualquier otra forma, haya podido informar en distintos momentos.</p>
      					</div>
    				</div>
  				</div>
  				<div class="card border-light mt-2">
    				<div class="card-header" id="headingFive">
      					<h5 class="mb-0">
        					<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
          						<strong>Conservación de datos personales</strong>
        					</button>
      					</h5>
    				</div>

    				<div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
      					<div class="card-body text-justify">
        					<p>UBRISECURITY conservará los datos personales de sus clientes o usuarios mientras estos sean necesarios para la prestación de los servicios solicitados por éstos.
							Por ejemplo, en caso de crear una cuenta de usuario, ésta y los datos vinculados a la misma se conservarán hasta que el usuario la cancele, o hasta que UBRISECURITY considere, por cualquier medio disponible en cada momento, que ya no tiene interés en el mantenimiento de esta.</p>
							
      					</div>
    				</div>
  				</div>
  				<div class="card border-light mt-2">
    				<div class="card-header" id="headingSix">
      					<h5 class="mb-0">
        					<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
          						<strong>Redes Sociales</strong>
        					</button>
      					</h5>
    				</div>

    				<div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
      					<div class="card-body text-justify">
        					<p>Nuestra página web puede contener funcionalidades de redes sociales, como por el botón de Facebook para compartir contenidos o iniciar sesión. El uso de dichos botones puede suponer que la red social en cuestión capte datos personales de los usuarios, tales como la dirección IP, así como la instalación de cookies para el correcto funcionamiento de estos. Estos datos se almacenan por las redes sociales tanto en sus propios servidores u otros terceros como en la web de UBRISECURITY, conforme a lo indicado en la política de privacidad de cada una de las redes sociales o el proveedor de almacenamiento.</p>							
      					</div>
    				</div>
  				</div>
  				<div class="card border-light mt-2">
    				<div class="card-header" id="headingSeven">
      					<h5 class="mb-0">
        					<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
          						<strong>Promociones, concursos y/o juegos</strong>
        					</button>
      					</h5>
    				</div>

    				<div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordionExample">
      					<div class="card-body text-justify">
        					<p>UBRISECURITY puede invitar a los usuarios a participar en promociones, concursos o juegos (actividades promocionales) en su página web. En caso de participar, se solicitará cierta información personal para identificar a los participantes. La participación a dichas actividades promocionales es totalmente voluntaria y el usuario tiene la opción de proporcionar o no dichos datos personales.
							Generalmente se solicitarán datos identificativos, tales como el nombre y apellido, la dirección de correo electrónico, fecha de nacimiento o país, e incluso datos demográficos tales como el género, según la tipología de cada actividad promocional. UBRISECURITY utiliza esta información para poder comunicarse con los ganadores de las actividades promocionales, enviarles los premios ganados, vigilar y analizar el tráfico en la página web, personalizarla, y enviar comunicaciones comerciales electrónicas o newsletters a los participantes. UBRISECURITY puede utilizar terceros prestadores de servicios a fin de organizar y gestionar las actividades promocionales; estos terceros no podrán utilizar los datos de los participantes con ninguna otra finalidad que gestionar la actividad promocional. UBRISECURITY no comparte ninguna información personal proporcionada en el marco de una actividad promocional con ningún tercero, salvo que lo informe previa y expresamente al usuario.</p>							
      					</div>
    				</div>
  				</div>
  				<div class="card border-light mt-2">
    				<div class="card-header" id="headingEight">
      					<h5 class="mb-0">
        					<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
          						<strong>Derechos</strong>
        					</button>
      					</h5>
    				</div>

    				<div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordionExample">
      					<div class="card-body text-justify">
        					<p>Conforme a lo indicado en el Reglamento General de Protección de Datos (Reglamento UE 2016/679, en adelante RGPD), los usuarios y clientes tienen derecho a acceder a sus datos, oponerse al tratamiento, solicitar su rectificación o supresión, así como derecho a ejercer la portabilidad o limitar el tratamiento en cualquier momento. Asimismo, puede oponerse en cualquier momento a que sus datos sean utilizados con finalidades comerciales. En caso de que el usuario sea menor de edad y le sean solicitados datos personales (por ejemplo, para la participación en una actividad promocional), UBRISECURITY solicitará la autorización de los padres o tutores del menor.
							Para ejercitar sus derechos, puede contactar directamente con UBRISECURITY por correo electrónico a la dirección <a href="mailto:soporte@ubrisecurity.com">soporte@ubrisecurity.com</a></p>
							
							<p>A fin de garantizar la confidencialidad y la protección de sus datos personales, deberemos identificarle a fin de responder a cualquier solicitud. Para ello, se le solicitará de adjuntar o remitir copia de un documento oficial de identidad, carné de conducir o pasaporte.</p>
							<p>Si sus datos de carácter personal no son exactos, completos o actualizados, le agradeceremos que nos lo comunique al departamento de Data Privacy indicado anteriormente.</p>
							<p>Todas las solicitudes serán tratadas en el menor plazo posible de conformidad con lo establecido en la normativa vigente.</p>							
      					</div>
    				</div>
  				</div>
				<div class="card border-light mt-2">
    				<div class="card-header" id="headingNine">
      					<h5 class="mb-0">
        					<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
          						<strong>Seguridad</strong>
        					</button>
      					</h5>
    				</div>

    				<div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#accordionExample">
      					<div class="card-body text-justify">
        					<p>La seguridad de los datos personales de nuestros usuarios es muy importante para nosotros.</p>
							
							<p>Conforme a las obligaciones legales establecidas por la normativa vigente, UBRISECURITY conserva sus datos en condiciones de seguridad reforzadas y durante el plazo de tiempo proporcional a las finalidades para los que nos los comunicó.</p>
							<p>UBRISECURITY aplica estándares de seguridad para proteger los datos personales de sus clientes y usuarios, tanto durante la transmisión de éstos cuando se proporcionan, como una vez son recibidos por UBRISECURITY.</p>
							<p>Sin perjuicio de lo anterior, ningún método de transmisión por Internet, o forma de almacenamiento de la información es seguro al 100%, por lo que UBRISECURITY no puede garantizar su seguridad absoluta. En caso de tener cualquier duda en relación con la seguridad de la página web de UBRISECURITY, el usuario puede ponerse en contacto con nosotros a la dirección electrónica <a href="mailto:soporte@ubrisecurity.com">soporte@ubrisecurity.com</a></p>	
							<p>Para todas las cuestiones o quejas relativas a la política de privacidad y nuestras prácticas en el tratamiento de datos, el usuario puede contactar con nosotros a la dirección electrónica <a href="mailto:soporte@ubrisecurity.com">soporte@ubrisecurity.com</a></p>			
							<p>En caso de subcontratación total o parcial de un tratamiento de datos personales, UBRISECURITY impone a todos los subcontratistas obligaciones contractuales de seguridad y confidencialidad de los datos personales, debiéndose aplicar siempre medidas técnicas y organizacionales oportunas para la protección de los datos, así como los recursos humanos apropiados.</p>					
      					</div>
    				</div>
  				</div>
  				<div class="card border-light mt-2">
    				<div class="card-header" id="headingTen">
      					<h5 class="mb-0">
        					<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
          						<strong>Cookies</strong>
        					</button>
      					</h5>
    				</div>

    				<div id="collapseTen" class="collapse" aria-labelledby="headingTen" data-parent="#accordionExample">
      					<div class="card-body text-justify">
        					<p>La presente página web utiliza cookies para gestionar determinados aspectos técnicos y de funcionamiento de dicha página web, así como con finalidades estadísticas y analíticas, y finalidades publicitarias.</p>
							
							<p>Para más información sobre como utilizamos las Cookies, puede acceder a nuestra Política de Cookies.</p>				
      					</div>
    				</div>
  				</div>
  				<div class="card border-light mt-2">
    				<div class="card-header" id="headingEleven">
      					<h5 class="mb-0">
        					<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
          						<strong>Actualizaciones de nuestra política de privacidad</strong>
        					</button>
      					</h5>
    				</div>

    				<div id="collapseEleven" class="collapse" aria-labelledby="headingEleven" data-parent="#accordionExample">
      					<div class="card-body text-justify">
        					<p>La presente política de privacidad es susceptible de modificarse y actualizarse en cualquier momento por DELSEY, por lo que le recomendamos que la compruebe regularmente.</p>
							
							<p>La última modificación se realizó el: 04/01/2019</p>				
      					</div>
    				</div>
  				</div>
			</div>   		
	    </main>
				
	</div>
</div>

		

@endsection