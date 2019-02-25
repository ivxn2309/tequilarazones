@extends('layouts.blank')

@section('content')

	<section id="age_check">

		<div id="age_form_container" class="center-align">
			<div class="box">
				<div>
					<img class="logo" src="{{ asset('img/razones_logo.png') }}" alt="Razones Tequila">
				</div>
				<form action="{{ route('home') }}" method="post">
					@csrf
					<input type="text" name="dob" class="datepicker" placeholder="Ingresa tu fecha de nacimiento">
					<button class="btn waves-effect waves-light submit" type="submit" name="action">Entrar</button>
				</form>

				@if( isset($error) && $error )
					<div id="error-space" class="center-align">
						<h3>¡No cumples con los requisitos!</h3>
						<h4>Debes tener al menos 18 años</h4>
					</div>
				@endif
			</div>
		</div>

		<div id="image_footer" style="background-image: url({{ asset('img/Tequila_Razones_Landscape_Transparent.png') }});"></div>

	</section>

@endsection

@section('scripts')

<script type="text/javascript">
	var options = {
		format: 'mmm d, yyyy',
		yearRange: [1939, 2019],
		i18n: {
			months: ['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'],
			monthsShort: ['Ene','Feb','Mar','Abr','May','Jun','Jul','Ago','Sep','Oct','Nov','Dic'],
			weekdays: ['Domingo','Lunes','Martes','Miércoles','Jueves','Viernes','Sábado'],
			weekdaysShort: ['Dom','Lun','Mar','Mié','Jue','Vie','Sáb'],
			weekdaysAbbrev: ['D','L','M','M','J','V','S'],
			done: 'Aceptar',
			cancel: 'Cancelar',
			clear: 'Limpiar'
		}
	};

	document.addEventListener('DOMContentLoaded', function() {
		var elems = document.querySelectorAll('.datepicker');
		var instances = M.Datepicker.init(elems, options);
	});
</script>

@endsection
