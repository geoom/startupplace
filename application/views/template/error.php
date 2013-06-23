<!DOCTYPE html>
<html lang="es">
<head>
	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>P&aacute;gina no encontrada | StartupPlace San Marcos</title> 
	<meta name="description" content="Pagina de recurso no encontrado de startupplace san marcos, una comunidad de emprendimiento sanmarquino"/>
	<meta name="keywords" content="error, recurso no encontrado" />
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
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon"/>

    <link type="text/plain" rel="author" href="http://startupplace.org/humans.txt" />

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body class="pageError">

	<!-- start: content -->
	<div class="container">
		<div class="row">
			<div class="span6" style="margin-top:60px;">
				<?php echo $content ?>
				<br>
				<p>
					<a href="http://startupplace.org" class="btn btn-primary btn-large">
						<i class="icon-white icon-home"></i> Regresar al inicio
					</a>
				</p>
				<br>
				<p><img src="<?php echo URL::base(); ?>assets/img/logotype.png" alt=""/></p>
			</div>
			<div class="span6" style="margin-top:0px;">
				<p><img src="<?php echo URL::base(); ?>assets/img/sheep.png" alt=""></p>
			</div>
		</div>
	</div>
	<!-- end: conten -->	
</body>
</html>