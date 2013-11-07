<div class="row">
    <div class="span10">
        <div class="area">
            <div class="heading">
                <h2 class="form-heading">Nuevo comentario</h2>
            </div>
             
            <?php echo Form::open('comment/post/', array('class' => 'form-horizontal')); ?>
                <div class="control-group">
                    <?php echo Form::label('name', 'Nombre', array('class' => 'control-label','for' => 'inputName')) ?>
                    <div class="controls">
                        <?php echo Form::input('name', $comment->name, array('id'=>'inputName', 'placeholder' => 'Ej. Eduardo')) ?>
                    </div>
                </div>
                <div class="control-group">
                    <?php echo Form::label('email', 'Correo electronico', array('class' => 'control-label','for' => 'inputEmail')) ?>
                    <div class="controls">
                        <?php echo Form::input('email', $comment->email, array('id'=>'inputEmail', 'placeholder' => 'Ej. eduardo@sp.net')) ?>
                    </div>
                </div>
                <div class="control-group">
                    <?php echo Form::label('comment', 'Comentario', array('class' => 'control-label','for' => 'inputComment')) ?>
                    <div class="controls">
                        <?php echo Form::textarea('comment', $comment->comment, array('id'=>'inputComment', 'placeholder' => 'Tu comentario')) ?>
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <?php echo Form::submit("submit", 'Publicar', array('class' => 'btn btn-success')); ?>
                    </div>
                </div>
                <?php echo Form::hidden("article_id", $article->pk()); ?>
            <?php echo Form::close(); ?>
        </div>
    </div>
</div>