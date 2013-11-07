<div class="row">
    <div class="span10">
        <div class="area">
            <?php $errors = isset($errors) ? $errors : array(); ?>

            <div class="alert alert-block">
              <button type="button" class="close" data-dismiss="alert">&times;</button>
              <h4>Antenci&oacute; escritor, toma esto en cuenta para el correcto funcionamiento!</h4>
              Estas utilizando una version basica del blog de sp, si deseas subir imagenes, 
              te recomiendo que las subas en algun repositorio externo y luego digitar el link 
              en la cajita de laopcion "insert image" más abajo, si deseas deshacer un cambio
              presiona Ctrl + Z con confianza, existen 2 opciones que no funcionan
              correctamente, justamente son la primera (vista html) y la ultima opcion (corrector ortografico).
              Cuando presiones la opcion "Enviar", tu articulo se publicará automaticamente.
            </div>

            <div class="heading">
                <h2 class="form-heading"><?php echo ($article->id? "Editar" : "Nuevo"); ?> art&iacute;culo</h2>
            </div>
            
            <?php echo Form::open('article/post/'.$article->id, array('class' => 'form-horizontal')); ?>
                <div class="control-group">
                    <?php echo Form::label('title', 'Titulo', array('class' => 'control-label','for' => 'inputTitle')) ?>
                    <div class="controls">
                        <?php echo Form::input('title', $article->title, array('id'=>'inputTitle', 'class' => 'input-block-level', 'placeholder' => 'Ej. Sobre el ecosistema')) ?>
                        <span class="error"><?php echo Arr::get($errors, 'title');?></span>
                    </div>
                </div>
                <div class="control-group">
                    <?php echo Form::label('content', 'Contenido', array('class' => 'control-label','for' => 'inputContent')) ?>
                    <div class="controls">
                        <?php echo Form::textarea('content', $article->content, array('id'=>'inputContent', 'class' => 'textarea', 'rows' => '30', 'placeholder' => 'Describe el artículo')) ?>
                        <span class="error"><?php echo Arr::get($errors, 'content');?></span>
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <?php echo Form::submit("submit", 'Enviar', array('class' => 'btn btn-success')); ?>
                    </div>
                </div>
            <?php echo Form::close(); ?>
        </div>
    </div>
</div>
