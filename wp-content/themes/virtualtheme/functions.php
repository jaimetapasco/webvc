<?php

	



	//Virtual theme functions after theme setup 



	function virtual_functions(){



		load_theme_textdomain('virtual', get_template_directory().'/lang');



		add_theme_support('title-tag');



		add_theme_support('post-thumbnails');

		

		register_nav_menu('main-menu',__('Main Menu', 'virtual'));

		

		function default_main_menu(){

			$menu = "<ul class='menu-list'>";

			$menu.= "<li class='smoot-menu'><a href='".home_url()."'>Home</a></li>";

			$menu = "</ul>";

			echo $menu;

		}

		



	}

	add_action('after_setup_theme', 'virtual_functions');





	//adding style and sccripts for this virtual website 





	function virtual_scripts(){



		// only for style sheep all css file here 

		wp_enqueue_style('Open+Sans','https://fonts.googleapis.com/css?family=Open+Sans:400,700,800,400italic,600',array());

		wp_enqueue_style('bootstrap', get_template_directory_uri(). '/css/bootstrap.min.css',array());

		wp_enqueue_style('animate', get_template_directory_uri(). '/css/animate.css',array());

		wp_enqueue_style('meanmenu', get_template_directory_uri(). '/css/meanmenu.min.css',array());

		wp_enqueue_style('owlcarousel', get_template_directory_uri(). '/css/owl.carousel.css',array());

		wp_enqueue_style('jquery_video_css', get_template_directory_uri(). '/css/jquery.video.css',array());

		wp_enqueue_style('fontawesone', get_template_directory_uri(). '/css/font-awesome.min.css',array());

		wp_enqueue_style('nivo-slider', get_template_directory_uri(). '/lib/css/nivo-slider.css',array());

		wp_enqueue_style('preview', get_template_directory_uri(). '/lib/css/preview.css',array());
		wp_enqueue_style('slick', get_template_directory_uri(). '/css/slick.css',array());
		wp_enqueue_style('slickTheme', get_template_directory_uri(). '/css/slick-theme.css',array());

				

		//main stylesheeet file

		wp_enqueue_style('stylesheeet',get_stylesheet_uri());

		wp_enqueue_style('responsive', get_template_directory_uri(). '/css/responsive.css',array());

		

		//VIMEO AND YOUTUBE POPUP STYLE

		wp_enqueue_style('video3', get_template_directory_uri(). '/css/youtubepopup.css',array());





		//modernizer js

		wp_enqueue_script('modernizer', get_template_directory_uri(). '/js/vendor/modernizr-2.8.3.min.js', array());
		wp_enqueue_script('slick', get_template_directory_uri(). '/js/slick.js', array());
		





		//adding all script file

		wp_enqueue_script('jquery');

	

		wp_enqueue_script('bootstrapjs', get_template_directory_uri() . '/js/bootstrap.min.js',array('jquery'),'',true);

		wp_enqueue_script('carousel', get_template_directory_uri() . '/js/owl.carousel.min.js',array('jquery'),'',true);

		wp_enqueue_script('wowjs', get_template_directory_uri() . '/js/wow.min.js',array('jquery'),'1.1',true);

		wp_enqueue_script('nivo_slider', get_template_directory_uri() . '/lib/js/jquery.nivo.slider.js',array('jquery'),'',true);

		wp_enqueue_script('homejs', get_template_directory_uri() . '/lib/home.js',array('jquery'),'',true);

		wp_enqueue_script('counterup', get_template_directory_uri() . '/js/jquery.counterup.min.js',array('jquery'),'',true);

		wp_enqueue_script('countdp', 'https://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js');

		wp_enqueue_script('meanmenujs', get_template_directory_uri() . '/js/jquery.meanmenu.js',array('jquery'),'',true);

		wp_enqueue_script('nav', get_template_directory_uri() . '/js/jquery.nav.js',array('jquery'),'',true);

		//YOUTUBE POPUP

	        wp_enqueue_script('video', get_template_directory_uri() . '/js/jquery.video.js',array('jquery'),'',true);



		//VIMEO AND YOUTUBE POPUP

		wp_enqueue_script('video2', get_template_directory_uri() . '/js/youtubepopup.jquery.js',array('jquery'),'',true);





		//VIMEO STOP VIDEO

		wp_enqueue_script('videostop', get_template_directory_uri() . '/js/froogaloop2.min.js',array('jquery'),'',true);



		wp_enqueue_script('scrollspy', get_template_directory_uri() . '/js/jquery.scrolly.js',array('jquery'),'',true);

		wp_enqueue_script('sticy', get_template_directory_uri() . '/js/jquery.sticky.js',array('jquery'),'',true);

		wp_enqueue_script('plugins', get_template_directory_uri() . '/js/plugins.js',array('jquery'),'',true);

		wp_enqueue_script('maps-api','https://maps.googleapis.com/maps/api/js?key=AIzaSyClrXDLyAsVI59xuhQYAWD63xd_uLi3nO8',array('jquery'),'',true);

		//GOOGLE MAPS

		//wp_enqueue_script('google-maps', get_template_directory_uri() . '/js/google-custom.js',array('jquery'),'',true);



		wp_enqueue_script('mixitup', get_template_directory_uri() . '/js/jquery.mixitup.min.js',array('jquery'),'',true);

		//wp_enqueue_script('TimelineMax', get_template_directory_uri(). '/js/TweenLite.min.js', array());
		wp_enqueue_script('TimelineMax', get_template_directory_uri(). '/js/TweenMax.min.js', array());

		wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js',array('jquery'),'',true);



	}

	add_action('wp_enqueue_scripts','virtual_scripts');

	

	

	//Require Files

	if (file_exists(dirname(__FILE__).'/walker-menu.php')){

		require_once(dirname(__FILE__).'/walker-menu.php');

	}

	

	

	function virtual_custom_post_types(){

		//register post type for the team members

		register_post_type ('team_member',array(

			'labels' => array(

				'name' => __('Teams p','virtual'),

				'singular_name' => __('Team r','virtual'),

				'add_new' => __('Add New Team Member','virtual'),

			),

			'public' => true,

			'supports' => array('title','editor')

		));

		

		//register portfolio

		register_post_type ('portfolio_section',array(

			'labels' => array(

				'name' => __('Portfolios','virtual'),

				'singular_name' => __('Portfolio','virtual'),

				'add_new' => __('Add New Portfolio','virtual'),

			),

			'public' => true,

			'supports' => array('title','editor')

		));

		

		//register custom taxonomy for the portfolio category

		register_taxonomy('portfolio_category','portfolio_section',array(

			'labels' => array(

				'name' => __('Categories','virtual'),

				'singular_name' => __('Categorie','virtual'),

				'add_new' => __('Add New Categorie','virtual'),

			),

			'public' => true,

			'hierarchical' => true

		));

		

	}

	add_action( 'init', 'virtual_custom_post_types' );

	

	//register sidebar for google maps

	function sidebar_for_google_maps(){

		register_sidebar(array(

			'name' => 'Contact Form Bottom',

			'description' => 'You can put here Contact Form Shortcode',

			'id' => 'contactform',

			'before_title' => '<h2 class="color-white">',

			'after_title'=> '</h2>'

		));

	}

	add_action('widgets_init','sidebar_for_google_maps');



	

	//customizer API

	function customizedapi($customizedapi){

		$customizedapi -> add_section('header_section',array(

			'title'=>'Header Options',

			'priority'=>20

		));

		

		

		//logo upload fields

		$customizedapi -> add_setting('logo_uploader',array(

			'default'=>'VirtualColors',

			'transport'=>'refresh'

		));

		

		

		$customizedapi -> add_control(

			new WP_Customize_Image_Control($customizedapi,'logo_uploader',array(

				'section' => 'header_section',

				'label'   => 'Upload your logo here ',

				'settings'=> 'logo_uploader'

			))

		);

		

		

		//SOCIAL ICONS LINK

		$customizedapi -> add_section('header_section_social',array(

			'title'=>'Footer Social Icons & Copyright',

			'priority'=>40

		));

		

		//social icon link facebook

		$customizedapi -> add_setting('add_social_link_fb',array(

			'default'=>'https://',

			'transport'=>'refresh'

		));

		

		

		//social title & label

		$customizedapi -> add_control('add_social_link_fb',array(

			'section'=>'header_section_social',

			'label'=>'Facebook Url',

			'type'=>'url'

		));

		

		//social icon link twitter

		$customizedapi -> add_setting('add_social_link_tw',array(

			'default'=>'https://',

			'transport'=>'refresh'

		));

		

		

		//social title & label twitter

		$customizedapi -> add_control('add_social_link_tw',array(

			'section'=>'header_section_social',

			'label'=>'Twitter Url',

			'type'=>'url'

		));

		

		

		//social icon link twitter

		$customizedapi -> add_setting('add_footer_text',array(

			'default'=>'VirtualColors © 2016',

			'transport'=>'refresh'

		));

		

		

		//social title & label twitter

		$customizedapi -> add_control('add_footer_text',array(

			'section'=>'header_section_social',

			'label'=>'Footer copy right text',

			'type'=>'text'

		));

		

		

		

	}

	add_action('customize_register','customizedapi');

	

	

	//include metabox

	require_once('metabox/init.php');

	require_once('metabox/functions.php');