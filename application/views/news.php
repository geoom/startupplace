<!--start: Wrapper-->
	<div id="wrapper">
		<!--start: Container -->
    	<div class="container">
			<!-- start: Portfolio -->
			<div id="portfolio-wrapper" class="row">
				<?php foreach ($articles as $story) : ?>
					<div class="span3 portfolio-item">
						<div class="picture">
							<a href="posts/<?php echo $story->id ?>" title="Title">
								<img src="<?php echo URL::base(); ?>assets/img/photo.jpg" alt=""/>
								<div class="image-overlay-link"></div>
							</a>
							<div class="item-description alt">
								<h5><a href="posts/<?php echo $story->id ?>"><?php echo $story->title ?></a></h5>
								<p>
									Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.  
								</p>
							</div>
							<div class="post-meta">
								<span>
									<i class="mini-ico-calendar"></i><?php echo $story->time ?>
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