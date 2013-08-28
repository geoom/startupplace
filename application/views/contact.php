<!DOCTYPE html>
<html lang="<?php echo substr(I18n::$lang, 0, 2); ?>"> 
<head>
	<!-- start: Meta -->
	<meta charset="utf-8">
	<title><?php echo $title ?></title> 
	<meta name="description" content="<?php echo $descriptionMeta ?>"/>
	<meta name="keywords" content="<?php echo $keywords ?>" />
	<!-- end: Meta -->
	
	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- end: Mobile Specific -->
	
	<!-- start: Facebook Open Graph -->
	<meta property="og:title" content="<?php echo $title ?>"/>
	<meta property="og:description" content="<?php echo $descriptionMeta ?>"/>
	<meta property="og:type" content="website"/>
	<meta property="og:url" content="<?php echo $url ?>"/>
	<meta property="og:image" content="http://startupplace.org/img/logotype.png"/>
	<meta property="fb:page_id" content="365738726854197" />
	<meta property="fb:admins" content="100001120638005" />
	<!-- end: Facebook Open Graph -->

    <!-- start: CSS -->
	<?php foreach ($styles as $file => $type) echo HTML::style($file, array('media' => $type)), PHP_EOL ?>
	<!-- end: CSS -->

	<!-- The icon -->
    <link rel="shortcut icon" href="<?php echo URL::base(); ?>assets/ico/favicon.ico" type="image/x-icon"/>

    <link type="text/plain" rel="author" href="http://startupplace.org/humans.txt" />

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
						<img src="<?php echo URL::base(); ?>assets/img/simpl-logo.png" alt="startupplace"/>
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
	                  				<li>
	                  					<a href="<?php echo URL::base(); ?>event03">
	                  						<p><?php echo __('EVENT03')?></p>
	                  					</a>
	                  				</li>
	                  				<hr class="separation menu-item">
	                  				<li>
	                  					<a href="<?php echo URL::base(); ?>event02">
	                  						<p><?php echo __('EVENT02')?></p>
	                  					</a>
	                  				</li>
	                  				<hr class="separation menu-item">
	                  				<li>
	                  					<a href="<?php echo URL::base(); ?>event01">
	                  						<p><?php echo __('EVENT01')?></p>
	                  					</a>
	                  				</li>
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

	<!-- start: Map -->
	<div>
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
				zoom: 13,
				markers: [
					{
						address: 'Universidad Nacional Mayor de San Marcos, Lima, Peru', // Your Adress Here
						html: '',
						popup: false,
					}
				],
			});
		</script>
		<!-- end: Google Maps -->
	</div>
	<!-- end: Map -->	
	
	<!-- start: Wrapper -->	
	<div id="wrapper">		
		<!-- start: Container -->	
		<div class="container">
			<!-- start: Row -->
			<div class="row">
				<!-- start: Contact Info -->
				<div class="span3">
					<div class="title"><h3>Informaci&oacute;n</h3></div>
					<p>
						<b>StartupPlace</b>
					</p>
					<p>	
						Lima, Per&uacute;
					</p>	
					<p>
						contact@startupplace.org
					</p>
				</div>
				<!-- end: Contact Info -->		

			</div>
			<!-- end: Row -->
		</div>
		<!-- end: Container -->
				
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
					<h3>StartupPlace</h3>
					<p>
						Somos la primera comunidad universitaria de emprendedores e innovadores en internet.
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
				
					<!-- start: Newsletter >
					<form id="newsletter">
						<h3>Suscr&iacute;bete</h3>
						<p>D&eacute;janos tu correo electr&oacute;nico para mantenerte informado.</p>
						<label for="newsletter_input">@:</label>
						<input type="text" id="newsletter_input"/>
						<input type="submit" id="newsletter_submit" value="Listo">
					</form>
					<! end: Newsletter -->
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
	<?php foreach ($scripts as $file) echo HTML::script($file), PHP_EOL ?>
	<script src="<?php echo URL::base(); ?>assets/js/startupplace.min.js" async></script>
	<!-- end: Java Script -->

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