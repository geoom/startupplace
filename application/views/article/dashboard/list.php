<div clas="row">
	<div class="span4">
		<a href="<?php echo URL::base(); ?>dashboard/articles/new" class="btn btn-primary"><i class="icon-pencil icon-white"></i> Nuevo art&iacute;culo</a>
	</div>
</div>
<br/><br/><br/>
<div clas="row">
	<div class="span6">
		<?php foreach ($articles as $article) : ?>
			<a href="<?php echo URL::base(); ?>dashboard/articles/view/<?php echo $article->id ?>" class="btn btn-mini"><i class="icon-zoom-in"></i> <strong>Vista previa</strong></a>
			<a href="<?php echo URL::base(); ?>dashboard/articles/edit/<?php echo $article->id ?>" class="btn btn-mini"><i class="icon-edit"></i> <strong>Editar</strong></a>
			<a href="<?php echo URL::base(); ?>dashboard/articles/delete/<?php echo $article->id ?>" class="btn btn-mini"><i class="icon-trash"></i> <strong>Eliminar</strong></a>
			<h1><?php echo $article->title; ?></h1>
		    <hr>
		<?php endforeach; ?>
	</div>
</div>