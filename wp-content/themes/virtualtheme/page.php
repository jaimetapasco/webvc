<?php get_header();?>
		<div class="container">
			<div class="row">
				<?php if(have_posts()):the_post();?>
					<?php the_content();?>
				<?php endif;?>
					
			</div>
		</div>

<?php get_footer();?>
