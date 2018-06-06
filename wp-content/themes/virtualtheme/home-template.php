<?php



/*



Template Name: Home Template



*/



get_header();?>







<?php



//Nosotros section



$nosotros_section_title = get_field('nosotros_section_title');



$descripcion_nosotros = get_field('descripcion_nosotros');



//result section first column



$nosotros_imagen_1 = get_field('nosotros_imagen_1');



$nosotros_texto_1 = get_field('nosotros_texto_1');



$nosotros_texto_1b = get_field('nosotros_texto_1b');



//result section second column



$nosotros_imagen_2 = get_field('nosotros_imagen_2');



$nosotros_texto_2 = get_field('nosotros_texto_2');



$nosotros_texto_2b = get_field('nosotros_texto_2b');



//result section Third column



$nosotros_imagen_3 = get_field('nosotros_imagen_3');



$nosotros_texto_3 = get_field('nosotros_texto_3');



$nosotros_texto_3b = get_field('nosotros_texto_3b');











//advanced custom fields



//result section first column



$section_title = get_field('section_title');



$section_icon_1 = get_field('image_one');



$section_counter = get_field('counter_number');



$section_content_exc = get_field('excerpt_text');



//result section second column



$section_icon_2 = get_field('image_two');



$section_counter_2 = get_field('counter_number_two');



$section_content_exc_2 = get_field('excerpt_text_two');



//result section Third column



$section_icon_3 = get_field('image_three');



$section_counter_3 = get_field('counter_number_three');



$section_content_exc_3 = get_field('excerpt_text_three');







//Clients section



$client_section_title = get_field('clients_sections_title');



$client_section_bg = get_field('client_section_background_image');



$client_section_brand = get_field('add_clients_brand_logo');







//Equipo section



$equipo_section_title = get_field('equipo_section_title');







//contact form section



$contact_section_bg = get_field('contact_background_image');



$section_heading = get_field('contact_section_heading');



$section_google_maps = get_field('google_maps');



$section_form_heading = get_field('contact_from_heading');



$section_cnt_address = get_field('contact_address');



$section_phone_number = get_field('phone_number');



$section_email = get_field('email');











//Testimonials section



global $section_bg_image_testi;



$section_bg_image_testi = get_field('section_background_image');



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







<!-- Start Slider Area -->



<?php get_template_part('slider');?>



<!-- End Slider Area -->







<!-- Start our-nosotros-area -->

<section id="servicios">



	<!-- Config - get Servicios -->

	<?php 

	$titulo_service = get_field('titulo_service');

	$Imagen_servicio1 = get_field('Imagen_servicio1');

	$texto_servicio_1 = get_field('texto_servicio_1');



	$Imagen_servicio2 = get_field('imagen_servicio2');

	$texto_servicio_2 = get_field('texto_servicio_2');

	?>

	<!-- End Config - get Servicios -->



	<div class="container servicios_container">

		<div class="row">

			<h2 class="title_servicios"><?php echo $titulo_service ?></h2>

		</div>

		<div class="row">

			<div class="col-xs-12 col-md-6 firsService">

				<div class="row">

					<div class="col-md-6">

						<p><?php echo $texto_servicio_1 ?></p>

					</div>

					<div class="col-md-6">

						<img src="<?php echo $Imagen_servicio1['url'];?>" class8="img-responsive" alt="">

					</div>

				</div>

			</div>

			<div class="col-xs-12 col-md-6 secondService">

				<div class="row">

					<div class="col-md-6">

						<p><?php echo $texto_servicio_2 ?></p>

					</div>

					<div class="col-md-6">

						<img src="<?php echo $Imagen_servicio2['url'];?>" class8="img-responsive" alt="">

					</div>

				</div>

			</div>

		</div>

	</div>

</section>

<!-- End our-nosotros-area -->



<section id="mediumPanel">

	<div class="container">

		<div class="row">

			<div class="col-md-12">

				<div class="capsule">

					<div class="title">

						<h2>En Virtual Colors</h2>

					</div>

					<div class="description">

						<p>Desarrollamos <strong>soluciones</strong> orientadas a <strong>optimizar la eficiencia</strong> de los procesos de <strong>formación</strong> y <strong>comunicación</strong> en las empresas, a través de:</p>	

					</div>

					<img src="<?php bloginfo('stylesheet_directory'); ?>/img/ornamentService2.png" class="imgDecoration" alt="">

				</div>

			</div>

		</div>

	</div>

</section>



<!-- Start our-nosotros-area -->



<section id="nosotros" class="our-result-area">







	<div class="nosotros_big-container ">



		<div class="container nosotros_container">



			<div class="row">



				<div class="col-md-12">



					<h1 class="section-title" style="text-align: center;"><?php echo $nosotros_section_title;?></h1>



					<p class="nosotros_descripcion">



						<?php echo $descripcion_nosotros;?>



					</p>



				</div>



			</div>



			<div class="row nosotros_icons">



				<div class="nosotros_icono icono1 col-md-4">



					<img src="<?php echo $nosotros_imagen_1['url'];?>" class="nosotros_img-responsive" alt="" />



					<h2><?php echo $nosotros_texto_1;?></h2>



					<br>



					<h4><?php echo $nosotros_texto_1b;?></h4>



				</div>



				<div class="nosotros_icono  col-md-4">



					<img src="<?php echo $nosotros_imagen_2['url'];?>" class="nosotros_img-responsive" alt="" />



					<h2><?php echo $nosotros_texto_2;?></h2>



					<br>



					<h4><?php echo $nosotros_texto_2b;?></h4>



				</div>



				<div class="nosotros_icono icono3 col-md-4">



					<img src="<?php echo $nosotros_imagen_3['url'];?>" class="nosotros_img-responsive" alt="" />



					<h2><?php echo $nosotros_texto_3;?></h2>



					<br>



					<h4><?php echo $nosotros_texto_3b;?></h4>



				</div>



			</div>



		</div>



	</div>







</section>



<!-- End our-nosotros-area -->



<!-- Start beneficion blue -->

<section id="blueBeneficios">

	<div class="container">	

		<div class="row">	

			<div class="col-md-6">

				<div class="contentTitle">	

					<h2>Beneficios de las Soluciones que desarrollamos:</h2>

				</div>

			</div>

			<div class="col-md-6 contentItemBeneficios">

				<ul class="itemBeneficios">	

					<li><strong>Mayor flexibilidad</strong> en los horarios para la capacitación de personal</li>

					<li><strong>Fácil acceso</strong> desde cualquier lugar y/o dispositivo para la formación</li>

					<li><strong>Capacitación masiva</strong> del personal </li>

					<li><strong>Ahorro</strong> de <strong>tiempo</strong> y <strong>disminución de costos</strong> en operaciones </li>

					<li><strong>Optimización de los recursos</strong> de la empresa</li>

					<li><strong>Mayor eficiencia</strong> en proceso operativos</li>

					<li><strong>Los usuarios se divierten</strong> mientras aprenden a través de los videojuegos educativos</li>

				</ul>

			</div>



		</div>

	</div>	

</section>



<!-- End beneficion blue -->





<!-- Start Necesitas Ayuda -->

<section id="helpSection">

	<div class="container">	

		<div class="row">	

			<div class="col-md-6 contetText">

				<h2>DESCUBRE CÓMO AUMENTAR LA <strong>PRODUCTIVIDAD</strong> DE TUS COLABORADORES.</h2>

				<br>

				<p>Te damos una solución eficiente para cada necesidad.</p>

			</div>

			<a href="#" id="openCantactForm">

				

			<div class="col-md-6 contetLink">

							<!-- <p class="link-link">Escribenos para recibir más información sobre nuestro Portafolio</p> -->

					<!-- <div class="row">	

						<div class="col-xs-11 col-md-11">	

							<div class="link-img">	</div>

						</div>

					</div> -->

					<br>

					<button class="btnLinkPopUp center-block">

						Contáctanos AHORA!

					</button> 

						

						

			</div>



			</a>

		</div>

	</div>	

</section>



<!-- End Necesitas Ayuda -->





<!-- Start our-result-area -->



<section id="resultados" class="our-result-area">



	<div class="container">



		<div class="row">



			<div class="col-md-12 text-center">



				<h1 class="section-title"><?php echo $section_title;?></h1>



			</div>



		</div>



	</div>



	<div class="our-result-list fix fix2">



		<div class="single-result">



		<div class="iconandnumber fix fix2">



			<div class="res-icon"><img src="<?php echo $section_icon_3['url'];?>" alt="<?php echo $section_icon_1['alt'];?>"></div>



			<div class="count-number">



				<h1 class="counter"><?php echo $section_counter_3;?></h1></div>



			</div>



			<p class="count-content">



				<?php echo $section_content_exc_3;?>



			</p>



		</div>

		

		<div class="single-result">



			<div class="iconandnumber fix fix2">



				<div class="res-icon"><img src="<?php echo $section_icon_1['url'];?>" alt="<?php echo $section_icon_1['alt'];?>"></div>



				<div class="count-number">



					<h1 class="counter"><?php echo $section_counter;?></h1></div>



				</div>



				<p class="count-content">



					<?php echo $section_content_exc;?>



				</p>



			</div>





			<div class="single-result">



				<div class="iconandnumber fix fix2">



					<div class="res-icon"><img src="<?php echo $section_icon_2['url'];?>" alt="<?php echo $section_icon_1['alt'];?>"></div>



					<div class="count-number">



						<h1 class="counter"><?php echo $section_counter_2;?></h1></div>



					</div>



					<p class="count-content">



						<?php echo $section_content_exc_2;?>



					</p>



				</div>



				







				</div>



			</section>



			<!-- End our-result-area -->











			<!-- Start Clientes Area   -->



			<section id="clientes" class="clientes-area bg-1 overlay-bg" style=" background:url('<?php echo $client_section_bg['url'];?>') no-repeat scroll center center / cover ;">



				<div class="container">



					<div class="row">



						<div class="col-md-12 text-center">



							<h1 class="section-title color-white"><?php echo $client_section_title;?></h1>



						</div>



					</div>



					<div class="row">



						<div class="col-md-12 slideTextCustom">



							<?php 

							$args = array( 'post_type' => 'client', 'posts_per_page' => 10 );

							$loop = new WP_Query( $args );

							while ( $loop->have_posts() ) : $loop->the_post();





							echo '<div>'; 

							/*the_title();*/

							the_content();



							echo '</div>'; 



							endwhile;





							?>



						</div>

						<br>

						<br>

						<br>

						<br>

						<br>

						<br>	

						<div class="owl-nav-style-1 our-clinnts-list clearfix">





							<?php



/*



$loop = new WP_Query(array(



'post_type' => 'client','posts_per_page' => 50,



'orderby' => 'post_id',



'order' => 'ASC'



));



?>



<?php global $post; // required



$args = array(



'post_type' => 'client','posts_per_page' => 50,



'orderby' => 'post_id',



'order' => 'ASC'



); 







$custom_posts = get_posts($args);



foreach($custom_posts as $post) : setup_postdata($post);



the_title();

the_content();

the_post_thumbnail();



endforeach;

*/

?>



</div>



</div>



</div>



</div>



</section>



<!-- End Clientes Area   -->



<!-- Start Client Logos -->



<section id="clientLogo">	

	<div class="container-fluid">	

		<div class="row">	

			<div class="col-md-12">

				<h2>Clientes</h2>

			</div>

		</div>



		<div class="row">	

			<div class="col-md-4">

				<img src="<?php bloginfo('stylesheet_directory'); ?>/img/logosClientes/logo1.png" alt="" class="img-responsive">

			</div>



			<div class="col-md-4">

				<img src="<?php bloginfo('stylesheet_directory'); ?>/img/logosClientes/logo2.png" alt="" class="img-responsive">

			</div>



			<div class="col-md-4">

				<img src="<?php bloginfo('stylesheet_directory'); ?>/img/logosClientes/logo3.png" alt="" class="img-responsive">

			</div>

		</div>

		<div class="row">	

			<div class="col-md-4">

				<img src="<?php bloginfo('stylesheet_directory'); ?>/img/logosClientes/logo4.png" alt="" class="img-responsive">

			</div>

			<div class="col-md-4">

				<img src="<?php bloginfo('stylesheet_directory'); ?>/img/logosClientes/logo5.png" alt="" class="img-responsive">

			</div>


			<div class="col-md-4 boxCliente">

				<img src="<?php bloginfo('stylesheet_directory'); ?>/img/logosClientes/logo17.png" alt="" class="img-responsive">

			</div>


		</div>



		<div class="row">	

			<div class="col-md-4 boxCliente">

				<img src="<?php bloginfo('stylesheet_directory'); ?>/img/logosClientes/logo16.png" alt="" class="img-responsive">

			</div>

			<div class="col-md-4">

				<img src="<?php bloginfo('stylesheet_directory'); ?>/img/logosClientes/logo6.png" alt="" class="img-responsive">

			</div>

			<div class="col-md-4 boxCliente">

				<img src="<?php bloginfo('stylesheet_directory'); ?>/img/logosClientes/logo7.png" alt="" class="img-responsive">

			</div>

		</div>


		<div class="row">	


			<div class="col-md-4 boxCliente">

				<img src="<?php bloginfo('stylesheet_directory'); ?>/img/logosClientes/logo8.png" alt="" class="img-responsive">

			</div>

			<div class="col-md-4 boxCliente">

				<img src="<?php bloginfo('stylesheet_directory'); ?>/img/logosClientes/logo9.png" alt="" class="img-responsive">

			</div>

			<div class="col-md-4 boxCliente2">

				<img src="<?php bloginfo('stylesheet_directory'); ?>/img/logosClientes/logo10.png" alt="" class="img-responsive">

			</div>

		</div>



		<div class="row">	

			<div class="col-md-4 boxCliente2">

				<img src="<?php bloginfo('stylesheet_directory'); ?>/img/logosClientes/logo11.png" alt="" class="img-responsive">

			</div>

			<div class="col-md-4 boxCliente2">

				<img src="<?php bloginfo('stylesheet_directory'); ?>/img/logosClientes/logo12.png" alt="" class="img-responsive">

			</div>

			<div class="col-md-4 boxCliente">

				<img src="<?php bloginfo('stylesheet_directory'); ?>/img/logosClientes/logo13.png" alt="" class="img-responsive">

			</div>

		</div>


		<div class="row">	


			<div class="col-md-4 boxCliente">

				<img src="<?php bloginfo('stylesheet_directory'); ?>/img/logosClientes/logo14.png" alt="" class="img-responsive">

				<br>

			</div>

			<div class="col-md-4 boxCliente">

				<img src="<?php bloginfo('stylesheet_directory'); ?>/img/logosClientes/logo15.png" alt="" class="img-responsive">

				<br>

			</div>
			

			<div class="col-md-4 boxCliente">

				<br>

			</div>


		</div>


	</div>

</section>		



<!-- End Client Logos -->







<!-- Start testimonio area -->







<script type="text/javascript">



	jQuery(function(){



		jQuery("a.videotest1").YouTubePopUp();



		jQuery("a.videotest2").YouTubePopUp();



		jQuery("a.videotest3").YouTubePopUp();			



		jQuery("a.videotest4").YouTubePopUp();



		jQuery("a.videotest5").YouTubePopUp();	



	});



</script>







<section id="testimonios" class="testimonio-area bg-1" style="background:url('<?php echo $section_bg_image_testi['url'];?>') repeat scroll 0 0;">



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



<!-- FIN testimonio area -->







<!-- Start Portafolio area -->



<?php get_template_part('portfolio');?>



<!-- End Portafolio area -->



<!-- line Notros start -->



<section id="lineNosotros">



	<div class="container">



		<div class="row">

			<h2 class="lineNosotros___title">Nosotros</h2>

		</div>



		<div class="row wrapeerLine hidden-sm hidden-xs">

			<div class="col-xs-12 col-sm-12 col-md-4">

				<div class="contentElemnts1">

					<h2>2006</h2>

					<p class="textBottom"><strong>Iniciamos</strong> en el <strong>Área de E-learning</strong>, con cursos cortos multimedia para el área de <strong>servicios a la salud del SENA</strong></p>

				</div>

			</div>





			<div class="col-xs-12 col-sm-12 col-md-4">

				<div class="contentElemnts2">

					<p class="textTop">Apoya la <strong>Educación vial</strong> con la creación del <strong>primer curso virtual “del conductor”</strong>, para la <strong>Secretaría de Movilidad  de Medellín</strong></p>

					<h2>2008</h2>

				</div>

			</div>



			<div class="col-xs-12 col-sm-12 col-md-4">

				<div class="contentElemnts3">

					<h2>2010</h2>

					<p class="textBottom">Incursiona en el <strong>Área de Desarrollo de Aplicaciones</strong> para el <strong>Grupo SURA, RENTING COLOMBIA, GRUPO COOMEVA, CORONA</strong></p>

				</div>

			</div>

		</div>



		<div class="row wrapeerLine visible-sm  visible-xs ">

				<br>

				<br>

				<br>

				<br>	

			<div class="col-xs-12 col-sm-12 col-md-4">

				

					<h2 class="movilAltenate1">2006</h2>

					<p class="textBottom"><strong>Iniciamos</strong> en el <strong>Área de E-learning</strong>, con cursos cortos multimedia para el área de <strong>servicios a la salud del SENA</strong></p>

			

			</div>





			<div class="col-xs-12 col-sm-12 col-md-4">

				

					<h2 class="movilAltenate2">2008</h2>

					<p class="textTop">Apoya la <strong>Educación vial</strong> con la creación del <strong>primer curso virtual “del conductor”</strong>, para la <strong>Secretaría de Movilidad  de Medellín</strong></p>

				

			</div>



			<div class="col-xs-12 col-sm-12 col-md-4">

				

					<h2 class="movilAltenate3">2010</h2>

					<p class="textBottom">Incursiona en el <strong>Área de Desarrollo de Aplicaciones</strong> para el <strong>Grupo SURA, RENTING COLOMBIA, GRUPO COOMEVA, CORONA</strong></p>

				

			</div>

		</div>







		<div class="row step2017">

			<div class="col-xs-12 col-md-1">

				<h2>2018</h2>

			</div>

			<div class="col-xs-12 col-md-11">

				<p>Seguimos ayudando a las empresas a capacitar personal, <strong>creando soluciones a la medidas de sus necesidades</strong>  y buscando mejorar sus procesos administrativos.</p>

				<br><br>



			</div>

			<p style="font-size: 18px; text-align: center;"><strong>	Nuestras habilidades</strong> nacen a partir de las necesidades de nuestros clientes, buscando ofrecer siempre, el mejor servicio,

a través de:</p>

		</div>

		<div class="row">

			<div class="col-md-2 habilidadesLogos col-md-offset-1">

			<img class="img-responsive center-block" src="<?php bloginfo('stylesheet_directory'); ?>/img/logosHabilidad/1.png" class="" alt="">

			<p class="withPadding">Flexibilidad</p></div>

			<div class="col-md-2 habilidadesLogos">

			<img class="img-responsive center-block" src="<?php bloginfo('stylesheet_directory'); ?>/img/logosHabilidad/2.png" class="" alt="">

			<p class="withPadding">Innovación</p></div>

			<div class="col-md-2 habilidadesLogos">

			<img class="img-responsive center-block" src="<?php bloginfo('stylesheet_directory'); ?>/img/logosHabilidad/3.png" class="" alt="">

			<p>Capacidad de análisis y resolución de problemas</p></div>

			<div class="col-md-2 habilidadesLogos">

			<img class="img-responsive center-block" src="<?php bloginfo('stylesheet_directory'); ?>/img/logosHabilidad/4.png" class="" alt="">

			<p class="withPadding">Servicio al cliente</p></div>

			<div class="col-md-2 habilidadesLogos borderNoneAux">

			<img class="img-responsive center-block" src="<?php bloginfo('stylesheet_directory'); ?>/img/logosHabilidad/5.png" class="" alt="">

			<p class="withPadding">Trabajo en equipo</p></div>

		</div>





	</div>



</section>

<!-- line Notros End -->





<!-- Satrt grapicArea -->

<!-- <section id="grapic" class=" hidden-xs">



	<div class="container">

		<div class="row">

			<div class="col-sm-12 col-md-3 col-md-3">

				<h2 class="grapic__title">Habilidades</h2>

			</div>

			<div class="col-sm-12 col-md-9 hidden-xs">



				<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

                   



				<div id="donutchart" class="hidden-xs" style="width: 800px; height: 500px;">

				</div>

				<img class="titleGrapic1" src="<?php //bloginfo('stylesheet_directory'); ?>/img/titleGrapic1.png" alt="">

				<img class="titleGrapic2" src="<?php //bloginfo('stylesheet_directory'); ?>/img/titleGrapic2.png" alt="">

				<img class="titleGrapic3" src="<?php //bloginfo('stylesheet_directory'); ?>/img/titleGrapic3.png" alt="">

				<img class="titleGrapic4" src="<?php //bloginfo('stylesheet_directory'); ?>/img/titleGrapic4.png" alt="">



			</div>

		</div>

	</section> -->

	<!-- End grapicArea -->



	<section id="valoresSection" style="background:url('<?php echo $section_bg_image_testi['url'];?>') repeat scroll 0 0;">

		<div class="container">

			

			<div class="row">	

				<div class="col-md-12">	

					<h3 class="valoresSection__title">Valores</h3>

				</div>

			</div>

			<div class="row">	

				<div class="col-md-12 wrapperValores">	

					<strong>Transparencia</strong>

					<p>Es nuestra cualidad de transmitir un mensaje claro, oportuno y veraz, para realizar acciones y negociaciones en busca de beneficios mutuos, que permitan la construcción de relaciones a largo plazo.</p>

					<br>	

					<strong>Confianza</strong>

					<p>Nuestras acciones están orientadas a transmitir seguridad, maximizando el potencial de resultados de nuestros clientes.</p>

					<br>	

					<strong>Responsabilidad</strong>

					<p>Estamos comprometidos con potencializar nuestras habilidades, para responder a las exigencias de un mercado, cada vez más dinámico y cambiante. </p>

					<br>	

					<strong>Respeto</strong>

					<p>Construimos relaciones armoniosas, entendiendo y aceptando las diferencias, que nos permitan plantear acuerdos, a fin de construir acercamientos que mejoren las oportunidades de beneficios mutuos.</p>

					<br>	

					<strong>Puntualidad</strong>

					<p>Priorizamos la calidad y entrega a tiempo de nuestros productos y servicios, buscando satisfacer la necesidad y superando la expectativa de nuestros clientes, para ser merecedores de confianza.</p>

					<br>	

				</div>

			</div>

			<div class="row">	

				<div class="col-md-12"><p class="lastText"><strong>Lifestyle:</strong> Nuestros procesos están pensados desde: la <strong>innovación</strong>, la <strong>creatividad</strong> y la <strong>funcionalidad.</strong></p></div>

			</div>



		</div>

	</section>





	<!-- Starts quipo Area -->



	<section id="equipo" class="img-slider-area">



		<div class="container">



			<div class="row">



				<div class="col-md-12 text-center">



					<h1 class="section-title"><?php echo $equipo_section_title;?></h1>



				</div>



			</div>



		</div>



		<div class="img-slider-inner">



			<div class="slider-list owl-nav-style-2">







				<?php



				$loop = new WP_Query(array(



					'post_type' => 'equipo_slider',



					'orderby' => 'post_id',



					'order' => 'ASC'



					));



					?>







					<?php if($loop->have_posts()) : while($loop->have_posts()) : $loop->the_post(); ?>



						<div class="single-clients">



							<div class="single-slide">



								<?php the_post_thumbnail();?>



							</div>



						</div>



					<?php  endwhile;?>



				<?php endif;?>



			</div>



		</div>



	</section>



	<!--End squipo Area-->



	<?php echo get_template_part('team-member')?>



	<!-- Start contact-area -->



	<section id="contactenos" class="contact-area overlay-bg bg-1" style="background: url('<?php echo $contact_section_bg['url'];?>') no-repeat scroll center center / cover ;">



		<div class="container">



			<div class="row">



				<div class="col-md-12 text-center">



					<h1 class="section-title color-white"><?php echo $section_heading;?></h1>



				</div>



			</div>



			<div class="row">



				<div class="col-md-6 one-half left">







					<div class="google-pam-area">



						<div class="map-inner">



							<?php // echo do_shortcode( '[gmap-embed id="590"]' );?>



							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.2805140799665!2d-75.57035568523087!3d6.226697995492625!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e4682320f2db61f%3A0xc722e930a9cb59d9!2sVIRTUAL+COLOR+S.A.S!5e0!3m2!1ses!2sco!4v1489410025349" width="100%" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>



						</div>



					</div>



				</div>



				<div class="col-md-6 one-half right">



					<div class="contact-form-area fix">



						<div class="contact-form-inner">



							<?php dynamic_sidebar('contactform');?>



						</div>



					</div>



					<div class="clear"></div>



					<address class="address-area">



						<div class="address-inner">



							<div class="s-address fix">



								<span class="icon"><i class="fa fa-map-marker"></i></span>



								<p class="content"><?php echo $section_cnt_address;?></p>



							</div>



							<div class="s-address fix">



								<span class="icon"><i class="fa fa-phone"></i></span>



								<p class="content"><?php echo $section_phone_number; ?></p>



							</div>



							<div class="s-address fix">



								<span class="icon"><i class="fa fa-envelope"></i> </span>



								<p class="content"><?php echo $section_email?></p>



							</div>



						</div>



					</address>



				</div>



			</div>



		</div>



	</section>



	<!-- End contact-area -->





	<!-- Start popUpContacT -->

	<section id="popUpContact">

			<!-- NO ESTA 404

			<script src="https://rawgit.com/yuanqing/autosize-input/master/autosize-input.min.js"></script>

			-->



			<div class="btnClosePopUp">

				<i class="fa fa-times fa-1x" aria-hidden="true"></i>

			</div>

			<div class="step1">

				<h2 style="text-align: center;">Cuéntenos un poco sobre usted o sobre su empresa</h2>

				<a href="#" class="finishStep1" style="text-align: center;">Continuar <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i></a>



			</div>



			<div class="step2">

				<h2><span class="isExpresion">"</span>

				<select name="" id="popUpContact__trato" style="color: rgba(0,0,0,.2);">

					<option selected="selected">Quien eres?</option>	

					<option value="Soy" style="color: rgba(0,0,0,.7);">Soy</option>	

					<option value="Somos" style="color: rgba(0,0,0,.7);">Somos</option>	

				</select>

				<input type="text" id="nameBusiness" class="popUpContact__campo" placeholder="Escriba nombre" size="15">

					<span class="step3">

							Actualmente existe la necesidad de hacer

							<input type="text" id="popUpContact__interest" class="popUpContact__campo" placeholder="un curso para capacitación de asesores" size="33">

					</span>



					<span class="step4">

							Y para esto solicitamos información sobre

							<select name="" id="popUpContact__product">

								<option selected="selected" >Seleccione</option>	

								<option value="E-learning">E-learning</option>	

								<option value="Desarrollo web-móvil" >Desarrollo web-móvil</option>	

								<option value="Videojuegos educativos">Videojuegos educativos</option>	

							</select>

							<span class="isExpresion">"</span>

					</span>	



					<span class="step5">

							Mejorará el mundo, centrándose en la

							<input type="text" id="industry" class="popUpContact__campo" placeholder="industria" onkeypress="this.style.width = (this.value.length * 18) + 18 + 'px'" size="7">

					</span>	

				</h2>

			</div> 

			



			<div class="step6">

				<h2 style="text-align: center; margin-bottom: -1px;" ="">Nos encantaría conocer un poco más acerca de ustedes para lo cual dejo mis datos de contacto:</h2>

				<br>

				<for class="form-horizontal">

					

					<div class="form-group">

			    	<label class="col-sm-1 iconFormPopUp"><i class="fa fa-user" aria-hidden="true"></i></label>

			    	<div class="col-sm-12">

			    		<input type="text" class="form-control" id="nombreCliente" placeholder="Nombre">

			    		<div class="msnAlert"></div>

			    	</div>

			  	</div>

			  	<div class="form-group">

			    	<label class="col-sm-1 iconFormPopUp"=""><i class="fa fa-envelope-o" aria-hidden="true"></i></label>

			    	<div class="col-sm-12">

			    		<input type="email" class="form-control" id="emailCliente" placeholder="Email">

			    		<div class="msnAlert"></div>

			    	</div>

			  	</div>

			  	<div class="form-group">

			    	<label class="col-sm-1 iconFormPopUp" style="font-size: 25px; padding: 0px 0px; text-align: center;"><i class="fa fa-mobile" aria-hidden="true"></i></label>

			    	<div class="col-sm-12">

			    		<input type="text" class="form-control" id="telCliente" placeholder="Teléfono">

			    	</div>

			  	</div>

			  	<!-- <div class="form-group">

			    	<label class="col-sm-2" for="exampleInputEmail1">¿TIENES UNA PÁGINA WEB?</label>

			    	<input type="text" class="form-control" id="pagCliente">

			  	</div>

			  	<div class="form-group">

			  		<br>

				    <label class="col-sm-2" for="exampleInputFile">ALGO MÁS QUE AÑADIR? </label>

				    <input type="file" id="exampleInputFile" id="fileCliente">

				  </div> -->

				  <div class="form-group" style="margin-bottom: -10px; margin-top: -15px">

				  	<br>

				    <label class="col-sm-1 iconFormPopUp" ><i class="fa fa-commenting" aria-hidden="true"></i></label>

				    <div class="col-sm-12">	

				    	<textarea class="form-control" rows="3" id="msgCliente" placeholder="Mensaje"></textarea>

				    	<div class="msnAlert"></div>

				    </div>



				  </div>

				</for>

				  <!-- <div class="form-group">

					   <br>

					  <label class="col-sm-2" for="confirmSuscribete">¿QUIERES ESTAR AL DÍA CON VIRTUAL COLORS?</label>

				  	<div class="checkbox">

					    <label class="col-sm-2">

					      <input type="checkbox" id="confirmSuscribete" id="boletinCliente"> SUSCRÍBETE A NUESTRO BOLETÍN

					    </label>

					  </div>

				  </div> -->

				  <div class="row">

					   <div class="form-group auxcvMovil" style="margin-bottom: -10px; margin-top: -15px; margin-right: -25px;">

					  	<div class="col-xs-12 col-md-6 col-lg-6">

					  	</div>

					  	<div class="col-xs-12 col-md-6 col-lg-6">

					  		<input type="button" id="sendMailPopUp" class="sendPouUpForm" value="Enviar">

					  		<input type="button" class="cancelPouUpForm" value="Cancelar" style="background: #e8909c; margin-right: 49px; max-width: 100px;">

					  		<i class="loadSendMail fa fa-refresh fa-spin fa-3x fa-fw"></i>

					  		<!-- <img src='<?php //bloginfo('stylesheet_directory'); ?>/img/Preloader_2.gif' class='imgDecoration' alt=''> -->

						  	<br>

						  	<br>

						  	<br>

				  	</div>

					  <p class="resultSend text-right"></p>

				  </div>

				</div>

			</div>

		

			<p class="msnProgress"></p>

	</section> 

	<!-- End popUpContacT -->







	<?php get_footer();?>







