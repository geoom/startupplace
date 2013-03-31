<!DOCTYPE HTML>
<html lang="<?php echo substr(I18n::$lang, 0, 2); ?>"> 
<head>
	<!-- start: Meta -->
	<meta charset="utf-8">
	<title><?php echo $titleMeta ?></title> 
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

	<?php include Kohana::find_file('views/fragment', 'headerforclasic'); ?>
	<?php echo $content ?>
	<?php include Kohana::find_file('views/fragment', 'footerforclasic'); ?>

	<!-- start: Java Script -->
	<!-- Placed at the end of the document so the pages load faster -->
	<?php foreach ($scripts as $file) echo HTML::script($file), PHP_EOL ?>
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