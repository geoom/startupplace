<!DOCTYPE HTML>
<html lang="<?php echo substr(I18n::$lang, 0, 2); ?>"> 
<head>
	<!-- start: Meta -->
	<meta charset="utf-8">
	<title><?php echo $title ?></title> 
	<meta name="description" content="La comunidad de emprendimiento tecnol&oacute;gico en la UNMSM, atr&eacute;vete a innovar e iniciar la aventura como emprendedor. En StartupPlace te guiamos en la busca del &eacute;xito como emprendedor."/>
	<meta name="keywords" content="startupplace, startup, san marcos" />
	<meta name="author" content="George"/>
	<!-- end: Meta -->
	
	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- end: Mobile Specific -->
	
	<!-- start: Facebook Open Graph -->
	<meta property="og:title" content="StartupPlace San Marcos"/>
	<meta property="og:description" content="Comunidad sanmarquina de emprendimiento tecnologico"/>
	<meta property="og:type" content="website"/>
	<meta property="og:url" content="http://startupplace.org"/>
	<meta property="og:image" content="http://startupplace.org/img/logotype.png"/>
	<meta property="fb:page_id" content="365738726854197" />
	<meta property="fb:admins" content="100001120638005" />
	<!-- end: Facebook Open Graph -->

	<!-- start: CSS -->
	<?php foreach ($styles as $file => $type) echo HTML::style($file, array('media' => $type)), PHP_EOL ?>
	<!-- end: CSS -->

	<!-- The icon -->
    <link rel="shortcut icon" href="<?php echo URL::base(); ?>favicon.ico" type="image/x-icon"/>

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
	<!--[if IE 9]>
      <link href="css/styleie9.css" rel="stylesheet">
    <![endif]-->
</head>
<body>
	<!--start: Header -->
	<header>
		<!--start: Container -->
		<div class="container">
			<!--start: Navbar -->
			<div class="navbar navbar-inverse">
	    		<div class="navbar-inner">
	          		<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
	            		<span class="icon-bar"></span>
	            		<span class="icon-bar"></span>
	            		<span class="icon-bar"></span>
	          		</a>
					<a class="brand" href="http://www.startupplace.org">
						<img src="<?php echo URL::base(); ?>assets/img/logotype.png" alt="startupplace"/>
					</a>
	          		<div class="nav-collapse collapse">
	            		<ul class="nav">
		        			<?php if(Request::current()->uri() == "/"){ 
		        				echo "<li class=\"active\">";
		        			}else{ echo "<li>";} ?>
		            			<a href="<?php echo URL::base(); ?>"><?php echo __('HOME')?></a>
		            		</li>
		            		<?php if(Request::current()->uri() == "about"){ 
		        				echo "<li class=\"active\">";
		        			}else{ echo "<li>";} ?>
		            			<a href="<?php echo URL::base(); ?>about"><?php echo __('ABOUT')?></a>
		            		</li>
		            		<?php if(Request::current()->uri() == "ideastartup"){ 
		        				echo "<li class=\"active\">";
		        			}else{ echo "<li>";} ?>
		            			<a href="<?php echo URL::base(); ?>ideastartup"><?php echo __('IDEASTARTUP')?></a>
		            		</li>
		            		<?php if(Request::current()->uri() == "events"){ 
		        				echo "<li class=\"active dropdown\">";
		        			}else{ echo "<li class=\"dropdown\">";} ?>
	                			<a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo __('EVENTS')?><b class="caret"></b></a>
	                			<ul class="dropdown-menu dropdown-limited">
	                  				<li><a href="<?php echo URL::base(); ?>event01">
	                  					<p><?php echo __('EVENT01')?></p>
	                  				</a></li>
	                			</ul>
	              			</li>
	              			<?php if(Request::current()->uri() == "contact"){ 
		        				echo "<li class=\"active\">";
		        			}else{ echo "<li>";} ?>
	              				<a href="<?php echo URL::base(); ?>contact"><?php echo __('CONTACT')?></a>
	              			</li>
	            		</ul>
	          		</div>
	        	</div>
	      	</div>
			<!--end: Navbar -->
		</div>
		<!--end: Container-->			
	</header>
	<!--end: Header-->
	
	<!-- start: Slider -->
	<div class="slider-wrapper">

		<div id="da-slider" class="da-slider">
			<div class="da-slide">
				<h2>StartupPlace San Marcos</h2>
				<p>Bienvenidos a StartupPlace San Marcos la primera comunidad de emprendedores tecnológicos conformada y dirigida por estudiantes sanmarquinos...</p>
				<a href="<?php echo URL::base(); ?>about" class="da-link">Me interesa</a>
				<div class="da-img"><img src="<?php echo URL::base(); ?>assets/img/parallax-slider/logo-cover.png" alt="image01" /></div>
			</div>
			<div class="da-slide">
				<h2>ideaStartup</h2>
				<p>Si tienes esa idea incre&iacute;ble que puedes montarla sobre internet, es momento de trabajarla y ejecutarla lo m&aacute;s r&aacute;pido posible; en StartupPlace te guiamos en la busca del &eacute;xito como emprendedor...</p>
				<a href="<?php echo URL::base(); ?>ideastartup" class="da-link">Me interesa</a>
				<div class="da-img"><img src="<?php echo URL::base(); ?>assets/img/parallax-slider/workshop-cover.png" alt="image02" /></div>
			</div>
			<nav class="da-arrows">
				<span class="da-arrows-prev"></span>
				<span class="da-arrows-next"></span>
			</nav>
		</div>
		
	</div>
	<!-- end: Slider -->
			
	<!--start: Wrapper-->
	<div id="wrapper">
				
		<!--start: Container -->
    	<div class="container">
			<hr>
			<!-- start: Row -->
			<div class="row">
				<!-- start: Icon Boxes -->
				<div class="icons-box-vert-container">
					<!-- start: Icon Box Start -->
					<div class="span4">
						<div class="icons-box-vert">
							<i class="ico-lightbulb ico-white circle-color-full"></i>
							<div class="icons-box-vert-info">
								<h3>Desarrolla tu idea</h3>
								<p>Todos tenemos ideas pero si no tienen acci&oacute;n son in&uacute;tiles, la mayor&iacute;a de tus ideas no garantizan ser geniales hasta que decides contarla a otras personas, aprovechar sus experiencias y sugerencias para mejorar tu idea lo mejor posible.</p>
							</div>
							<div class="clear"></div>
						</div>
					</div>
					<!-- end: Icon Box-->

					<!-- start: Icon Box Start -->
					<div class="span4">
						<div class="icons-box-vert">
							<i class="ico-group ico-white circle-color-full"></i>
							<div class="icons-box-vert-info">
								<h3>Conf&iacute;a en tu equipo</h3>
								<p>Selecciona cuidadosamente a los co-fundadores en base a buenas relaciones y un insuperable compromiso para emprender la aventura, esta es la mejor garant&iacute;a de la supervivencia de tu Startup.</p>
							</div>
							<div class="clear"></div>
						</div>
					</div>
					<!-- end: Icon Box -->

					<!-- start: Icon Box Start -->
					<div class="span4">
						<div class="icons-box-vert">
							<i class="ico-alarm ico-white circle-color-full"></i>
							<div class="icons-box-vert-info">
								<h3>Ejecuta r&aacute;pidamente</h3>
								<p>Construye algo muy simple y lo m&aacute;s significativamente posible como para que los inversionistas entiendan tu idea. El exceso de ingenier&iacute;a puede arruinarte toda la aventura.</p>
							</div>
							<div class="clear"></div>
						</div>
					</div>
					<!-- end: Icon Box -->

				</div>
				<!-- end: Icon Boxes -->
				<div class="clear"></div>
			</div>
			<!-- end: Row -->
			
			<hr>
			
			<!-- start: Row -->
      		<div class="row">
				<div class="span9 newsletter">
					<div class="title"><h3>&Uacute;ltimas noticias</h3></div>
					<!-- start: Row -->
		      		<div class="row">
						<div class="span3">
							<div class="picture">
								<a href="static/img/events/13-002/afiche_taller.png" rel="image" title="ideaStartup poster">
									<img src="<?php echo URL::base(); ?>assets/img/events/13-002/afiche_taller.png" >
									<div class="image-overlay-zoom"></div>
								</a>
							</div>
							<div class="item-description">
								<h4><a href="ideastartup.html">ideaStartup</a></h4>
								<p>El primer programa de desarrollo para emprendedores tecnol&oacute;gicos organizado por StartupPlace.</p>
							</div>
							<a class="post-entry" href="<?php echo URL::base(); ?>ideastartup">Ver m&aacute;s...</a>
        				</div>

						<div class="span3">
							<div class="post-img video">
								<div class="flex-video">
									<iframe src="http://player.vimeo.com/video/57426743?title=0&amp;byline=0&amp;portrait=0" width="500" height="281" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
								</div>
							</div>
							<div class="item-description">
								<h4><a href="<?php echo URL::base(); ?>event01#video-alvaro">&Aacute;lvaro Z&aacute;rate te invita al evento de startupplace</a></h4>
								<p><a href="<?php echo URL::base(); ?>event01#alvaro-speaker">&Aacute;lvaro</a>, coordinardor General de Lima Valley, hablar&aacute; sobre el emprendimiento tecnol&oacute;gico y las nuevas oportunidades para los emprendedores peruanos.</p>
							</div>
							<a class="post-entry" href="<?php echo URL::base(); ?>event01#video-alvaro">Ver m&aacute;s...</a>
		        		</div>

						<div class="span3">
							<div class="post-img video">
								<div class="flex-video">
									<iframe src="http://player.vimeo.com/video/57520227?title=0&amp;byline=0&amp;portrait=0" width="500" height="281" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
								</div>
							</div>
							<div class="item-description">
								<h4><a href="<?php echo URL::base(); ?>event01#video-mario">Dipoo asiste al evento de StartupPlace</a></h4>
								<p>Dipoo tambi&eacute;n estar&aacute; presente, <a href="<?php echo URL::base(); ?>event01#mario-speaker">Mario</a> (su co-fundador) contar&aacute; sobre las experencias por la cuales paso esta tan mencionada Startup y cuales son los nuevos retos que se vienen en camino.</p>
							</div>
							<a class="post-entry" href="<?php echo URL::base(); ?>event01#video-mario">Ver m&aacute;s...</a>
						</div>

        			</div>
					<!-- end: Row -->
				</div>

        		<div class="span3">
					
        			<!-- start: social -->
        			<div class="social-container">
        				<div class="title"><h3>Comparte</h3></div>
        				<div class="fb-like" data-href="http://www.facebook.com/startupplace" data-send="true" data-layout="box_count" data-width="100" data-show-faces="true"></div>
        			</div>

        		</div>
      		</div>
			<!-- end: Row -->
			<hr>			
		
			<!-- start Confian en nosotros
			<hr>
			<div class="title"><h2>Conf&iacute;an en nosotros</h2></div>
			<div class="clients-carousel">
				<ul class="slides clients">
					<li><img src="static/img/logos/1.png" alt=""/></li>
					<li><img src="static/img/logos/2.png" alt=""/></li>	
					<li><img src="static/img/logos/3.png" alt=""/></li>
					<li><img src="static/img/logos/4.png" alt=""/></li>
					<li><img src="static/img/logos/5.png" alt=""/></li>
					<li><img src="static/img/logos/6.png" alt=""/></li>
					<li><img src="static/img/logos/7.png" alt=""/></li>
					<li><img src="static/img/logos/8.png" alt=""/></li>
					<li><img src="static/img/logos/9.png" alt=""/></li>
					<li><img src="static/img/logos/10.png" alt=""/></li>		
				</ul>
			</div>
			end Confian en nosotros -->

		</div>
		<!--end: Container-->
	</div>
	<!-- end: Wrapper  -->			

    <!-- start: Footer Menu -->
	<div id="footer-menu" class="hidden-tablet hidden-phone">
		<!-- start: Container -->
		<div class="container">
			<!-- start: Row -->
			<div class="row">

				<!-- start: Footer Menu Logo -->
				<div class="span2">
					<div id="footer-menu-logo">
						<img src="<?php echo URL::base(); ?>assets/img/logotype-foot.png" alt="startupplace"/>
					</div>
				</div>
				<!-- end: Footer Menu Logo -->

				<!-- start: Footer Menu Links-->
				<div class="span9">
					<div id="footer-menu-links">
						<ul id="footer-nav">
							<li><a href="<?php echo URL::base(); ?>about"><?php echo __('ABOUT')?></a></li>
							<li><a href="<?php echo URL::base(); ?>contact"><?php echo __('CONTACT')?></a></li>
						</ul>
					</div>
				</div>
				<!-- end: Footer Menu Links-->

				<!-- start: Footer Menu Back To Top -->
				<div class="span1">
					<div id="footer-menu-back-to-top">
						<a href="#"></a>
					</div>
				</div>
				<!-- end: Footer Menu Back To Top -->
			</div>
			<!-- end: Row -->
		</div>
		<!-- end: Container  -->	
	</div>	
	<!-- end: Footer Menu -->

	<!-- start: Footer -->
	<div id="footer">
		<!-- start: Container -->
		<div class="container">
			<!-- start: Row -->
			<div class="row">
				<!-- start: About -->
				<div class="span3">
					<h3>StartupPlace San Marcos</h3>
					<p>
						Somos la primera comunidad sanmarquina de emprendedores e innovadores en internet.
					</p>
				</div>
				<!-- end: About -->

				<!-- start: location map -->
				<div class="span3">
					<h3>Estamos aqu&iacute;</h3>
					<div id="small-map-container"><a href="<?php echo URL::base(); ?>contact"></a></div>
					<iframe id="small-map" width="210" height="210" frameborder="0" scrolling="yes" marginheight="0" marginwidth="0" src="https://maps.google.es/maps?f=q&source=s_q&hl=es-419&geocode=&q=Universidad+Nacional+Mayor+de+San+Marcos,+Lima,+Per%C3%BA&aq=0&oq=Universidad+Nacional+Ma&sll=40.396764,-3.713379&sspn=9.75133,20.280762&ie=UTF8&hq=Universidad+Nacional+Mayor+de+San+Marcos,+Lima,+Per%C3%BA&ll=-12.056451,-77.083828&spn=0.010135,0.009152&z=14&iwloc=near&output=embed"></iframe>
				</div>
				<!-- end: location map  -->

				<div class="span6">
					<!-- start: Follow Us -->
					<h3>S&iacute;guemos</h3>
					<ul class="social-grid">
						<li>
							<div class="social-item">				
								<div class="social-info-wrap">
									<div class="social-info">
										<div class="social-info-front social-twitter">
											<a href="https://twitter.com/StartupPlace" target="_blank"></a>
										</div>
										<div class="social-info-back social-twitter-hover">
											<a href="https://twitter.com/StartupPlace" target="_blank"></a>
										</div>	
									</div>
								</div>
							</div>
						</li>
						<li>
							<div class="social-item">				
								<div class="social-info-wrap">
									<div class="social-info">
										<div class="social-info-front social-facebook">
											<a href="https://www.facebook.com/StartupPlace" target="_blank"></a>
										</div>
										<div class="social-info-back social-facebook-hover">
											<a href="https://www.facebook.com/StartupPlace" target="_blank"></a>
										</div>
									</div>
								</div>
							</div>
						</li>
						<li>
							<div class="social-item">				
								<div class="social-info-wrap">
									<div class="social-info">
										<div class="social-info-front social-youtube">
											<a href="https://www.youtube.com/startupplace" target="_blank"></a>
										</div>
										<div class="social-info-back social-youtube-hover">
											<a href="https://www.youtube.com/startupplace" target="_blank"></a>
										</div>	
									</div>
								</div>
							</div>
						</li>
						<li>
							<div class="social-item">				
								<div class="social-info-wrap">
									<div class="social-info">
										<div class="social-info-front social-vimeo">
											<a href="http://vimeo.com/user15785241" target="_blank"></a>
										</div>
										<div class="social-info-back social-vimeo-hover">
											<a href="http://vimeo.com/user15785241" target="_blank"></a>
										</div>	
									</div>
								</div>
							</div>
						</li>
					</ul>
					<!-- end: Follow Us -->
				
					<!-- start: Newsletter ->
					<form id="newsletter">
						<h3>Suscr&iacute;bete</h3>
						<p>D&eacute;janos tu correo electr&oacute;nico para mantenerte informado</p>
						<label for="newsletter_input">@:</label>
						<input type="text" id="newsletter_input"/>
						<input type="submit" id="newsletter_submit" value="Listo">
					</form>
					<!- end: Newsletter -->
				</div>
			</div>
			<!-- end: Row -->	
		</div>
		<!-- end: Container  -->
	</div>
	<!-- end: Footer -->

	<!-- start: Copyright -->
	<div id="copyright">
		<!-- start: Container -->
		<div class="container">
			<div class="span12">
				<p>
					&copy; 2013, StartupPlace
				</p>
			</div>
		</div>
		<!-- end: Container  -->
	</div>	
	<!-- end: Copyright -->

	<!-- start: Java Script -->
	<!-- Placed at the end of the document so the pages load faster -->
	<?php foreach ($scripts as $file) echo HTML::script($file), PHP_EOL ?>
	<script defer="defer" src="<?php echo URL::base(); ?>assets/js/custom.js"></script>
	<!-- end: Java Script -->

	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
	<script type="text/javascript">
	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-38384370-1']);
	  _gaq.push(['_trackPageview']);

	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();
	</script>
</body>
</html>