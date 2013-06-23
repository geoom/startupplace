<!DOCTYPE HTML>
<html lang="<?php echo substr(I18n::$lang, 0, 2); ?>"> 
<head>
    <!-- start: Meta -->
    <meta charset="utf-8">
    <title><?php echo $title ?></title> 
    <meta name="author" content="George Mejia"/>
    <!-- end: Meta -->
    
    <!-- start: Mobile Specific -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- end: Mobile Specific -->

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
</head>
<body>

    <div class="container">

      <div class="masthead">
        <h3 class="muted">StartupPlace admin</h3>
        <div class="navbar">
          <div class="navbar-inner">
            <div class="container">
              <ul class="nav">
                <li class="active"><?php echo HTML::anchor("dashboard", "Inicio"); ?></li>
                <?php if($logged_in){ ?>
                    <li><a href="#">Art&iacute;culos</a></li>
                      <?php  if(Auth::instance()->logged_in('admin')){ ?>
                        <li><?php echo HTML::anchor("dashboard/auth/register", "Nuevo usuario"); ?></li>
                      <?php } ?>
                    <li><?php echo HTML::anchor("dashboard/auth/logout", "cerrar sesión"); ?></li>
                <?php } ?>
              </ul>
            </div>
          </div>
        </div><!-- /.navbar -->
      </div>

      <!-- Jumbotron -->
        <div class="row">
            <div class="span6 offset3">
                <?php echo $content ?>
            </div>
        </div>
      <hr>

      <div class="footer">
        <p>© StartupPlace 2013</p>
      </div>

    </div>

    <!-- start: Java Script -->
    <?php foreach ($scripts as $file) echo HTML::script($file), PHP_EOL ?>
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