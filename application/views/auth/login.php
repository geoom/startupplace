<div class="area">
	<?php echo Form::open(NULL, array('class' => 'form-horizontal',)); ?>
		
		<?php if ($errors || $loginerrors) { ?>
			<div class="alert alert-error">
		        <button type="button" class="close" data-dismiss="alert">×</button>
		        <strong>Acceso denegado!</strong> Some errors were encountered, please check the details you entered.
		        <p>
			        <ul class="errors">
						<?php foreach ($errors as $message): ?>
						    <li><?php echo $message ?></li>
						<?php endforeach ?>
						<?php if(isset($loginerrors) && empty($errors)) { echo $loginerrors; } ?>
					</ul>
				</p>
		    </div>
		<?php } ?>

	    <div class="heading">
	        <h2 class="form-heading">Iniciar sesi&oacute;n</h2>
	    </div>
	    <br/>
	    <div class="control-group">
	        <?php echo Form::label('username', 'Usuario', array('class' => 'control-label','for' => 'inputUsername')) ?>
	        <div class="controls">
	        	<?php echo Form::input('username', $post['username'], array('id'=>'inputUsername', 'placeholder' => 'Ej. pepito163')) ?>
	        </div>
	    </div>
	    <div class="control-group">
	    	<?php echo Form::label('password', 'Contrase&ntilde;a', array('class' => 'control-label','for' => 'inputPassword')) ?>
	        <div class="controls">
	        	<?php echo Form::password('password',NULL, array('id'=>'inputPassword', 'placeholder' => 'Tu clave')) ?>
	        </div>
	    </div>
	    <div class="control-group">
	        <div class="controls">
	            <label class="checkbox">
	            	<?php echo Form::checkbox('remember', NULL, ! empty($post['remember'])) ?>
	            	Recordarme
	            	<br/>
	            </label>
	            <?php echo Form::submit(NULL, 'Ingresar', array('class' => 'btn btn-success')); ?>
	        </div>
	    </div>	
	<?php echo Form::close(); ?>
	<a href="#" class="btn btn-link">Recuperar contrase&ntilde;a</a>
</div>