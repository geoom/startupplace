<!-- start: Page Title -->
<div id="page-title">
	<div id="page-title-inner" style="padding: 3px">
	</div>	
</div>
<!-- end: Page Title -->
<!--start: Wrapper-->
<div id="wrapper">
	<!--start: Container -->
	<div class="container">
		<!--start: Row -->
		<div class="row">
			<div class="span8 offset2">
				<!-- start: Post -->
				<div class="post post-page">
					<div class="post-content">
						<div class="post-title">
								<h1><?php echo $article->title ?></h1>
							</div>
						<div class="post-meta">
							<span><i class="mini-ico-calendar"></i><?php echo $article->time ?> </span>
							<span><i class="mini-ico-user"></i>Por <a href="#"><?php echo $author->username ?> </a></span>
						</div>
						<div class="post-description">
							<p>
								<?php echo $article->content ?>
							</p>
						</div>
					</div>
				
				</div>
				<!-- end: Post -->
				<div style="height: 20px"></div>
				<!-- start: Comments -->
				<div class="comments-sec">
					<div id="disqus_thread"></div>
				    <script type="text/javascript">
				        /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
				        var disqus_shortname = 'startupplace'; // required: replace example with your forum shortname

				        /* * * DON'T EDIT BELOW THIS LINE * * */
				        (function() {
				            var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
				            dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
				            (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
				        })();
				    </script>
				    <noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
				    <a href="http://disqus.com" class="dsq-brlink">comments powered by <span class="logo-disqus">Disqus</span></a>
				</div>
				<!-- end: Comments -->
				<div class="clear"></div>
			</div>	
	</div>
	<!--end: Container-->
</div>
<!-- end: Wrapper  -->