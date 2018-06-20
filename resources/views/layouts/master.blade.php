<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>UbriSecurity</title>

	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<script src="//code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<link type="text/css" rel="stylesheet" href="{{ asset("assets/css/style.css") }}" />
		
</head>
<body>

	<div class="page-header">
	  <a href="{{url('/')}}"><h1>Ubri<small>Security</small></h1></a>
	</div>

	<nav>
		 <div class="topnav">
			  <a class="active" href="/">Inicio</a>
			  <a href="#news">Noticias</a>
			  <a href="#contact">Contacto</a>
			  <a href="#about">Acerca de</a>
		</div> 
	</nav>

	<br><br>
	<div class="container-fluid">
		@yield('contenido')
	</div>
	<br><br>
	 <footer>
	 	<div class="footer">
	  		<p align="center">&copy; <?php echo date('Y')?></p>
	  		<p align="center">Información de contacto: <a href="mailto:ubrisecurity@ubrisecurity.com">
	  		ubrisecurity@ubrisecurity.com</a>.</p>
  		</div>
	</footer> 
</body>
</html>