<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- Mobile First :: Disable the zooming capabilities in mobile devices -->
	<meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no">

	<!-- HTML5 shiv and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>{{ config('app.name', 'Tequila Razones') }}</title>

	<!-- Scripts -->
	<script src="{{ asset('js/app.js') }}"></script>

	<!-- Fonts -->
	<link rel="dns-prefetch" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

	<!-- Styles -->
	<link href="{{ asset('lib/fa/css/all.min.css') }}" rel="stylesheet">
	<link href="{{ asset('lib/materialize/css/materialize.min.css') }}" rel="stylesheet">
	<link href="{{ asset('lib/fullpage/dist/fullpage.min.css') }}" rel="stylesheet">
	<link href="{{ asset('css/main.min.css?v=1.0.1') }}" rel="stylesheet">

	<!-- Favicon -->
	<link rel="shortcut icon" href="{{ asset('img/favicon.png?v=1.0') }}" type="image/png">
	<link rel="icon" href="{{ asset('img/favicon.png?v=1.0') }}" type="image/png">

	<!-- Browser Toolbar Color -->
	<meta name="theme-color" content="#000">

	@yield('head_script')
	@yield('head_style')
</head>
<body>
	@php
	setlocale(LC_ALL,"es_ES");
	date_default_timezone_set('America/Mexico_City');
	@endphp

	<div class="preloader">Cargando</div>

	<ul id="slide-out" class="sidenav">
		<li><a class="waves-effect" href="#_home">Inicio</a></li>
		<li><a class="waves-effect" href="#_about">¿Quiénes Somos?</a></li>
		<li><a class="waves-effect" href="#_tequila_blanco">Tequila</a></li>
		<li><a class="waves-effect" href="#_stores">¿Dónde Comprar?</a></li>
		<li><a class="waves-effect" href="#_contact">Contacto</a></li>

		<li class="contact">
			<ul class="contact-info">
				<li>
					<div class="icon">
						<i class="fas fa-envelope"></i>
					</div>
					<div class="caption">
						<a href="mailto:contacto@tequilarazones.com">contacto@tequilarazones.com</a>
					</div>
				</li>

				<li>
					<div class="icon">
						<i class="fas fa-phone-square"></i>
					</div>
					<div class="caption">
						<a href="tel:3334452301">(33) 34-45-2301</a>
					</div>
				</li>
			</ul>
		</li>
	</ul>

	<div id="app">
		<header>
			<div class="boxed">
				<div class="logo-container">
					<img src="{{ asset('img/razones_logo.png') }}" alt="Tequila Razones">
				</div>
				<div class="menu-container">
					<a href="#" data-target="slide-out" class="sidenav-trigger"><i class="fas fa-bars"></i></a>
				</div>
			</div>
		</header>
		<main>
			@yield('content')

			<footer>
				<div class="boxed large">
					<div class="info">
						<p>Tequila Razones 2019 © Todos los derechos reservados</p>
						<ul id="menu">
							<li><a href="#_home">Inicio</a></li>
							<li><a href="#_about">¿Quiénes Somos?</a></li>
							<li><a href="#_tequila_blanco">Tequila</a></li>
							<li><a href="#_stores">¿Dónde Comprar?</a></li>
							<li><a href="#_contact">Contacto</a></li>
						</ul>
					</div>
					<div class="social">
						<ul>
							<li><a href="#" target="_blank"><i class="fab fa-facebook-square"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
						</ul>
					</div>
				</div>
			</footer>
			@if(!Route::is('thanks'))
				<img class="scroll" src="{{ asset('img/scroll.png') }}" alt="scrolldown">
			@endif
		</main>
	</div>

	<script src="{{ asset('lib/jquery/jquery-3.3.1.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('lib/materialize/js/materialize.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('lib/fullpage/dist/fullpage.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('js/init.js') }}"></script>
	<script src="{{ asset('js/main.js?v=1.0.2') }}" type="text/javascript"></script>

	<script type="text/javascript">
	jQuery(function( $ ){
		$(".close-slideout, #slide-out a").on("click", function(){
			$(".sidenav").sidenav("close");
		});
	});
	</script>
	@yield('scripts')
</body>
</html>
