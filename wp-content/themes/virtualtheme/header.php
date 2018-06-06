<!doctype html>

<html class="no-js" lang="<?php language_attributes();?>">

    <head>

        <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests"> 

        <meta charset="<?php bloginfo('charset');?>">

        <meta http-equiv="x-ua-compatible" content="ie=edge">

        <meta name="description" content="<?php bloginfo('description');?>">

        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1">		

        <?php wp_head();?>
		
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-W937CBN');</script>
<!-- End Google Tag Manager -->		

    </head>

    <body>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W937CBN"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

        <!--[if lt IE 8]>

            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>

        <![endif]-->



        <div class="wrapper">

            <div id="home"></div>

            <header class="header-area">

                <!-- Start Header Bottom -->

                <div class="header-inner">

                    <div class="container">

                        <div class="row hidden-sm hidden-xs">

                            <!-- Start Logo -->

                            <div class="col-md-2 hidden-sm hidden-xs">

                                <div class="header-logo">

                                    <a href="<?php bloginfo('home');?>"><img src="<?php echo get_theme_mod('logo_uploader');?>" alt="Header logo" /></a>

                                </div>

                            </div>

                            <!-- End Logo -->

                            <!-- Start Main Menu -->

                            <!-- <div class="col-md-10 col-lg-10 hidden-xs hidden-sm "> -->

			        <div class="col-md-9 col-lg-9 hidden-xs hidden-sm " style="margin-left: -75px;">

                                <div class="menu-wrap pull-right">

                                    <nav class="primary-menu">

										

										<?php

											wp_nav_menu(array(

												'theme_location' => 'main-menu',

												'fallback_cb'=> 'default_main_menu',

												'menu_class' => 'menu-list',

												'wakler'=>new virtual_nav_menu(),

												'container' => ' '

											));

										?>

                                       

                                    </nav>

                                </div>

                            </div>



                            <!-- Star social option  -->

                            <div class="col-md-2 hidden-sm hidden-xs" style="float: right;">

                                    <div class="social-midea">
                                        <p class="headerRedes">Síguenos en:</p>
                                        <ul>

                                            <li><a href="https://www.facebook.com/virtualcolors/" class="facebook" target="_blank"><i class="fa fa-facebook"></i></a></li>

                                            <li><a href="https://twitter.com/virtual_colors?lang=es" class="twitter" target="_blank"><i class="fa fa-twitter"></i></a></li>

                                            <li><a href="https://www.google.com.co/maps/place/VIRTUAL+COLOR+S.A.S/@6.226698,-75.568167,15z/data=!4m5!3m4!1s0x0:0xc722e930a9cb59d9!8m2!3d6.226698!4d-75.568167" class="googleplus" target="_blank"><i class="fa fa-google-plus"></i></a></li>

                                         </ul>

                                    </div>

                            </div>



                            

                            <!-- End Main Menu -->

                        </div>

                    </div>

                </div>

                <!-- End Header Bottom -->

                <!-- mobile logo -->

                <div class="mobile-logo text-center padding50  hidden-lg hidden-md ">

                    <a href="index.html"><img src="<?php echo get_template_directory_uri();?>/img/logo/1.png" alt="Header logo" /></a>

                </div>

                <!-- Start Mobile Menu -->

                <div class='mobile-menu-area clearfix hidden-lg hidden-md'>

                    <nav id="mobile-menu">

                        <ul>

                            <li class="current smoot-menu"><a href="#home">Inicio</a></li>

                            <li class="smoot-menu"><a href="#servicios">Servicios</a></li>

                            <li class="smoot-menu"><a href="#resultados">Resultados</a></li>

                            <li class="smoot-menu"><a href="#clientLogo">Clientes</a></li>

                            <li class="smoot-menu"><a href="#portafolio">Portafolio</a></li>

                            <li class="smoot-menu"><a href="#lineNosotros">Quienes somos</a></li>

			    <li class="smoot-menu"><a href="https://virtualcolors.com/blog/">Blog</a></li>

                            <li class="smoot-menu"><a href="#contactenos">Contacto</a></li>	

                        </ul>

                    </nav>

                </div>



                <!--End Mobile Menu -->

            </header>