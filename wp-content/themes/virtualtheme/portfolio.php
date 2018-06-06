<?php





	//portfolio section title

	//$portfolio_section_heading = get_field('portfolio_section_title');





	$prefix = "_virtual_";

?>



	<script type="text/javascript">

		function pauseAll() {

			jQuery('iframe[src*="vimeo.com"]').each(function() {

				$f(this).api('unload');

			});

		}

	</script>



	<!-- Start Protfolio area -->

	<section id="portafolio" class="protfolio-area">

		<div class="container">

			<div class="row">

				<div class="col-md-12 text-center">

					<h1 class="section-title ">Portafolio</h1>

				</div>

			</div>

		</div>

		<div class="protfolio-item-area">
		<div class="screenOnloadItmes">
	
		</div>
			<div class="protfolio-inner">

				<div class="protfolio-tab-menu">

					<ul class="prot-menu-list">

						<li id="newItemsFilter" class="active">Lo nuevo</li>

						<?php

									$categories = get_terms(array('portfolio_category'));

									foreach($categories as $category) : ?>

							<li class="filter" data-filter=".<?php echo $category->slug; ?>">

								<?php echo $category->name; ?>

							</li>

							<?php endforeach; ?>



					</ul>

				</div>



				<div class="protfolio-tab-content">

					<div class="product-list fix">









						<?php

									global $paged;

									$posts_per_page = 40;

									$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

									$settings = array(

										'showposts' => $posts_per_page,

										'post_type' => 'portfolio_section',

										'orderby' => 'menu_order',

										'order' => 'ASC',

										'paged' => $paged);



									$post_query = new WP_Query( $settings );

									$total_found_posts = $post_query->found_posts;

									$total_page = ceil($total_found_posts / $posts_per_page);

									while($post_query->have_posts()) : $post_query->the_post();

									?>



							<div class="mix webdesign single-product

											<?php

											$categories = get_the_terms(get_the_id(), 'portfolio_category');

											foreach($categories as $category) : ?>

												<?php echo $category->slug; ?>

											<?php endforeach; ?>

										">

								<div class="product-thumb">

									<img src="<?php echo get_post_meta( get_the_ID(), $prefix.'portfolio_image', true); ?>" alt="">

								</div>

								<div class="product-title">

									<h2><?php the_title();?></h2>

								</div>



								<!-- Start Protfolio Modal-->

								<div class="portfoliomodal modal fade in" style="display: none;">

									<div class="modal-dialog" role="document" >

										<div class="modal-content" style="">

											<div class="modal-header" style="background: black;">

												<button onclick="pauseAll();" type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

												<h4 class="modal-title" id="myModalLabel" style="font-weight: bolder;color: rgb(130, 190, 65);"><?php the_title();?></h4>

											</div>

											<div class="modal-body">

												<div class="container-fluid">

													<div class="col-md-8 col-lg-8">

														<iframe src="<?php echo get_post_meta( get_the_ID(), $prefix.'portfolio_video', true); ?>" frameborder="0" width="700" height="400" webkitallowfullscreen mozallowfullscreen allowfullscreen style="width:100%">

														</iframe>

													</div>

													<div class="col-md-4 col-lg-4 hidden-xs">

														<div class="content-text" style="text-align: justify;">

															<?php the_content();?>

														</div>

													</div>

												</div>

											</div>

											<!-- Fin Body  -->

										</div>

									</div>

								</div>

								<!-- End Protfolio Modal-->

							</div>

							<?php  endwhile;?>





					</div>





					<div class="row">

						<div class="pagination-area">

							<div class="col-md-12 text-left">

								<ul class="page-numbers">



									<?php

											/*

												if( function_exists('wp_pagenavi') ) {

												echo ' '.wp_pagenavi(array('query' => $post_query, 'echo' => false)).' ';

												} else {

												echo '<li class="indegator previous">'.previous_posts_link( 'Previous Posts' ).'</li> <li class="indegator next">'.next_posts_link( 'Next Posts <i class="fa fa-angle-right"></i>' , $total_page ).'</li>';

												}

											*/

											?>





										<!-- <li class="indegator previous"><a href="#"><i class="fa fa-angle-left"></i></a></li> -->

									<li class="page-number"><a href="#" id="panel1" class="page-number">1</a></li>

									<li><a href="#" id="panel2" class="page-number">2</a></li>

									<li><a href="#" id="panel3" class="page-number">3</a></li>

									<li class="noBorderLi"><a href="#" id="panel4" class="page-number">4</a></li>

									<!-- <li class="indegator next"><a href="#"><i class="fa fa-angle-right"></i></a></li> -->

								</ul>

							</div>

						</div>

					</div>



				</div>

			</div>

		</div>

	</section>


	<!-- End Portafolio area -->

