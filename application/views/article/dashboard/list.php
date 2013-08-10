<div clas="row">
	<div class="span4">
		<a href="articles/new" class="btn btn-primary"><i class="icon-pencil icon-white"></i> Nuevo art&iacute;culo</a>
	</div>
</div>
<br/><br/><br/>
<div clas="row">
	<div class="span6">
		<?php foreach ($articles as $article) : ?>
				<a href="articles/view/<?php echo $article->id ?>" class="btn btn-mini"><i class="icon-zoom-in"></i> <strong>Vista previa</strong></a>
				<a href="articles/edit/<?php echo $article->id ?>" class="btn btn-mini"><i class="icon-edit"></i> <strong>Editar</strong></a>
				<a href="articles/delete/<?php echo $article->id ?>" class="btn btn-mini"><i class="icon-trash"></i> <strong>Eliminar</strong></a>
				<h1><?php echo $article->title; ?></h1>
			    <p><?php echo $article->content; ?></p>
			    <div>
			        <span class="badge badge-success">Posted 2012-08-02 20:47:04</span><div class="pull-right"><span class="label">alice</span> <span class="label">story</span> <span class="label">blog</span> <span class="label">personal</span></div>
			    </div> 
			    <hr>
		<?php endforeach; ?>
	</div>
</div>