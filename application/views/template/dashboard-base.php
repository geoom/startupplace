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
    <?php foreach ($extra_styles as $file => $type) echo HTML::style($file, array('media' => $type)), PHP_EOL ?>
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
      <br/>
      <div class="navbar">
        <div class="navbar-inner">
          <div class="container-fluid">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </a>
            <a class="brand" href="#" name="top">StartupPlace dashboard</a>
            <div class="nav-collapse collapse">
              <?php if($logged_in){ ?>
              <ul class="nav">
                <?php if($current_section == "index"){
                  echo "<li class=\"active\">";
                }else{ echo "<li>";} ?>
                  <a href="<?php echo URL::base(); ?>dashboard"><i class="icon-home"></i> Inicio</a>
                </li>
                <li class="divider-vertical"></li>
                <?php if($current_section == "articles"){
                  echo "<li class=\"active\">";
                }else{ echo "<li>";} ?>
                  <a href="<?php echo URL::base(); ?>dashboard/articles"><i class="icon-file"></i> Mis art&iacute;culos</a>
                </li>
                <li class="divider-vertical"></li>
                <?php  if(Auth::instance()->logged_in('admin')){ ?>
                  <?php if($current_section == "auth"){
                    echo "<li class=\"active\">";
                  }else{ echo "<li>";} ?>
                    <a href="<?php echo URL::base(); ?>dashboard/auth/register"><i class="icon-lock"></i> Crear cuenta</a>
                  </li>
                <?php } ?>
                <li class="divider-vertical"></li>
              </ul>
              <div class="btn-group pull-right">
                <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                  <i class="icon-user"></i> <?php echo Auth::instance()->get_user()->username; ?> <span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                  <li><a href="#"><i class="icon-wrench"></i> Mi cuenta</a></li>
                  <li class="divider"></li>
                  <li><a href="<?php echo URL::base(); ?>dashboard/auth/logout"><i class="icon-share"></i> cerrar sesi&oacute;n</a></li>
                </ul>
              </div>
              <?php } ?>
            </div>
            <!--/.nav-collapse -->
          </div>
          <!--/.container-fluid -->
        </div>
        <!--/.navbar-inner -->
      </div> 
      <!--/.navbar -->
      <div class="container-fluid">
        <?php echo $content ?>
      </div>

      <hr>
      <div class="footer">
        <p>© StartupPlace 2013</p>
      </div>

    </div>

    <!-- start: Java Script -->
    <?php foreach ($scripts as $file) echo HTML::script($file), PHP_EOL ?>
    <?php foreach ($extra_scripts as $file) echo HTML::script($file), PHP_EOL ?>
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