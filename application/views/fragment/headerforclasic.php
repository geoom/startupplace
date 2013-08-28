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
	            		<?php if(Request::current()->uri() == "events" 
                                    || Request::current()->uri() == "event01" 
                                    || Request::current()->uri() == "event02" 
                                    || Request::current()->uri() == "event03"){ 
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

<!-- start: Page Title -->
<div id="page-title">
	<div id="page-title-inner">
		<!-- start: Container -->
		<div class="container">
			<h2><i class="<?php echo $iconClass ?>"></i><?php echo $titlePage ?></h2>
		</div>
		<!-- end: Container  -->
	</div>	
</div>
<!-- end: Page Title -->