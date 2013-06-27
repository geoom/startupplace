<div clas="row">
	<div class="span4">
		<a href="articles/edit/<?php echo $article->id ?>" class="btn btn-primary"><i class="icon-edit icon-white"></i> <strong>Editar</strong></a>
		<a href="articles/delete/<?php echo $article->id ?>" class="btn btn-danger"><i class="icon-trash icon-white"></i> <strong>Eliminar</strong></a>
	</div>
</div>
<br/><br/><br/>
<div clas="row">
	<div class="span11">
		<h1><?php echo $article->title; ?></h1>
	    <p><?php echo $article->content; ?></p>
	    <div>
	        <span class="badge badge-success">Posted 2012-08-02 20:47:04</span><div class="pull-right"><span class="label">alice</span> <span class="label">story</span> <span class="label">blog</span> <span class="label">personal</span></div>
	    </div> 
	    <hr>
	</div>
</div>





