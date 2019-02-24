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
	<link href="{{ asset('css/verifyage.min.css?v=1.0.1') }}" rel="stylesheet">

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

	<div id="app">
		<main>
			@yield('content')
		</main>
	</div>

	<script src="{{ asset('lib/jquery/jquery-3.3.1.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('lib/materialize/js/materialize.min.js') }}" type="text/javascript"></script>
	<!--<script src="{{ asset('js/init.js') }}"></script>-->

	@yield('scripts')
</body>
</html>
