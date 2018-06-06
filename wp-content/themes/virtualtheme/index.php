<?php get_header();?>
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<div class="breadcrumbs">
						<a href="index.html">Home</a><span class="separator">&gt;</span><span> Blog</span>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-9">
					<!-- single post start-->
					<?php
						// Start the Loop.
						while ( have_posts() ) : the_post();
							/*
							 * contenido
							 */
							?>
					<div class="single-blog post blog-fullwidth">
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
								<div class="post-thumbnail">
									<div class="post-meta ontop">
										<span class="entry-date"><span class="day"><?php $post_date = get_the_date( 'D M j' ); echo $post_date; ?></span><span class="month">March</span></span>	
										<div class="entry-comment"><a href=""><span>3</span> comments</a></div>
									</div>
									<a href="#">
										<?php the_post_thumbnail(); ?>
									</a>
								</div> 
							</div>
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
								<div class="postinfo-wrapper">
									<div class="post-date">
										<span class="day"> <?php echo $post_date; ?> </span><!--<span class="month">Mar</span>-->
									</div>
									<div class="post-info">
										<h1 class="blog-post-title">
											<a href="#"><?php the_title(); ?></a>
										</h1>
										<div class="entry-meta-small">
											/ Publicado por <span class="author vcard"><a rel="author" title="View all posts by admin" href="#" class="url fn n">Admin</a></span> 
										</div>
										<div class="entry-summary">
										<?php the_content(); ?>
										</div>
										<!--
										<a href="#" class="readmore">read more<i class="fa fa-arrow-right"></i></a>
										-->
									</div>
								</div>
							</div>
						</div>
					</div>
							</div>
							<?php
							// If comments are open or we have at least one comment, load up the comment template.
							if ( comments_open() || get_comments_number() ) {
								comments_template();
							}
						endwhile;
					?>
					<!-- single post end-->
					<div class="clear"></div>
					<!-- pagination start -->

					<!-- pagination end -->
				</div>
				<?php get_template_part('sidebar');?>
			</div>
		</div>

<?php get_footer();?>
