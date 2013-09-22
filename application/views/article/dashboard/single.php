<div clas="row">
		<a href="<?php echo URL::base(); ?>dashboard/articles/edit/<?php echo $article->id ?>" class="btn btn-primary"><i class="icon-edit icon-white"></i> Editar</a>
		<a href="<?php echo URL::base(); ?>dashboard/articles/delete/<?php echo $article->id ?>" class="btn btn-danger"><i class="icon-trash icon-white"></i> Eliminar</a>
		<a href="<?php echo URL::base(); ?>dashboard/articles" class="btn"><i class="icon-align-justify"></i> Ver todos los art&iacute;culos</a>
</div>
<br/>
<div clas="row">
		<h1><?php echo $article->title; ?></h1>
	    <p><?php echo $article->content; ?></p>
	    <div>
	        <span class="badge badge-success">Posted <?php echo date('d-m-Y H:i', strtotime($article->time)) ?></span>
	        <div class="pull-right">
	        	<span class="label">sin categor&iacute;a</span> 
	        </div>
	    </div> 
	    <hr>
</div>

<div clas="row">
	<div clas="span6">
		<div id="comments" style="margin: 10px 0px 10px 0px">
		    <?php foreach ($article->comments->find_all() as $comment) : ?>
		        <?php echo View::factory('comment/single', array('comment'=>$comment)); ?>
		    <?php endforeach; ?>
		</div>
	</div>
</div>

<div clas="row">
	<div clas="span6">
		<?php echo View::factory('comment/form', array('comment'=>new Model_Comment(),'article'=>$article )); ?>
	</div>
</div>
