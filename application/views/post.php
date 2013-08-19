<!--start: Wrapper-->
<div id="wrapper">
	<!--start: Container -->
	<div class="container">
		<!--start: Row -->
		<div class="row">
			<div class="span9">
				<!-- start: Post -->
				<div class="post post-page">
					<div class="post-content">
						<div class="post-description">
							<p>
								<?php echo $article->content ?>
							</p>
						</div>
						<div class="post-meta">
							<span><i class="mini-ico-calendar"></i><?php echo $article->time ?> </span>
							<span><i class="mini-ico-user"></i>Por <a href="#"><?php echo $author->username ?> </a></span>
							<span><i class="mini-ico-comment"></i><a href="#">3 Comments</a></span>
						</div>
					</div>
				
				</div>
				<!-- end: Post -->
				<!-- start: Comments -->
				<h4>Comments <span class="comments-amount">(12)</span></h4>
				<div class="comments-sec">
					<ol class="commentlist">
						<li>
							<div class="comments">
								<div class="avatar"><img src="http://www.gravatar.com/avatar/00000000000000000000000000000000?d=mm&s=50" alt="" width="50" height="50" border="0" /> </div>
								<div class="comment-des">
								<div class="comment-by"><strong>Lucas Luck</strong><span class="reply"><span style="color:#aaa">/ </span><a href="#">Reply</a></span> <span class="date">June 1, 2012</span></div>
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. </p>
								</div>
							</div>

							<ol class="childlist">
								<li>
								<div class="comments">
													<div class="avatar"><img src="http://www.gravatar.com/avatar/00000000000000000000000000000000?d=mm&s=50" alt="" border="0" /> </div>
									<div class="comment-des">
								<div class="comment-by"><strong>Lucas Luck</strong><span class="reply"><span style="color:#aaa">/ </span><a href="#">Reply</a></span> <span class="date">June 1, 2012</span></div>
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
									</div>
								</div>
								</li>
							</ol>		
						</li>

						<li>
							<div class="comments">
								<div class="avatar"><img src="http://www.gravatar.com/avatar/00000000000000000000000000000000?d=mm&s=50" alt="" border="0" /> </div>
								<div class="comment-des">
								<div class="comment-by"><strong>Lucas Luck</strong><span class="reply"><span style="color:#aaa">/ </span><a href="#">Reply</a></span> <span class="date">June 1, 2012</span></div>
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
								</div>
							</div>
						</li>
					</ol>

				</div>
				<!-- end: Comments -->
				<div class="clear"></div>
				<!-- start: Comment Add -->
				<h4>Leave a Comment</h4>
				<div class="form-spacer"></div>					
				<!-- end: Comment Add -->
			</div>	
			<!-- start: Sidebar -->
			<div class="span3 hidden-phone">
				<!-- start: Sidebar Menu -->
				<div class="widget">
					<div class="title"><h3>Menu</h3></div>
					<ul class="links-list-alt">
						<li><a href="full_width.html">Item one</a></li>
					</ul>
				</div>
				<!-- end: Sidebar Menu -->
				<!-- start: Tags -->
				<div class="widget">
					<div class="title"><h3>Tags</h3></div>
					<div class="tags">
						<a href="#">No tag</a>
					</div>
				</div>
				<!-- end: Tags -->
			</div>
			<!-- end: Sidebar -->
	</div>
	<!--end: Container-->
</div>
<!-- end: Wrapper  -->