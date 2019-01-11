@extends('layouts.master')

@section('contenido')	

<div class="container pt-4">
	<nav aria-label="breadcrumb">
		<ol class="breadcrumb breadcrum">
		    <li class="breadcrumb-item"><a href="/">@lang('breadcrumbs.inicio')</a></li>
		    <li class="breadcrumb-item active" aria-current="page">@lang('breadcrumbs.compra')</li>
		</ol>
	</nav>
	<br>

	<h2>Condiciones generales de compra</h2>
	<br>
	<div class="row justify-content-center">
	    <main class="col-lg-12 contenido-principal">
	    	<div class="accordion" id="accordionExample">
  				<div class="card border-light">
    				<div class="card-header text-center" id="headingOne">
                <a data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    <h5 class="mb-0">
                      <strong>Información legal</strong>
                      </h5>
                  </a>
            </div>

    				<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      					<div class="card-body text-justify">
        					<p>El sitio web www.ubrisecurity.com (en lo sucesivo “el sitio”), que incluye su espacio de venta en línea, es propiedad de UBRISECURITY S.L., una sociedad limitada, con domicilio social en Avenida de España número 4, 11600, Ubrique (Cádiz), y C.I.F. Nº B72349830, inscrita en el Registro Mercantil de Cádiz, Folio 131, Tomo 2.271, Hoja CA-5.313</p>

                  <p>Los datos de UBRISECURITY son:</p>
                  <ul>
                    <li>dirección: Avenida de España número 4, 11600, Ubrique (Cádiz)</li>
                    <li>dirección de correo electrónico: <a href="mailto:ubrisecurity@ubrisecurity.com">ubrisecurity@ubrisecurity.com</a></li>
                  </ul>
      					</div>
    				</div>
  				</div>
  				<div class="card border-light mt-2">
    				<div class="card-header text-center" id="headingTwo">
                <a data-toggle="collapse" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <h5 class="mb-0">
                      <strong>Preámbulo</strong>
                      </h5>
                  </a>
            </div>

    				<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      					<div class="card-body text-justify">
        					<p>El sitio tiene como objeto, la gestión de los dispositivos comrpados por el cliente y posibilitar, a través de su espacio de venta en línea, la comercialización de artículos relacionados con los mismos (denominados en lo sucesivo “los productos”) a clientes que actúan en calidad de consumidores.</p>
                  <p>El cliente declara haber obtenido toda la información necesaria en cuanto a la utilización del espacio de venta en línea y las características tanto cuantitativas como cualitativas de los productos ofrecidos a la venta en el sitio.</p>
      					</div>
    				</div>
  				</div>
  				<div class="card border-light mt-2">
    				<div class="card-header text-center" id="headingThree">
                <a data-toggle="collapse" href="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                    <h5 class="mb-0">
                      <strong>Definiciones</strong>
                      </h5>
                  </a>
            </div>

    				<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      					<div class="card-body text-justify">
        					<p>Los términos que se definen a continuación tendrán entre las partes el significado siguiente:</p>
                  <ul>
                    <li>“cliente”: cualquier persona física que actúe con fines no asociados al marco de su actividad comercial, industrial, artesanal, liberal o agrícola, y que se haya dado de alta en la web.</li>
                    <li>“espacio de cliente”: designa un espacio virtual en forma de páginas web dentro del sitio dedicadas al cliente y accesible a través de la sección “Mi cuenta”.</li>
                    <li>“espacio de venta en línea”: designa un espacio virtual en forma de páginas web dentro del sitio dedicadas a la venta de productos.</li>
                    <li>"ficha”: designa la ficha de presentación de un producto ofrecido a la venta en línea en el espacio de venta en línea.</li>
                    <li>“parte”: designa en singular indistintamente a UBRISECURITY o al cliente, y en plural a UBRISECURITY y al cliente conjuntamente.</li>
                    <li>“producto”: designa a cualquier producto puesto a la venta en el espacio de venta en línea y cuyas características se presentan en el sitio.</li>
                    <li>“sitio web”: sitio web editado por UBRISECURITY y accesible en línea en la dirección <a href="/">www.ubrisecurity.com</a>.</li>
                    <li>“usuario”: cualquier persona que utilice el sitio, ya sea un internauta o un cliente.</li>
                  </ul>
      				</div>
    				</div>
  				</div>
  				<div class="card border-light mt-2">
    				<div class="card-header text-center" id="headingFour">
                <a data-toggle="collapse" href="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                    <h5 class="mb-0">
                      <strong>Objeto</strong>
                      </h5>
                  </a>
            </div>

    				<div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
      					<div class="card-body text-justify">
        					<p>Las presentes condiciones generales tienen por objeto definir las condiciones y las modalidades de venta de los productos ofrecidos en el sitio web de UBRISECURITY. Regulan todos los pasos necesarios para realizar el pedido y su posterior seguimiento.</p>
                <p>Todas las operaciones de comercialización de los productos requieren la consulta, la comprensión y la aceptación de estas condiciones generales.</p>
                <p>Las presentes condiciones generales se aplican a cualquier compra de productos de UBRISECURITY realizada en el territorio de la Unión Europea.</p>
      					</div>
    				</div>
  				</div>
  				<div class="card border-light mt-2">
    				<div class="card-header text-center" id="headingFive">
                <a data-toggle="collapse" href="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                    <h5 class="mb-0">
                      <strong>Requisitos previos</strong>
                      </h5>
                  </a>
            </div>

    				<div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
      					<div class="card-body text-justify">
          				<p>El cliente declara y reconoce:</p>
                  <ul>
                    <li>Ser mayor de edad y tener una capacidad jurídica plena que le permite comprometerse de conformidad con estas condiciones generales.</li>
                    <li>Estar informado de que su compromiso no requiere de ninguna firma manuscrita o electrónica. La aceptación de estas condiciones generales de venta y del pedido de la cesta tiene lugar mediante un consentimiento a través de “clic”.</li>
                    <li>Que actúa como consumidor, es decir, que la adquisición de productos está exclusivamente destinada a su uso personal y privado.</li>
                  </ul>
      					</div>
    				</div>
  				</div>
  				<div class="card border-light mt-2">
    				<div class="card-header text-center" id="headingSix">
                <a data-toggle="collapse" href="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
                    <h5 class="mb-0">
                      <strong>Documentos</strong>
                      </h5>
                  </a>
            </div>

    				<div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
      					<div class="card-body text-justify">
        					<p>Los documentos contractuales son, por orden de prioridad decreciente:</p>
                  <ul>
                    <li>Los anexos país por país.</li>
                    <li>Las presentes condiciones generales de venta.</li>
                  </ul>

                  <p>En caso de contradicción entre documentos de carácter o rango diferente, se conviene expresamente entre las partes que las disposiciones incluidas en el documento de rango superior prevalecerán con respecto a las obligaciones que se encuentren en conflicto de interpretación. En caso de contradicción entre los términos de documentos del mismo orden, los documentos con fecha posterior prevalecerán sobre el resto.</p>

                  <p>Sin perjuicio de las normas de interpretación de los contratos, la aplicación de los criterios de rango se realizará según los principios siguientes:</p>
                  <ul>
                    <li>Obligación por obligación.</li>
                    <li>En su defecto, párrafo por párrafo.</li>
                    <li>En su defecto, artículo por artículo. </li>
                  </ul>					
      					</div>
    				</div>
  				</div>
          <!-- nueva tarjeta -->
          <div class="card border-light mt-2">
            <div class="card-header text-center" id="headingSeven">
                <a data-toggle="collapse" href="#collapseSeven" aria-expanded="true" aria-controls="collapseSeven">
                    <h5 class="mb-0">
                      <strong>Oponibilidad de las condiciones generales</strong>
                      </h5>
                  </a>
            </div>

            <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordionExample">
                <div class="card-body text-justify">
                  <p>Las condiciones generales son accesibles de forma permanente en el espacio de venta en línea en la sección <a href="/compras">Condiciones generales de compra</a>. El cliente puede acceder a las condiciones generales archivadas mediante solicitud por correo electrónico a la dirección: <a href="mailto:soporte@ubrisecurity.com">soporte@ubrisecurity.com</a>. </p>
                  <p>En cualquier caso, la versión de las condiciones generales de venta oponible al cliente es la aceptada por el mismo en el momento de la validación del pedido. </p>
                  <p>Los documentos que figuran en línea aceptados en el momento del pedido prevalecen sobre todas las versiones en papel de fecha anterior.</p>
                  <p>UBRISECURITY se reserva el derecho de adaptar o modificar estas condiciones generales de compra en cualquier momento. Sin embargo, las nuevas condiciones solo se aplicarán a los pedidos realizados con posterioridad a su disponibilidad en línea y aceptadas por el cliente.</p>
                  <p>El cliente dispone de la facultad de guardar e imprimir estas condiciones generales de compra utilizando las funcionalidades estándar de su navegador o su ordenador.</p>     
                </div>
            </div>
          </div>
          <!-- nueva tarjeta -->
          <div class="card border-light mt-2">
            <div class="card-header text-center" id="headingEight">
                <a data-toggle="collapse" href="#collapseEight" aria-expanded="true" aria-controls="collapseEight">
                    <h5 class="mb-0">
                      <strong>Condiciones de acceso e identificación</strong>
                      </h5>
                  </a>
            </div>

            <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordionExample">
                <div class="card-body text-justify">
                  <p style="text-decoration: underline;">Acceso al sitio</p>

                  <p>El pedido en línea requiere que el cliente entre en el sitio a través de un acceso de Internet. El acceso al sitio es libre y gratuito para cualquier usuario que disponga de acceso a Internet. Todos los costes correspondientes al acceso, ya sean gastos de equipos, programas informáticos o de acceso a Internet serán por cuenta exclusiva del usuario. El cliente es el único responsable del buen funcionamiento de su equipo informático y del acceso a Internet.</p>
                  <p>UBRISECURITY se esfuerza por facilitar un acceso de calidad y permitir a los usuarios utilizar los medios de comunicación puestos a su disposición en las mejores condiciones posibles.</p>
                  <p>Teniendo en cuenta la naturaleza y la complejidad de la red de Internet y, en particular, de sus prestaciones técnicas y tiempos de respuesta para consultar, solicitar o transferir los datos de información, UBRISECURITY hace todo lo posible, de conformidad con el estado de la técnica, para permitir el acceso y la utilización del sitio. De hecho, UBRISECURITY no puede garantizar una accesibilidad o una disponibilidad absolutas del sitio.</p>
                  <p>No obstante, UBRISECURITY se reserva el derecho, sin previo aviso ni indemnización, de cerrar temporal o definitivamente el sitio o el acceso a uno o varios servicios a distancia, en concreto, para realizar actualizaciones, operaciones de mantenimiento, modificaciones o cambios en los métodos operativos, los servidores y las horas de accesibilidad, sin que esta lista sea exhaustiva.</p>
                  <p>UBRISECURITY no se hace responsable de daños de ninguna naturaleza que se puedan derivar de estos cambios y/o de una falta de disponibilidad temporal o incluso del cierre definitivo de la totalidad o una parte del sitio o de los servicios asociados al mismo.</p>
                  <p>UBRISECURITY se reserva el derecho de completar o modificar, en cualquier momento, el sitio y los servicios que se encuentren disponibles en función de la evolución de las tecnologías.</p>
                  <p>El usuario es responsable de conocer las posibilidades de evolución de los medios informáticos y de transmisión a su disposición, con el fin de que estos medios se puedan adaptar a las evoluciones del sitio.</p>

                  <p style="text-decoration: underline;">Creación de una cuenta</p> 

                  <p>Para poder gestionar sus dispositivos y realizar la renovaciones de las suscripción  SigFox, el usuario debe crear una cuenta en la sección “Registrar”. Esta cuenta es accesible en la sección “Mi cuenta” tras la identificación mediante el nombre de usuario y una contraseña.</p>
                  <p>El procedimiento de creación de una cuenta personal se compone de los siguientes pasos:</p>
                  <ul>
                    <li>Paso 1: Creación de la cuenta: el usuario cumplimenta el formulario de inscripción rellenando los campos solicitados e indicando la dirección de correo electrónico y la contraseña que serán sus identificadores.</li>
                    <li>Paso 2: El usuario valida y acepta las condiciones generales, marcando la casilla prevista a tal efecto.</li>
                    <li>Paso 3: Una vez cumplimentados estos datos, el usuario valida el formulario. El usuario recibe un correo electrónico de confirmación en la dirección de correo electrónico facilitada. </li>
                  </ul>
              
                  <p>En este punto, el usuario se compromete a facilitar una información precisa y completa, así como a actualizarla periódicamente. En este sentido, el usuario puede proceder a la modificación de la información personal accediendo a la sección “Mi cuenta”. </p>
                  <p>El usuario debe indicar una dirección de correo electrónico válida que permitirá, en concreto, el envío de un correo electrónico de confirmación de su inscripción, así como de recuperación y modificación de la contraseña. </p>
                  <p>Es responsabilidad del usuario asegurarse de que tiene acceso exclusivo al correo electrónico que autoriza el procedimiento de modificación de la contraseña.</p>
                  <p>El usuario es el único responsable de la preservación, la conservación y el carácter confidencial de su contraseña y otros datos confidenciales que UBRISECURITY le pueda transmitir.</p>
                  <p>El usuario se compromete a adoptar todas las medidas apropiadas para garantizar esta confidencialidad.</p>
                  <p>Cualquier uso de una contraseña permite asumir una utilización de los servicios ofrecidos en el sitio por parte del usuario al que pertenece.</p>
                  <p>El usuario se compromete a modificar sin demora su contraseña en caso de comunicación a terceros o robo de la misma, restableciéndola en Internet. </p>
                  <p>Se enviará un correo electrónico al usuario para que modifique su contraseña.</p>
                  <p>El usuario es el único responsable de la utilización de su contraseña.</p>
                  <p>UBRISECURITY no será responsable en caso de uso fraudulento o abusivo o debido a una divulgación voluntaria o involuntaria a otras personas de los nombres de usuario y/o contraseñas.</p>

                  <p style="text-decoration: underline;">Suspensión y cierre de la cuenta de “usuario”</p>

                  <p>En caso de sospecha de una utilización fraudulenta de la cuenta del usuario o de una infracción de las Condiciones Generales de Compra, UBRISECURITY se reserva el derecho, sin indemnización ni previo aviso, a suspender o cerrar la cuenta del usaurio en cuestión. UBRISECURITY no será responsable de posibles pérdidas o daños derivados del incumplimiento de las obligaciones de confidencialidad que incumban al socio.</p>
                  <p>En todos los casos, el usuario es responsable de cualquier uso de su cuenta anterior al cierre de la misma.</p>    
                </div>
            </div>
          </div>
          <!-- nueva tarjeta -->
          <div class="card border-light mt-2">
            <div class="card-header text-center" id="headingNine">
                <a data-toggle="collapse" href="#collapseNine" aria-expanded="true" aria-controls="collapseNine">
                    <h5 class="mb-0">
                      <strong>Información de los productos</strong>
                      </h5>
                  </a>
            </div>

            <div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#accordionExample">
                <div class="card-body text-justify">
                  <p>Se presta la mayor atención posible a la publicación en línea de información relativa a las características esenciales de los productos vendidos en el sitio, los precios de los productos vendidos en el sitio, las garantías y los servicios posventa, los medios de pago, las modalidades de pago y entrega, las restricciones de entrega, el periodo en que los repuestos necesarios para el uso de los bienes están disponibles en el mercado y la posibilidad de recurrir a un procedimiento de mediación de litigios en materia de consumo, previamente a la realización del pedido.</p>
                  <p>Las características esenciales de los productos, los precios y los plazos de entrega se presentan en la ficha de cada producto. </p>    
                </div>
            </div>
          </div>
          <!-- nueva tarjeta -->
          <div class="card border-light mt-2">
            <div class="card-header text-center" id="headingTen">
                <a data-toggle="collapse" href="#collapseTen" aria-expanded="true" aria-controls="collapseTen">
                    <h5 class="mb-0">
                      <strong>Proceso de pedido</strong>
                      </h5>
                  </a>
            </div>

            <div id="collapseTen" class="collapse" aria-labelledby="headingTen" data-parent="#accordionExample">
                <div class="card-body text-justify">
                  <p>Para llevar a cabo la renovación de la suscripción a SigFox el cliente, en primer lugar, seleccionará el dispositivo sobre el cual quiere ejecutar la renovación y pulsara sobre el botón que da inicio al proceso de renovación.</p>
                  <p>En la siguiente pantalla, el cliente seleccionara el tipo de suscripción, el método de pago, los detalles de facturación y aceptará las condiciones de compra. </p>
                  <p>A partir de ese momento, UBRISECURITY realizará las gestiones oportunas para ejecutar la orden de renovación, notificándosela al cliente una vez esta se haya llevado a cabo vía correo electrónico y notificación en su cuenta. </p>
                  <p>Ningún pedido se tendrá en cuenta sin la aceptación del pago. El rechazo del pago implicará la anulación del pedido.</p>   
                </div>
            </div>
          </div>
          <!-- nueva tarjeta -->
          <div class="card border-light mt-2">
            <div class="card-header text-center" id="headingEleven">
                <a data-toggle="collapse" href="#collapseEleven" aria-expanded="true" aria-controls="collapseEleven">
                    <h5 class="mb-0">
                      <strong>Precio</strong>
                      </h5>
                  </a>
            </div>

            <div id="collapseEleven" class="collapse" aria-labelledby="headingEleven" data-parent="#accordionExample">
                <div class="card-body text-justify">
                  <p>Los precios correspondientes al pedido de los productos ofrecidos en el sitio se indican en el espacio de venta en línea provisto a tal efecto, en la ficha de cada producto y ofrecido para su venta en línea.</p>
                  <p>Los precios se muestran en euros con todos los impuestos incluidos (imp. incl.).</p>
                  <p>Únicamente son válidos durante el periodo en que sean accesibles por vía electrónica en tiempo real en el espacio de venta del producto en cuestión ofrecido para su venta en línea.</p>
                  <p>Pueden variar en función de varios criterios y, en concreto, en caso de operaciones comerciales.</p>
                  <p>El valor de la operación será necesariamente el valor en la fecha y la hora del pedido realizado por el cliente, reconociendo las partes que no disponen de ningún recurso en caso de disminución o aumento posteriores al pedido.</p>
                  <p>En los precios mostrados se incluye el IVA aplicable vigente en el día del pedido y cualquier cambio del tipo aplicable del IVA se repercutirá automáticamente en los precios de los productos ofrecidos para su venta.</p>
                  <p>Antes de la confirmación del pedido por parte del cliente, se indicará el importe total de la compra (precio con imp. incl. + posibles gastos de entrega) en euros.  </p> 
                </div>
            </div>
          </div>
          <!-- nueva tarjeta -->
          <div class="card border-light mt-2">
            <div class="card-header text-center" id="headingTwelve">
                <a data-toggle="collapse" href="#collapseTwelve" aria-expanded="true" aria-controls="collapseTwelve">
                    <h5 class="mb-0">
                      <strong>Pago</strong>
                      </h5>
                  </a>
            </div>

            <div id="collapseTwelve" class="collapse" aria-labelledby="headingTwelve" data-parent="#accordionExample">
                <div class="card-body text-justify">
                  <p>Para abonar el pedido, el cliente dispone, a su elección, de las formas de pago mencionadas en la interfaz de pedido.</p>
                  <p>Se aceptan los medios de pago siguientes: </p>
                  <ul>
                    <li>Tarjetas Visa</li>
                    <li>Taejetas Mastercard</li>
                  </ul>
                </div>
            </div>
          </div>
          <!-- nueva tarjeta -->
          <div class="card border-light mt-2">
            <div class="card-header text-center" id="headingtherteen">
                <a data-toggle="collapse" href="#collapsetherteen" aria-expanded="true" aria-controls="collapsetherteen">
                    <h5 class="mb-0">
                      <strong>Informática y libertades</strong>
                      </h5>
                  </a>
            </div>

            <div id="collapsetherteen" class="collapse" aria-labelledby="headingtherteen" data-parent="#accordionExample">
                <div class="card-body text-justify">
                  <p>En las visitas al sitio web o en los pedidos realizados por un cliente, se podrá recopilar información del mismo a través de cuestionarios, formularios, etc.</p>
                  <p>Se informa al usuario de que UBRISECURITY, como responsable del tratamiento, aplica un tratamiento de datos de carácter personal con los siguientes objetivos:</p> 
                  <ul>
                    <li>La gestión y el seguimiento de la creación de cuentas y la relación con los clientes de una manera general.</li>
                    <li>La gestión y el seguimiento de los pedidos, pagos, entregas, envíos y devoluciones, así como del servicio al cliente/servicio posventa.</li>
                    <li>La gestión de las cuentas de los clientes.</li>
                    <li>La gestión comercial y el marketing.</li>
                    <li>La gestión de las estadísticas de los clientes.</li>
                    <li>La evaluación de la calidad y la satisfacción.</li>
                    <li>La prospección comercial y la personalización de las ofertas.</li>
                    <li>La relación con los clientes en las redes sociales.</li>
                  </ul>

                  <p>Estos datos se facilitan a UBRISECURITY, así como a los posibles subcontratistas para los fines mencionados, a las entidades del grupo al que UBRISECURITY pertenece con fines de gestión de la relación comercial, la gestión de prospección comercial y la orientación de marketing, así como a sus socios contractuales y comerciales con fines de marketing. </p>
                  <p>Se informa al cliente en cada formulario de la recopilación de datos de carácter personal, así como del carácter obligatorio o facultativo de las respuestas mediante la presencia de un asterisco. En el caso de no facilitarse información de carácter obligatorio, el pedido no se podría tramitar o se podría retrasar, y la información comercial no se podría dirigir al cliente.</p>
                  <p>De conformidad con las disposiciones relativas a los datos personales, el cliente dispone de un derecho de acceso, consulta, modificación, rectificación y supresión de sus datos que le permite, cuando proceda, que se corrijan, completen, actualicen, bloqueen o supriman los datos personales que sean inexactos, incompletos, equívocos, obsoletos o de los que se prohíba su recopilación, utilización, comunicación o conservación.</p>
                  <p>El cliente dispone también de un derecho de oposición al tratamiento de sus datos por motivos legítimos, así como un derecho de oposición a que sus datos se utilicen con fines de prospección comercial, en concreto.</p>
                  <p>Estos derechos se ejercen mediante correo electrónico, acompañado de la copia de un documento de identidad firmado, en la dirección de correo electrónico <a href="mailto:soporte@ubrisecurity.com">soporte@ubrisecurity.com</a>.</p>
                  <p>En el caso de que el cliente lo haya aceptado en la creación de su cuenta, se le podrán enviar ofertas especiales o correos electrónicos promocionales ofreciéndole novedades, propuestas exclusivas, etc.</p>
                  <p>El cliente puede solicitar en cualquier momento que no se le envíen correos electrónicos haciendo clic en el enlace previsto a tal efecto e incluido a pie de página en cada uno de los correos electrónicos que se le envíen.</p>

                </div>
            </div>
          </div>
          <!-- nueva tarjeta -->
          <div class="card border-light mt-2">
            <div class="card-header text-center" id="headingFourteen">
                <a data-toggle="collapse" href="#collapseFourteen" aria-expanded="true" aria-controls="collapseFourteen">
                    <h5 class="mb-0">
                      <strong>Propiedad</strong>
                      </h5>
                  </a>
            </div>

            <div id="collapseFourteen" class="collapse" aria-labelledby="headingFourteen" data-parent="#accordionExample">
                <div class="card-body text-justify">
                  <p style="text-decoration: underline;">Propiedad intelectual</p>

                  <p>Las presentes condiciones no implican la cesión de ningún tipo de derechos de propiedad intelectual sobre los elementos pertenecientes a UBRISECURITY en beneficio del cliente.</p>
                  <p>El contenido del sitio y la estructura general, así como las marcas, los diseños, los modelos, las imágenes animadas o no, los textos, las fotografías, los logotipos, los gráficos, el software y los programas, los motores de búsqueda, las bases de datos, los sonidos, los vídeos, los nombres de dominios, el diseño, los conocimientos técnicos de UBRISECURITY y el resto de elementos que componen el sitio o cualquier otra información que figure en el mismo, sin que esta lista sea exhaustiva, son propiedad exclusiva de UBRISECURITY o de socios o terceros que le han concedido una licencia y están protegidos, en concreto, por los derechos de propiedad intelectual que se le reconocen o reconocerán según la legislación vigente.</p>
                  <p>La reproducción y/o representación, total o parcial de alguno de estos elementos, sin la autorización expresa de UBRISECURITY, están prohibidas y constituirían en particular, pero no exclusivamente, una falsificación sancionada por las disposiciones vigentes.</p>
                  <p>Del mismo modo, la totalidad de marcas, signos distintivos, planos, estudios, proyectos, modos de empleo o de montaje, fotografías, documentos técnicos y comerciales, y modelos de UBRISECURITY vinculados, en concreto, a los productos, al igual que todos los programas informáticos, aplicativos, códigos y datos relacionados, siguen siendo exclusivamente de su propiedad.</p>
                  <p>En consecuencia, se prohíbe al cliente cualquier actuación y acto que sean susceptibles de afectar directa o indirectamente los derechos de propiedad de UBRISECURITY.</p>
                  <p>El cliente acepta, en concreto, respetar la totalidad del contrato de licencia de usuario final aplicable a los productos pedidos.</p>
                  <p>Además, se prohíbe al cliente que borre, retire u oculte de alguna manera las marcas de propiedad de UBRISECURITY o de sus licenciadores en el producto, o que destaque ostensiblemente tales marcas de propiedad, las etiquetas o las marcas en copias del producto.</p>
                  <p>Este artículo sobrevivirá al término de las presentes condiciones, e independientemente de la razón o el motivo, hasta el final de su objeto particular.</p>

                  <p style="text-decoration: underline;">Métodos y conocimientos técnicos</p>

                  <p>UBRISECURITY conservará la propiedad plena y exclusiva de los métodos, los conocimientos técnicos y las herramientas que le pertenezcan y hayan servido para ejecutar las presentes cláusulas contractuales.</p>
                  <p>Esta cláusula de Propiedad sobrevivirá al término de las presentes condiciones, e independientemente de la razón o el motivo, hasta el final de su objeto particular.</p>


                </div>
            </div>
          </div>
          <!-- nueva tarjeta -->
          <div class="card border-light mt-2">
            <div class="card-header text-center" id="headingFifteen">
                <a data-toggle="collapse" href="#collapseFifteen" aria-expanded="true" aria-controls="collapseFifteen">
                    <h5 class="mb-0">
                      <strong>Disposiciones generales</strong>
                      </h5>
                  </a>
            </div>

            <div id="collapseFifteen" class="collapse" aria-labelledby="headingFifteen" data-parent="#accordionExample">
                <div class="card-body text-justify">
                  <p style="text-decoration: underline;">Buena fe </p>

                  <p>Las partes acuerdan cumplir sus obligaciones con total buena fe.</p>

                  <p style="text-decoration: underline;">Sinceridad</p>

                  <p>Las partes declaran que son sinceros los presentes compromisos.</p>
                  <p>A este respecto, declaran no disponer de ningún elemento, según su conocimiento, que de haber sido comunicado habría modificado el consentimiento de la otra parte.</p>

                  <p style="text-decoration: underline;">Integralidad</p>

                  <p>Las presentes condiciones generales de venta expresan la integralidad de las obligaciones de las partes.</p>
                  <p>Ninguna condición general ni específica de una de las partes se podrá integrar en el presente documento contractual.</p>

                  <p style="text-decoration: underline;">Títulos</p>

                  <p>En caso de dificultades de interpretación derivadas de una contradicción entre cualquiera de los títulos que encabezan los artículos de las presentes condiciones y cualquiera de los artículos, los títulos se declararán inexistentes.</p>

                  <p style="text-decoration: underline;">Nulidad</p>

                  <p>Si una o más cláusulas de las presentes condiciones generales se consideran no válidas o se declaran como tales en virtud de una ley o un reglamento, o como resultado de la sentencia final de un tribunal competente, el resto de cláusulas mantendrá toda su fuerza y alcance.</p>

                  <p style="text-decoration: underline;">Tolerancia</p>

                  <p>Las partes acuerdan mutuamente que el hecho de que una parte tolere una situación no otorga a la otra parte derechos adquiridos.</p>
                  <p>Además, esta tolerancia no se podrá interpretar como una renuncia a hacer valer los derechos en cuestión.</p>

                  <p style="text-decoration: underline;">Cesión</p>

                  <p>El cliente acepta que UBRISECURITY puede ceder los derechos y obligaciones resultantes de las presentes condiciones a un tercero en caso de fusión o adquisición, en concreto.</p>

                  <p style="text-decoration: underline;">Independencia de las partes</p>

                  <p>Ninguna de las partes puede asumir un compromiso en nombre y por cuenta de la otra parte.</p>
                  <p>Además, cada una de las partes es la única responsable de sus actos, alegaciones, compromisos, prestaciones y productos, así como de su personal.</p>

                  <p style="text-decoration: underline;">Subcontratación</p>

                  <p>El cliente autoriza a UBRISECURITY a que intervengan todos los subcontratistas de su elección en el marco de la ejecución de las presentes condiciones y las prestaciones. En este caso, el cliente acepta que UBRISECURITY divulgue a sus subcontratistas la información necesaria para la ejecución de las presentes condiciones.</p>

                </div>
            </div>
          </div>
          <!-- nueva tarjeta -->
          <div class="card border-light mt-2">
            <div class="card-header text-center" id="headingSixteen">
                <a data-toggle="collapse" href="#collapseSixteen" aria-expanded="true" aria-controls="collapseSixteen">
                    <h5 class="mb-0">
                      <strong>Responsabilidad</strong>
                      </h5>
                  </a>
            </div>

            <div id="collapseSixteen" class="collapse" aria-labelledby="headingSixteen" data-parent="#accordionExample">
                <div class="card-body text-justify">
                  <p>UBRISECURITY declina toda responsabilidad relativa a posibles interrupciones o errores en el sitio. UBRISECURITY no ofrece ninguna garantía con respecto a la totalidad o parte del sitio, en concreto, relativa a posibles daños directos o indirectos derivados de la utilización del sitio. En el sitio se pueden mencionar enlaces a otras fuentes externas. Dado que UBRISECURITY no puede controlar estas fuentes externas, no se le puede considerar responsable de sus contenidos, productos, servicios, anuncios publicitarios o elementos disponibles. UBRISECURITY invita al usuario a conocer las condiciones de utilización que estarán disponibles en tales fuentes externas.</p>
                  <p>UBRISECURITY es responsable de pleno derecho, frente al cliente en calidad de consumidor, del correcto cumplimiento de las obligaciones derivadas de las presentes condiciones. No obstante, no se puede considerar a UBRISECURITY responsable del incumplimiento de las presentes condiciones debido a un caso de fuerza mayor. </p>
                  <p>Del mismo modo, no se podrá considerar a UBRISECURITY responsable cuando una ejecución o falta de ejecución del contrato se pueda atribuir a una actuación imprevisible e insuperable de un tercero en el contrato o a una actuación del cliente.</p>
                  <p>Este artículo sobrevivirá al término de las presentes condiciones, e independientemente de la razón o el motivo.</p>
                </div>
            </div>
          </div>
          <!-- nueva tarjeta -->
          <div class="card border-light mt-2">
            <div class="card-header text-center" id="headingSeventeen">
                <a data-toggle="collapse" href="#collapseSeventeen" aria-expanded="true" aria-controls="collapseSeventeen">
                    <h5 class="mb-0">
                      <strong>Prueba y convenio de prueba</strong>
                      </h5>
                  </a>
            </div>

            <div id="collapseSeventeen" class="collapse" aria-labelledby="headingSeventeen" data-parent="#accordionExample">
                <div class="card-body text-justify">
                  <p>La aceptación en línea de las condiciones generales por vía electrónica tiene entre las partes el mismo valor probatorio que el acuerdo sobre papel.</p>
                  <p>Los registros informatizados conservados en los sistemas informáticos de UBRISECURITY se conservarán en condiciones razonables de seguridad y se considerarán como pruebas de las comunicaciones, los pedidos y los pagos realizados entre las partes. Permanecerán en vigor hasta que se demuestre lo contrario.</p>
                  <p>UBRISECURITY realiza el archivado de los documentos contractuales, pedidos y facturas, que se pueden presentar como prueba.</p>
                  <p>Las disposiciones específicas relativas al archivado por países están previstas en el anexo.</p>
            </div>
          </div>
          <!-- nueva tarjeta -->
          <div class="card border-light mt-2">
            <div class="card-header text-center" id="headingEighteen">
                <a data-toggle="collapse" href="#collapseEighteen" aria-expanded="true" aria-controls="collapseEighteen">
                    <h5 class="mb-0">
                      <strong>Prueba y convenio de prueba</strong>
                      </h5>
                  </a>
            </div>

            <div id="collapseEighteen" class="collapse" aria-labelledby="headingEighteen" data-parent="#accordionExample">
                <div class="card-body text-justify">
                  <p>La aceptación en línea de las condiciones generales por vía electrónica tiene entre las partes el mismo valor probatorio que el acuerdo sobre papel.</p>
                  <p>Los registros informatizados conservados en los sistemas informáticos de UBRISECURITY se conservarán en condiciones razonables de seguridad y se considerarán como pruebas de las comunicaciones, los pedidos y los pagos realizados entre las partes. Permanecerán en vigor hasta que se demuestre lo contrario.</p>
                  <p>UBRISECURITY realiza el archivado de los documentos contractuales, pedidos y facturas, que se pueden presentar como prueba.</p>
                  <p>Las disposiciones específicas relativas al archivado por países están previstas en el anexo.</p>
            </div>
          </div>

          <!-- nueva tarjeta -->
          <div class="card border-light mt-2">
            <div class="card-header text-center" id="headingNineteen">
                <a data-toggle="collapse" href="#collapseNineteen" aria-expanded="true" aria-controls="collapseNineteen">
                    <h5 class="mb-0">
                      <strong>Idioma</strong>
                      </h5>
                  </a>
            </div>

            <div id="collapseNineteen" class="collapse" aria-labelledby="headingNineteen" data-parent="#accordionExample">
                <div class="card-body text-justify">
                  <p>El idioma que prevalece es el español.</p>
                  <p>Si las presentes condiciones generales son objeto de una traducción en un idioma extranjero, el idioma español prevalecerá sobre cualquier traducción en el caso de conflicto, litigio, dificultad de interpretación o ejecución de las presentes condiciones y, de una manera más general, en lo que respecta a las relaciones existentes entre UBRISECURITY y el cliente.</p>
            </div>
          </div>
          <!-- nueva tarjeta -->
          <div class="card border-light mt-2">
            <div class="card-header text-center" id="headingTwenty">
                <a data-toggle="collapse" href="#collapseTwenty" aria-expanded="true" aria-controls="collapseTwenty">
                    <h5 class="mb-0">
                      <strong>Solución de litigios</strong>
                      </h5>
                  </a>
            </div>

            <div id="collapseTwenty" class="collapse" aria-labelledby="headingTwenty" data-parent="#accordionExample">
                <div class="card-body text-justify">
                  <p>UBRISECURITY informa al usuario consumidor de la posibilidad de recurrir, en caso de un conflicto relativo a las presentes condiciones generales, a un procedimiento de mediación convencional o a cualquier otro modo alternativo de solución de diferencias. </p>
                  <p>UBRISECURITY informa también al cliente de la existencia de una plataforma europea de Resolución de litigios en línea a la que se puede recurrir. El usuario puede acceder desde el enlace siguiente: <a href="http://ec.europa.eu/consumers/odr/">http://ec.europa.eu/consumers/odr/</a>.</p>
            </div>
          </div>
          <!-- nueva tarjeta -->
          <div class="card border-light mt-2">
            <div class="card-header text-center" id="headingTwentyone">
                <a data-toggle="collapse" href="#collapseTwentyone" aria-expanded="true" aria-controls="collapseTwentyone">
                    <h5 class="mb-0">
                      <strong>Derecho aplicable</strong>
                      </h5>
                  </a>
            </div>

            <div id="collapseTwentyone" class="collapse" aria-labelledby="headingTwentyone" data-parent="#accordionExample">
                <div class="card-body text-justify">
                  <p>Las presentes condiciones generales se rigen por el derecho español.</p>
                 <p> No obstante, el cliente puede invocar y exigir válidamente que se apliquen las disposiciones obligatorias previstas por el derecho del país de la Unión Europea en que resida.</p>
            </div>
          </div>
	    </main>
				
	</div>
</div>

		

@endsection