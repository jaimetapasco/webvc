<?php
	$prefix = "_virtual_";
?>
<section id="team" class="our-team-area padding-t50">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="team-list fix" id="content">
                    <?php									
						$loop = new WP_Query(array(									
							'post_type' => 'team_member','posts_per_page' => 20,
                                                        'orderby' => 'ID',									
							'order' => 'ASC'									
							));								
						?>
                        <?php if($loop->have_posts()) : while($loop->have_posts()) : $loop->the_post(); ?>
						
						<div class="single-team-member">
							<div class="single-team-member-inner">
								
								<div class="member-thumb">
									<img class="main-image" src="<?php echo get_post_meta( get_the_ID(), $prefix.'member_image', true); ?>" alt="" /> 
									<!--
									<img class="hover-img" src="<?php echo get_post_meta( get_the_ID(), $prefix.'member_image_hover', true); ?>" alt="" />
									-->
								</div>
								
								<div class="member-info">
									<h3 class="member-name"><?php the_title();?></h3>
									<p><?php echo get_post_meta(get_the_ID(), $prefix.'member_position',true);?></p>
								</div>
							</div>
							<!--
							<div class="teammember modal fade in" style="display: none;">
								<div class="modal-dialog modal-lg">
									<div class="modal-content">
										<div class="modal-close-icon">
											<button type="button" class="close" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										</div>
										<div class="modal-body">
											<div class="member-details-info fix">
												<div class="mem-det-thumb one-half"> <img src="<?php echo get_post_meta( get_the_ID(), $prefix.'member_image', true); ?>" alt=""> </div>
												<div class="mem-det-info one-half">
													<div class="mem-det-info-inner">
														<h2><?php the_title();?></h2>
														<h4 class="mem-post"><?php echo get_post_meta(get_the_ID(), $prefix.'member_position',true);?></h4>
														<div class="social-midea">
															<ul>
																<?php
																	$facebook = get_post_meta(get_the_ID(), $prefix.'facebook',true);
																	$twitter = get_post_meta(get_the_ID(), $prefix.'twitter',true);
																	$googleplus = get_post_meta(get_the_ID(), $prefix.'googleplus',true);
																	$dribbble = get_post_meta(get_the_ID(), $prefix.'dribbble',true);
																	$linkedin = get_post_meta(get_the_ID(), $prefix.'linkedin',true);
																?>
															
																<?php if(!empty($facebook)): ?>
																	<li><a href="<?php echo $facebook;?>" class="facebook" target="_blank"><i class="fa fa-facebook"></i></a></li>
																<?php endif;?>
																
																<?php if(!empty($twitter)): ?>
																	<li><a href="<?php echo $twitter;?>" class="twitter" target="_blank"><i class="fa fa-twitter"></i></a></li>
																<?php endif;?>
																
																<?php if(!empty($googleplus)): ?>
																	<li><a href="<?php echo $googleplus;?>" class="googleplus" target="_blank"><i class="fa fa-google-plus"></i></a></li>
																<?php endif;?>
																
																<?php if(!empty($dribbble)): ?>
																	<li><a href="<?php echo $dribbble;?>" class="dribbble" target="_blank"><i class="fa fa-dribbble"></i></a></li>
																<?php endif;?>
																
																<?php if(!empty($linkedin)): ?>
																	<li><a href="<?php echo $linkedin;?>" class="linkedin" target="_blank"><i class="fa fa-linkedin"></i></a></li>
																<?php endif;?>
																
															</ul>
														</div>
														<div class="mem-content-wrap">
															<p class="mem-det-content"><?php the_content();?></p>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
-->
						</div>
                            
					<?php  endwhile; wp_reset_postdata()?>
					<?php endif;?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Our Team Area -->