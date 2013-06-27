<div class="row">
	<div class="span6 offset3">
		<div class="area">
			<?php echo Form::open(NULL, array('class' => 'form-horizontal','id' => 'create', 'autocomplete' => 'off')); ?>
				
				<?php if ($success_signup) { ?>
					<div class="alert alert-info">
		                <button type="button" class="close" data-dismiss="alert">×</button>
		                <strong>Enhorabuena: </strong> 
		                El nuevo usuario se ha registrado con &eacute;xito !<br>
		            </div>
				<?php } ?>

				<?php if ($errors) { ?>
					<div class="alert alert-error">
				        <button type="button" class="close" data-dismiss="alert">×</button>
				        <strong>Acceso denegado!</strong> Algunos errores se generaron, detalles:
				        <p>
					        <ul class="errors">
								<?php foreach ($errors as $message): ?>
								    <li><?php echo $message ?></li>
								<?php endforeach ?>
							</ul>
						</p>
				    </div>
				<?php } ?>

			    <div class="heading">
			        <h2 class="form-heading">Nuevo usuario</h2>
			    </div>
			    <br/>
			    <div class="control-group">
			        <?php echo Form::label('username', 'Usuario', array('class' => 'control-label','for' => 'inputUsername')) ?>
			        <div class="controls">
			        	<?php echo Form::input('username', $post['username'], array('id'=>'inputUsername', 'placeholder' => 'Ej. pepito163', 'maxlength' => '15')) ?>
			        </div>
			    </div>
			    <div class="control-group">
			        <?php echo Form::label('email', 'Correo electr&oacute;nico', array('class' => 'control-label','for' => 'inputEmail')) ?>
			        <div class="controls">
			        	<?php echo Form::input('email', $post['email'], array('id'=>'inputEmail', 'placeholder' => 'Ej. miusuario@servidor.com')) ?>
			        </div>
			    </div>
			    <div class="control-group">
			    	<?php echo Form::label('password', 'Contrase&ntilde;a', array('class' => 'control-label','for' => 'inputPassword')) ?>
			        <div class="controls">
			        	<?php echo Form::password('password',NULL, array('id'=>'inputPassword', 'placeholder' => 'Ej. my-23_clavE-seg3ur3a')) ?>
			        </div>
			    </div>
			    <div class="control-group">
			        <div class="controls">
			            <?php echo Form::submit(NULL, 'Registrar', array('class' => 'btn btn-success')); ?>
			        </div>
			    </div>	
			<?php echo Form::close(); ?>
		</div>
	</div>
</div>