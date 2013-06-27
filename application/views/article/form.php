<div class="row">
    <div class="span10">
        <div class="area">
            <?php $errors = isset($errors) ? $errors : array(); ?>

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
                        <?php echo Form::textarea('content', $article->content, array('id'=>'inputContent', 'class' => 'input-block-level', 'placeholder' => 'Describe el artículo')) ?>
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
