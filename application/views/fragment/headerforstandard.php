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
				<a class="brand" href="<?php echo URL::base(); ?>">
					<img src="<?php echo URL::base(); ?>assets/img/simpl-logo.png" alt="startupplace"/>
				</a>
          		<div class="nav-collapse collapse">
            		<ul class="nav">
	        			
                  <?php if(Request::current()->uri() == "/"){ 
  	        				       echo "<li class=\"active\">";
  	        			      }else{ echo "<li>";} 
                  ?>
	            			<a href="<?php echo URL::base(); ?>">Inicio</a>
	            		</li>

                  <?php if(Request::current()->uri() == "news"){ 
                           echo "<li class=\"active\">";
                        }else{ echo "<li>";} 
                  ?>
                    <a href="<?php echo URL::base(); ?>news">Blog</a>
                  </li>

	            		<?php if(Request::current()->uri() == "events" 
                                    || Request::current()->uri() == "event01" 
                                    || Request::current()->uri() == "event02" 
                                    || Request::current()->uri() == "event03"){ 
	        				         echo "<li class=\"active dropdown\">";
	        			        }else{ echo "<li class=\"dropdown\">";} 
                  ?>
                			<a href="#" class="dropdown-toggle" data-toggle="dropdown">Eventos
                        <b class="caret"></b>
                      </a>
                			<ul class="dropdown-menu dropdown-limited">
                  				<li>
                  					<a href="<?php echo URL::base(); ?>event03">
                  						<p>Startup week university</p>
                  					</a>
                  				</li>
                  				<hr class="separation menu-item">
                            <li>
                              <a href="<?php echo URL::base(); ?>event02">
                                <p>Pasi&oacute;n por emprender, tecnolog&iacute;a por descubrir</p>
                              </a>
                            </li>
                            <hr class="separation menu-item">
                  				<li>
                  					<a href="<?php echo URL::base(); ?>event01">
                  						<p>Acepta el reto de ser un emprendedor tecnol&oacute;gico</p>
                  					</a>
                  				</li>
                			</ul>
              		</li>

                  <?php if(Request::current()->uri() == "ideastartup"){ 
                          echo "<li class=\"active\">";
                        }else{ echo "<li>";} 
                  ?>
                    <a href="<?php echo URL::base(); ?>ideastartup">ideaStartup</a>
                  </li>


                  <?php if(Request::current()->uri() == "about"){ 
                          echo "<li class=\"active\">";
                        }else{ echo "<li>";} 
                  ?>
                    <a href="<?php echo URL::base(); ?>about">Sobre nosotros</a>
                  </li>

              		<?php if(Request::current()->uri() == "contact"){ 
	        				        echo "<li class=\"active\">";
	        			        }else{ echo "<li>";} 
                  ?>
              			<a href="<?php echo URL::base(); ?>contact">Contacto</a>
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
