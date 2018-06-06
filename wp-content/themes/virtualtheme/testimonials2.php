 <?php
 
 //Testimonials section
	$section_bg_image = get_field('section_background_image');
	$testimonials_section_title = get_field('section_heading');
	$column1_image = get_field('image1');
	$column1_link = get_field('video_pop_up_link1');
	$column1_heading = get_field('heading1');
	$column1_excerpt = get_field('excerpt1');
	
	$column2_image = get_field('image2');
	$column2_link = get_field('video_pop_up_link2');
	$column2_heading = get_field('heading2');
	$column2_excerpt = get_field('excerpt2');
	
	$column3_image = get_field('image3');
	$column3_link = get_field('video_pop_up_link3');
	$column3_heading = get_field('heading3');
	$column3_excerpt = get_field('excerpt3');
	
	$column4_image = get_field('image4');
	$column4_link = get_field('video_pop_up_link4');
	$column4_heading = get_field('heading4');
	$column4_excerpt = get_field('excerpt4');

    
    	$column5_image = get_field('image5');
    	$column5_link = get_field('video_pop_up_link5');
    	$column5_heading = get_field('heading5');
    	$column5_excerpt = get_field('excerpt5');	
 
?>

	<script type="text/javascript">
		jQuery(function(){
			jQuery("a.videotest1").YouTubePopUp();
			jQuery("a.videotest2").YouTubePopUp();
			jQuery("a.videotest3").YouTubePopUp();			
			jQuery("a.videotest4").YouTubePopUp();
			jQuery("a.videotest5").YouTubePopUp();	
		});
	</script>

 <section id="testimonios" class="testimonio-area bg-1" style="background:url('<?php echo $section_bg_image['url'];?>') repeat scroll 0 0;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h1 class="section-title color-white"><?php echo $testimonials_section_title;?></h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="testimonial-list fix">
                                
				<div class="single-testimonial">
                                    <div class="testimonial-inner fix">
                                        <div class="testmonial-thumb">
                                            <a href="#"><img src="<?php echo $column1_image['url'];?>" alt="<?php echo $column1_image['alt'];?>"></a>
                                            <a class="videotest1 play-btn" href="<?php echo $column1_link;?>" ><i class="fa fa-play"></i></a>
                                        </div>
                                        <div class="testimonial-info">
                                            <h2 class="testimonial-title"><?php echo $column1_heading;?></h2>
                                            <p class="testimonial-contain"><?php echo $column1_excerpt;?></p>
                                        </div>
                                    </div>
                                </div>
								
				<div class="single-testimonial">
                                    <div class="testimonial-inner fix">
                                        <div class="testmonial-thumb">
                                            <a href="#"><img src="<?php echo $column2_image['url'];?>" alt="<?php echo $column2_image['alt'];?>"></a>
                                            <a class="videotest2 play-btn" href="<?php echo $column2_link;?>" ><i class="fa fa-play"></i></a>
                                        </div>
                                        <div class="testimonial-info">
                                            <h2 class="testimonial-title"><?php echo $column2_heading;?></h2>
                                            <p class="testimonial-contain"><?php echo $column2_excerpt;?></p>
                                        </div>
                                    </div>
                                </div>
								
				<div class="single-testimonial">
                                    <div class="testimonial-inner fix">
                                        <div class="testmonial-thumb">
                                            <a href="#"><img src="<?php echo $column3_image['url'];?>" alt="<?php echo $column3_image['alt'];?>"></a>
                                            <a class="videotest3 play-btn" href="<?php echo $column3_link;?>" ><i class="fa fa-play"></i></a>
                                        </div>
                                        <div class="testimonial-info">
                                            <h2 class="testimonial-title"><?php echo $column3_heading;?></h2>
                                            <p class="testimonial-contain"><?php echo $column3_excerpt;?></p>
                                        </div>
                                    </div>
                                </div>
								
				<div class="single-testimonial">
                                    <div class="testimonial-inner fix">
                                        <div class="testmonial-thumb">
                                            <a href="#"><img src="<?php echo $column4_image['url'];?>" alt="<?php echo $column4_image['alt'];?>"></a>
                                            <a class="videotest4 play-btn" href="<?php echo $column4_link;?>" ><i class="fa fa-play"></i></a>
                                        </div>
                                        <div class="testimonial-info">
                                            <h2 class="testimonial-title"><?php echo $column4_heading;?></h2>
                                            <p class="testimonial-contain"><?php echo $column4_excerpt;?></p>
                                        </div>
                                    </div>
                                </div>
                                
								
				<div class="single-testimonial">
                                    <div class="testimonial-inner fix">
                                        <div class="testmonial-thumb">
                                            <a href="#"><img src="<?php echo $column5_image['url'];?>" alt="<?php echo $column5_image['alt'];?>"></a>
                                            <a class="videotest5 play-btn" href="<?php echo $column5_link;?>" ><i class="fa fa-play"></i></a>
                                        </div>
                                        <div class="testimonial-info">
                                            <h2 class="testimonial-title"><?php echo $column5_heading;?></h2>
                                            <p class="testimonial-contain"><?php echo $column5_excerpt;?></p>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </section>