<!--start: Wrapper-->
<div id="wrapper">
	<!--start: Container -->
	<div class="container">
		<!--start: Row -->
		<div class="row">
			<div class="span9">
			<!-- start: Post -->
			<div class="post post-page">
				<hr>
				<div id="about" class="title">
					<h2>&iquest;Qu&eacute; es ideaStartup?</h2>
				</div>
				<div class="post-content">
					<div class="post-description">
						<p>
							<span class="dropcap dark">E</span>s el programa de desarrollo emprendedores tecnol&oacute;gicos que busca identificar ideas innovadoras de largo alcance construir o refinar los principales componentes que haran de tu Startup un negocio escalable.
						</p>
						<p>
							El programa esta dirigido por mentores especialistas que aplican metodolog&iacute;as espec&iacute;ficas en la formaci&oacute;n de una Startup, ellos cuenta con la suficiente experiencia para ofrecerte los consejos adecuados para prepararte para las oportunidades de inversi&oacute;n y atracci&oacute;n de cliente.
						</p>	
						<p>
							IdeaStartup esta dirigido para todo aquel estudiante con mente de ganador, atrevido y decidido. No importa de que &aacute;rea seas, las ideas las tenemos todos. Deja atr&aacute;s los mitos que destruyen tu espiritu de emprendimiento y atrevete a innovar.
						</p>
					</div>
				</div>
				<hr>
				<div id="profits" class="title"><h2>&iquest;Qu&eacute; te ofrecemos?</h2></div>
				<div class="post-content">
					<div class="post-description">
						<p>
							<ul class="event_post star_list_event">
								<li>
									Aprender todo sobre el entorno de startup: conoce que esta pasando en el mundo y el Per&uacute; sobre emprendimiento, y porque las Startup es la mejor opci&oacute;n para levantar empresas en internet.
								</li>
								<li>
									Espacio de Networking y con esto, conocer a tus pr&oacute;ximos socios para emprender la aventura. Recuerda que levatar empresas en internet sin un equipo es un estilo muy arcaico, ya no funciona. 
								</li>
								<li>
									Identificar tu modelo de negocio.
								</li>
								<li>
									Aprender a vender tu producto y convencer a los inversiones a que se interesen sobre tu idea.
								</li>
								<li>
									Exponer p&uacute;blicamente tu Startup, as&iacute; posibles inversionas estan siguiendo lo que haces si els interesa tu idea, esto lo puede motivar a que te contacten.
								</li>
								<li>
									Construir una red de contactos de especialistas y emprendedores que buscan cosas en com&uacute;n, emprender en internet.
								</li>
								<li>
									Formar parte de la comunidad startupPlace, porque siempre estamos en busca de personas con un ideal y con las ganas de hacer algo diferente, startupPlace es un iniciativa que busca romper la mentalidad tradicional y t&uacte; puedes ser parte de esta.
								</li>
							</ul>
						</p>
					</div>
				</div>	

				<hr>
				<div id="cost" class="title"><h2>&iquest;Cual es el costo?</h2></div>	
				<div class="post-content">
					<div class="post-description">
						<p>
							<span class="dropcap dark">P</span>or esta &uacute;nica oportunidad startupPlace hace todos los esfuerzos para difundir el emprendimiento tecnol&oacute;gico en el &aacute;mbito universitario, es por eso que decidimos ofrecerte el costo cero; si, <b>S/. 0.00</b>, pero si exigimos con algunas pruebas para saber que estas aprovechando esta gran oportunidad.
						</p>
					</div>
				</div>

				<hr>
				<div id="programming" class="title"><h2>Programaci&oacute;n</h2></div>	
				<div class="post-content">
					<div class="post-description">
						<p>
							<ul class="event_post check_list">
								<li>
									<strong>21 de enero:</strong> fecha apertura de inscripci&oacute;n
								</li>
								<li>
									<strong>25 de enero:</strong> fecha l&iacute;mite de inscripci&oacute;n
								</li>
								<li>
									<strong>26 de enero:</strong> inicio del programa
								</li>
								<li>
									<strong>16 de febrero:</strong> fin del programa
								</li>
							</ul>
						</p>
					</div>
				</div>

				<hr>
				<div id="place" class="title"><h2>Lugar</h2></div>	
				<!-- start: Map -->
				<div class="post-dinamic map">
					<!-- starts: Google Maps -->
					<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
					<div id="googlemaps-container-top"></div>
					<div id="googlemaps" class="google-map google-map-full"></div>
					<div id="googlemaps-container-bottom"></div>
					<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
					<script src="<?php echo URL::base(); ?>assets/js/jquery.gmap.min.js"></script>
					<script type="text/javascript">
						$('#googlemaps').gMap({
							maptype: 'ROADMAP',
							scrollwheel: false,
							zoom: 16,
							markers: [
								{
									address: 'Facultad de Ingenieria de Sistemas (UNMSM)', 
									html: '',
									popup: false,
								}

							],

						});
					</script>
					<!-- end: Google Maps -->
				</div>
				<!-- end: Map -->
				<div class="post-content">
					<div class="post-description">
						<p>
							<span class="dropcap dark">E</span>l espacio en donde se realizar&aacute;n los talleres ser&aacute; en el <strong>laboratorio 5</strong>, dentro de las intalaciones de la Facultad de Ingenier&iacute;a de Sistemas e Inform&aacute;tica de la UNMSM.
						</p>
					</div>
				</div>
			</div>
			<!-- end: Post -->	
		</div>

		<!-- start: Sidebar -->
		<div class="span3 hidden-phone">
			<hr/>
			<!-- start: Sidebar Menu -->
			<div id="menuFloatAutomatic" class="widget">
				<div class="title"><h3>ideaStartup</h3></div>
				<ul class="links-list-alt">
					<li><a href="#about">&iquest;Qu&eacute; es ideaStartup?</a></li>
					<li><a href="#profits">&iquest;Qu&eacute; te ofrecemos?</a></li>
					<li><a href="#cost">&iquest;Cual es el costo?</a></li>
					<li><a href="#programming">Programaci&oacute;n</a></li>
					<li><a href="#place">Lugar</a></li>
				</ul>
			</div>
			<!-- end: Sidebar Menu -->
		</div>
		<!-- end: Sidebar -->
	</div>
	<!--end: Container-->
</div>
<!-- end: Wrapper  -->			
