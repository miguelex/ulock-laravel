<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>UbriSecurity</title>

	<link media="all" type="text/css" rel="stylesheet" href="{{ asset("assets/css/bootstrap.min.css")}}" />
	<link media="all" type="text/css" rel="stylesheet" href="{{ asset("assets/css/font-awesome.min.css")}}" />
	<link media="all" type="text/css" rel="stylesheet" href="{{ asset("assets/css/style.css") }}" />
	<link href="https://fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
	<title>Ubrisecurity></title>	
</head>
<body>

	<header class="encabezado-sitio container">
        <div class="row justify-content-md-center">
                <a href="/">
                    <img src="{{ asset("assets/img/logo.png")}}" width="40%" class="img-fluid d-block mx-auto">
                </a>
        </div>
    </header>
	
	<div class="navegacion mt-3 py-1">
        <nav class="nav-principal navbar navbar-expand-md navbar-light bg-faded">
            <button class="navbar-toggler" type: "button" data-toggle="collapse" data-target="#nav_principal" aria-label="Mostrar navegación">
              <span class="navbar-toggler-icon"></span>
            </button>
            <a href="#" class="navbar-brand d-lg-none">Ubrisecurity</a>
            <div class="container">
                <div class="collapse navbar-collapse w-100" id="nav_principal">
                    <ul class="nav nav-justified flex-column flex-sm-row">
                        <li class="nav-item"><a href="/" class="nav-link">@lang('header.inicio')</a></li>
                        <li class="nav-item"><a href="/faq" class="nav-link">@lang('header.noticias')</a></li>
                        <li class="nav-item"><a href="/contacto" class="nav-link">@lang('header.contacto')</a></li>
                        <li class="nav-item"><a href="/acerca" class="nav-link">@lang('header.acerca')</a></li>
                    </ul>
                    <ul class="nav nav-justified ml-auto">
				        <li class="nav-item"><a href="/login" class="nav-link">@lang('header.login')</a></li>
				        <li class="nav-item"><a href="/principal" class="nav-link">@lang('header.registro')</a></li>
                        
				    </ul>
                    <nav class="banderas">
                            <ul>
                                <li><a href="{{ route('change_lang', ['lang' => 'es']) }}"><img src="{{ asset("assets/flags/ES.png")}}"></a></li>
                                <li><a href="{{ route('change_lang', ['lang' => 'en']) }}"><img src="{{ asset("assets/flags/GB.png")}}"></a></li>
                            </ul>
                        </nav>
                </div>
            </div>
        </nav>
    </div>
	

	<br><br>
	<div class="container-fluid">
		@yield('contenido')
	</div>
	<br><br>
	<footer class="footer-sitio pt-3 mt-5">
        <div class="container w-100">
            <div class="row">
               <div class="col-md-4 ">
                    <h3 class="text-uppercase  pb-4 titulo">Información</h3>
                    <div class="politica">
                        <ul>
                            <li><a href="/privacidad">Política de Privacidad</a></li>
                            <li><a href="/cookies">Política de cookies</a></li>
                            <li><a href="#">Condiciones de compra</a></li>
                            <li><a href="#">Términos de uso</a></li>
                            <li><a href="#">Condiciones de uso</a></li>
                            <li><a href="/faq">Preguntas frecuentes</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 text-center ">
                    <!-- Código para mostrar el mapa de situación de la empresa -->
                    <h3 class="text-uppercase  pb-4 titulo"></h3>
                    <p><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d565.6678415904111!2d-5.446156774082836!3d36.676892501566!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMzbCsDQwJzM3LjUiTiA1wrAyNic0Ni42Ilc!5e0!3m2!1ses!2sus!4v1544547244683" width="400" height="200" frameborder="0" style="border:0" allowfullscreen></iframe></iframe></p>
                </div>
                <div class="col-md-4 text-right ">
                    <h3 class="text-uppercase  pb-4 titulo">Contacto</h3>
                    <div class="politica">
                        <ul>
                            <li>Ubrisecurity S.L.</</li>
                            <li>Avda De España Nº 4</li>
                            <li>Ubrique, Cádiz (España)</li>
                            <li><a href="mailto:ubrisecurity@ubrisecurity.com" ><i class="fas fa fa-envelope"></i>Contacto</a></li>
                        </ul>
                    </div>
                    <nav class="sociales text-right">
                        <ul>
                            <li><a href="http://facebook.com"><span class="sr-only">Facebook</span></a></li>
                            <li><a href="http://twitter.com"><span class="sr-only">Twitter</span></a></li>
                            <li><a href="http://instagram.com"><span class="sr-only">Instagram</span></a></li>
                            <li><a href="http://pinterest.com"><span class="sr-only">Pinterest</span></a></li>
                            <li><a href="http://youtube.com"><span class="sr-only">YouTube</span></a></li>
                        </ul>
                    </nav>
                </div>
                <hr class="w-100">
                <p class="text-center copyright w-100">Ubrisecurity 2018. Todos los derechos reservados</p>
            </div>
        </div>
    </footer>

	<script src="{{ asset("assets/js/jquery.js")}}"/></script>
  	<script src="{{ asset("assets/js/bootstrap.min.js")}}"/></script>
  	<script src="{{ asset("assets/js/popper.min.js")}}"/></script>
  	<!--<script src="{{ asset("assets/js/scripts.js")}}"/></script>-->
</body>
</html>