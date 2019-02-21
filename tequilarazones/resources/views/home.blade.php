@extends('layouts.main')

@section('content')

	<section id="home" class="section">

		<div id="blanco" class="slide">
			<div class="vertical-cols">
				<div class="first width60" style="background-image: url('{{ asset('img/Tequila_Razones_Landscape_1.png') }}');">
					<div class="container full">
						<h2 class="right-line">Un téquila transparente y derecho<br><b>como debe ser.</b></h2>
						<div class="calltoaction right-align">
							<h3>Tequila<br>Blanco</h3>
							<a href="#_tequila_blanco" class="r_button bk_blue">Conócelo</a>
						</div>
					</div>
				</div>
				<div class="second width40 white">
					<div class="container bottle-right">
						<img class="bottle" src="{{ asset('img/TequilaRazones_Blanco.png') }}" alt="Tequila Reposado">
						<div class="shadow left"></div>
					</div>
				</div>
			</div>
		</div>

		<div id="reposado" class="slide">
			<div class="vertical-cols">
				<div class="first white width40">
					<div class="container bottle-right">
						<img class="bottle" src="{{ asset('img/TequilaRazones_Reposado.png') }}" alt="Tequila Reposado">
						<div class="shadow"></div>
					</div>
				</div>
				<div class="second width60" style="background-image: url('{{ asset('img/Tequila_Razones_Landscape_1.png') }}');">
					<div class="container full">
						<h2>Un téquila cálido, balanceado<br><b>y bien reposado</b></h2>
						<div class="calltoaction">
							<a href="#_tequila_reposado" class="r_button bk_blue">Conócelo</a>
							<h3>Tequila<br>Reposado</h3>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="anejo" class="slide white">
			<div class="background" style="background-image: url('{{ asset('img/Tequila_Razones_Texture_1.png') }}');"></div>
			<div class="vertical-cols">
				<div class="first">
					<div class="container full">
						<h2 class="right-line gray-line">Un téquila para paladares<br><b>Exigentes.</b></h2>
						<div class="calltoaction right-align">
							<h3>Tequila<br>Añejo</h3>
							<a href="#_tequila_anejo" class="r_button bk_gray">Conócelo</a>
						</div>
					</div>
				</div>
				<div class="second">
					<div class="container bottle-right">
						<img class="bottle" src="{{ asset('img/TequilaRazones_Anejo.png') }}" alt="Tequila Añejo">
						<div class="shadow left"></div>
					</div>
				</div>
			</div>
		</div>

		<div id="extra_anejo" class="slide">
			<div class="vertical-cols">
				<div class="first white">
					<div class="container bottle-right">
						<img class="bottle" src="{{ asset('img/TequilaRazones_Extra_Anejo.png') }}" alt="Tequila Extra Añejo">
						<div class="shadow"></div>
					</div>
				</div>
				<div class="second" style="background-image: url('{{ asset('img/Tequila_Razones_Barrels_1.png') }}');">
					<div class="container full">
						<h2>Este tequila es nuestra joya<br><b>más valiosa</b></h2>
						<div class="calltoaction">
							<a href="#_tequila_extra_anejo" class="r_button">Conócelo</a>
							<h3>Tequila<br>Extra Añejo</h3>
						</div>
					</div>
				</div>
			</div>
		</div>

	</section>

	<section id="about" class="section center-align">
		<div class="half-background" style="background-image: url('{{ asset('img/Tequila_Razones_Barrels_2.png') }}');"></div>
		<div class="content">
			<div class="boxed">
				<h2>¿Quiénes <span class="v_divider"></span> somos?</h2>
				<p>Hacemos nuestro tequila con la dedicación y la pasión que requieren las cosas importantes, porque sabemos que sentarse a brindar es más que solo tomar. Se trata de amistad, de disfrutar la vida y de que no falten razones para festejar.</p>
			</div>
		</div>
		<div class="agave white"><img src="{{ asset('img/TequilaRazones_Agave.png') }}" alt="Tequila Razones Agave"></div>
	</section>

	<section id="tequila_blanco" class="section tequila-section">
		<div class="content">
			<div class="row superior">
				<div class="name right">
					<img src="{{ asset('img/Tequila_Razones_icono_Blanco.png') }}" alt="Tequila Razones Blanco">
				</div>
			</div>
			<div class="row white inferior">
				<div class="description">
					<div class="box">
						<p>Un tequila que brilla por su transparencia y enriquecido con el sabor más tradicional de nuestra tierra: agave cocido y notas frutales.</p>
						<img src="{{ asset('img/Tequila_Razones_Legales.png') }}" alt="Legales">
					</div>
				</div>
				<div class="space"></div>
				<div class="features">
					<ul>
						<li>100% Agave Azul</li>
						<li>Color: Cristalino</li>
						<li>100% Agave Azul</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="half-background bk_blue"></div>
		<div class="decoration" style="background-image: url('{{ asset('img/Tequila_Razones_Figures_1.png') }}');"></div>
		<div class="bottle-presentation" style="background-image: url('{{ asset('img/Tequila_Razones_presentacion_Blanco.png') }}');"></div>
		<div class="options"><a href="#tequila_blanco_details" class="r_button modal-trigger">Ver Detalles</a></div>
		<!-- Modal Structure -->
		<div id="tequila_blanco_details" class="modal">
			<a href="#!" class="modal-close waves-effect waves-green btn-flat">&times;</a>
			<div class="modal-content">
				<h4 class="bk_blue"><img src="{{ asset('img/Tequila_Razones_icono_Blanco.png') }}" alt="Tequila Razones Blanco"></h4>
				<p>Un tequila que brilla por su transparencia y enriquecido con el sabor más tradicional de nuestra tierra: agave cocido y notas frutales.</p>
				<ul>
					<li>100% Agave Azul</li>
					<li>Color: Cristalino</li>
					<li>100% Agave Azul</li>
				</ul>
			</div>
		</div>
	</section>

	<section id="tequila_reposado" class="section tequila-section">
		<div class="content">
			<div class="row superior">
				<div class="name">
					<img src="{{ asset('img/Tequila_Razones_icono_Reposado.png') }}" alt="Tequila Razones Reposado">
				</div>
			</div>
			<div class="row white inferior">
				<div class="description">
					<div class="box">
						<p><b>Ocho meses</b> en barrica de roble francés convierten a este tequila en un acompañante excepcional de cualquier celebración.</p>
						<p>Al probarlo no pasarán inadvertidos su aroma y sabor a roble, así como un brillante color ámbar.</p>
						<img src="{{ asset('img/Tequila_Razones_Legales.png') }}" alt="Legales">
					</div>
				</div>
				<div class="space"></div>
				<div class="features">
					<ul>
						<li>100% Agave Azul</li>
						<li>Tiempo de maduración: <b>8 meses</b></li>
						<li>Barrica de maduración: <b>Roble Francés</b></li>
						<li>Color: <b>Ámbar claro y brillante</b></li>
						<li>Sabor: <b>Roble</b></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="half-background bk_turquoise"></div>
		<div class="decoration right" style="background-image: url('{{ asset('img/Tequila_Razones_Figures_2.png') }}');"></div>
		<div class="bottle-presentation" style="background-image: url('{{ asset('img/Tequila_Razones_presentacion_Reposado.png') }}');"></div>
		<div class="options"><a href="#tequila_reposado_details" class="r_button modal-trigger">Ver Detalles</a></div>
		<!-- Modal Structure -->
		<div id="tequila_reposado_details" class="modal">
			<a href="#!" class="modal-close waves-effect waves-green btn-flat">&times;</a>
			<div class="modal-content">
				<h4 class="bk_turquoise"><img src="{{ asset('img/Tequila_Razones_icono_Reposado.png') }}" alt="Tequila Razones Reposado"></h4>
				<p><b>Ocho meses</b> en barrica de roble francés convierten a este tequila en un acompañante excepcional de cualquier celebración.</p>
				<p>Al probarlo no pasarán inadvertidos su aroma y sabor a roble, así como un brillante colo ámbar.</p>
				<ul>
					<li>100% Agave Azul</li>
					<li>Tiempo de maduración: <b>8 meses</b></li>
					<li>Barrica de maduración: <b>Roble Francés</b></li>
					<li>Color: <b>Ámbar claro y brillante</b></li>
					<li>Sabor: <b>Roble</b></li>
				</ul>
			</div>
		</div>
	</section>

	<section id="tequila_anejo" class="section tequila-section">
		<div class="content">
			<div class="row superior">
				<div class="name right">
					<img src="{{ asset('img/Tequila_Razones_icono_Anejo.png') }}" alt="Tequila Razones Anejo">
				</div>
			</div>
			<div class="row white inferior">
				<div class="description">
					<div class="box">
						<p>Nuestro <b>añejo</b> tiene el brillo del oro y la elegancia de una buena madera. Añejado durante <b>18 meses</b> en barricas de roble blanco francés, le otorga aromas y sabores intensos y equilibrados.</p>
						<img src="{{ asset('img/Tequila_Razones_Legales.png') }}" alt="Legales">
					</div>
				</div>
				<div class="space"></div>
				<div class="features">
					<ul>
						<li>100% Agave Azul</li>
						<li>Tiempo de maduración: <b>18 meses</b></li>
						<li>Barrica de maduración: <b>Roble Blanco Francés</b></li>
						<li>Color: <b>Oro</b></li>
						<li>Sabor: <b>Roble</b></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="half-background bk_gray"></div>
		<div class="decoration left" style="background-image: url('{{ asset('img/Tequila_Razones_Figures_3.png') }}');"></div>
		<div class="bottle-presentation" style="background-image: url('{{ asset('img/Tequila_Razones_presentacion_Anejo.png') }}');"></div>
		<div class="options"><a href="#tequila_anejo_details" class="r_button modal-trigger">Ver Detalles</a></div>
		<!-- Modal Structure -->
		<div id="tequila_anejo_details" class="modal">
			<a href="#!" class="modal-close waves-effect waves-green btn-flat">&times;</a>
			<div class="modal-content">
				<h4 class="bk_turquoise"><img src="{{ asset('img/Tequila_Razones_icono_Anejo.png') }}" alt="Tequila Razones Anejo"></h4>
				<p>Nuestro <b>añejo</b> tiene el brillo del oro y la elegancia de una buena madera. Añejado durante <b>18 meses</b> en barricas de roble blanco francés, le otorga aromas y sabores intensos y equilibrados.</p>
				<ul>
					<li>100% Agave Azul</li>
					<li>Tiempo de maduración: <b>18 meses</b></li>
					<li>Barrica de maduración: <b>Roble Blanco Francés</b></li>
					<li>Color: <b>Oro</b></li>
					<li>Sabor: <b>Roble</b></li>
				</ul>
			</div>
		</div>
	</section>

	<section id="tequila_extra_anejo" class="section tequila-section">
		<div class="content">
			<div class="row superior">
				<div class="name left">
					<img src="{{ asset('img/Tequila_Razones_icono_ExtraAnejo.png') }}" alt="Tequila Razones ExtraAnejo">
				</div>
			</div>
			<div class="row white inferior">
				<div class="description">
					<div class="box">
						<p>La paciencia premia y nuestro <b>extra añejo</b> es un ejemplo perfecto: <b>48 meses</b> en barricas de roble blanco americano dan como resultado un excepcional tequila, enriquecido con el sabor propio de las maderas y ligeros toques de cacao.</p>
						<img src="{{ asset('img/Tequila_Razones_Legales.png') }}" alt="Legales">
					</div>
				</div>
				<div class="space"></div>
				<div class="features gold">
					<ul>
						<li>100% Agave Azul</li>
						<li>Tiempo de maduración: <b>48 meses</b></li>
						<li>Barrica de maduración: <b>Roble Blanco Americano</b></li>
						<li>Color: <b>Ámbar Oscuro</b></li>
						<li>Sabor: <b>Roble y Cacao</b></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="half-background"></div>
		<div class="decoration right" style="background-image: url('{{ asset('img/Tequila_Razones_Figures_4.png') }}');"></div>
		<div class="bottle-presentation" style="background-image: url('{{ asset('img/Tequila_Razones_presentacion_ExtraAnejo.png') }}');"></div>
		<div class="options"><a href="#tequila_extra_anejo_details" class="r_button modal-trigger">Ver Detalles</a></div>
		<!-- Modal Structure -->
		<div id="tequila_extra_anejo_details" class="modal">
			<a href="#!" class="modal-close waves-effect waves-green btn-flat">&times;</a>
			<div class="modal-content">
				<h4 class="bk_turquoise"><img src="{{ asset('img/Tequila_Razones_icono_ExtraAnejo.png') }}" alt="Tequila Razones ExtraAnejo"></h4>
				<p>La paciencia premia y nuestro <b>extra añejo</b> es un ejemplo perfecto: <b>48 meses</b> en barricas de roble blanco americano dan como resultado un excepcional tequila, enriquecido con el saborpropio de las maderas y ligeros toques de cacao.</p>
				<ul>
					<li>100% Agave Azul</li>
					<li>Tiempo de maduración: <b>48 meses</b></li>
					<li>Barrica de maduración: <b>Roble Blanco Americano</b></li>
					<li>Color: <b>Ámbar Oscuro</b></li>
					<li>Sabor: <b>Roble y Cacao</b></li>
				</ul>
			</div>
		</div>
	</section>

	{{--
	<section id="stores" class="section" style="background-image: url('{{ asset('img/TequilaRazones_Landscape_3.jpg') }}');">
		¿Dónde Comprar?
	</section>
	--}}

	<section id="contact" class="section">
		<div class="row main-row">
			<div class="form-contact-container">
				<h2>Estamos aquí para ti,<br><b>Nos encantaría saber tu opinión</b></h2>
				<div class="subtitle">Compártenos cualquier duda, sugerencia o pensamiento.</div>
				<form id="contact-form" action="{{ route('contact_form_sender') }}" method="post">
					@csrf
					<div class="col s12 m6 l6">
						<div class="input-field">
							<input type="text" id="name" name="name">
							<label for="name">Nombre*</label>
							<div id="name-error" class="error-field"></div>
						</div>
					</div>

					<div class="col s12 m6 l6">
						<div class="input-field">
							<input type="text" id="email" name="email">
							<label for="email">Email*</label>
							<div id="email-error" class="error-field"></div>
						</div>
					</div>

					<div class="col s12 m12 l12">
						<div class="input-field">
							<textarea id="message" name="message" class="materialize-textarea"></textarea>
							<label for="message">Mensaje*</label>
							<div id="message-error" class="error-field"></div>
						</div>
					</div>

					<div class="row invert-mobile">
						<div class="contact-info-container col s6 m7 l8">
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
										<a href="tel:3320868058">(33) 2086 8058</a>
									</div>
								</li>

								<li>
									<div class="icon">
										<i class="fas fa-map-marker-alt"></i>
									</div>
									<div class="caption">
										KM. 39 Carretera Guadalajara a Nogales C.P. 45380. Amatitán, Jalisco, México.
									</div>
								</li>
							</ul>
						</div>
						<div class="col s6 m5 l4 right-align">
							<button type="submit" name="submit" class="r_button bk_secondary">Enviar</button>
						</div>
					</div>
				</form>
			</div>
			<div class="background" style="background-image: url('{{ asset('img/TequilaRazones_Landscape_3.jpg') }}');"></div>
		</div>
	</section>

	<section id="mfooter" class="section">
		<div class="container center-align">
			<div class="logo-container">
				<img src="{{ asset('img/razones_logo.png') }}" alt="Tequila Razones">
			</div>
			<div class="info">
				<p>Tequila Razones<br>2019 © Todos los derechos reservados</p>
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
	</section>

@endsection

@section('scripts')

	<script type="text/javascript">
		var anchors = ['_home', '_about', '_tequila_blanco', '_tequila_reposado', '_tequila_anejo', '_tequila_extra_anejo', '_contact', '_mfooter'];

		var myFullpage = new fullpage('#app', {
			anchors: anchors,
			scrollingSpeed: 1700,
			normalScrollElements: '.modal .modal-content, .sidenav-overlay, #slide-out, .scroll, .scrolltop, header',
			responsiveWidth: 768,
			fixedElements: '.scroll',
			onLeave: function(origin, destination, direction){
				if(destination.index > 0) {
					$('.scrolltop').addClass('visible');
					$('header').addClass('scrolled');
				}
				else {
					$('.scrolltop').removeClass('visible');
					$('header').removeClass('scrolled');
				}

				if(screen.width > 768 && destination.index == 6) {
					$('.scroll').addClass('inverse');
				}
				else if (destination.index == 7){
					$('.scroll').addClass('inverse');
				}
				else {
					$('.scroll').removeClass('inverse');
				}

				if (origin.anchor == '_contact' && direction == 'down' && screen.width > 768) {
					return false;
				}
			}
		});

		jQuery(document).ready(function( $ ) {
			$('form#contact-form').on('submit', function() {
				console.log('Submit');
				var name = $("input#name").val();
				var email = $("input#email").val();
				var message = $("textarea#message").val();
				var ok = true;

				$('.error-field').text('');

				if(name.length < 1) {
					$( '#' + $("input#name").attr('id') + '-error' ).text('Este campo no puede quedar vacío');
					ok = false;
				}

				if(email.length < 1) {
					$( '#' + $("input#email").attr('id') + '-error' ).text('Este campo no puede quedar vacío');
					ok = false;
				}

				if(message.length < 1) {
					$( '#' + $("textarea#message").attr('id') + '-error' ).text('Este campo no puede quedar vacío');
					ok = false;
				}

				if( ok ) {
					$("form#contact-form button[type=submit]").text("Enviando");
					$("form#contact-form button[type=submit]").prop('disabled', 'true');
				}

				return ok;
			});
		});

	</script>

@endsection
