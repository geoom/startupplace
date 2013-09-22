<!-- start: Page Title -->
<div id="page-title">
	<div id="page-title-inner">
		<!-- start: Container -->
		<div class="container">
			<h2><i class="ico-pencil ico-white"></i>Historias tecnol&oacute;gicas</h2>
		</div>
		<!-- end: Container  -->
	</div>
</div>
<!-- end: Page Title -->

<!--start: Wrapper-->
	<div id="wrapper">
		<!--start: Container -->
    	<div class="container">
			<!-- start: Portfolio -->
			<div id="portfolio-wrapper" class="row">
				<?php foreach ($articles as $story) : ?>
					<div class="span3 portfolio-item">
						<div class="picture">
							<div class="item-description">
								<div class="title">
									<a href="<?php echo URL::base(); ?>news/<?php echo $story->slug ?>"><?php echo $story->title ?></a>
								</div>
								<p>
									<?php echo substr($story->content, 0, 100)?>
								</p>
							</div>
							<div class="post-meta">
								<span>
									<i class="mini-ico-calendar"></i>
									<?php echo date('d-m-Y H:i', strtotime($story->time)) ?>
								</span> 
								<span>
									<i class="mini-ico-user"></i> 
									<a href="#"><?php $article_author = ORM::Factory("User", $story->user_id); echo $article_author->username ?></a>
								</span> 
							</div>	
						</div>
					</div>
				 <?php endforeach; ?>
			</div>
			<!-- end: Portfolio -->      	
		</div>
		<!--end: Container-->
	</div>
	<!-- end: Wrapper  -->	