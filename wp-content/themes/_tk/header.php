<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package _tk
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<title><?php wp_title( '|', true, 'right' ); ?></title>

	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
  <!-- FONTS -->
   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,400italic,600,600italic,700,700italic">
   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:400,300,500,600,700">

   <!-- FANCYBOX -->
   <link rel="stylesheet" href="/wp-content/themes/_tk/includes/css/fancybox/jquery.fancybox.css">
   <!-- OWL Carousel -->
   <link rel="stylesheet" href="/wp-content/themes/_tk/includes/css/owl-carousel/owl.carousel.css">
  <link rel="stylesheet" href="/wp-content/themes/_tk/includes/css/owl-carousel/owl.transitions.css">
   <!-- ANIMATIONS -->
   <link rel="stylesheet" href="/wp-content/themes/_tk/includes/css/animations/animate.min.css">

</head>

<body <?php body_class(); ?>>
	<?php do_action( 'before' ); ?>

<div id="main-container">
  <!-- HEADER -->
      <header id="header">

          <div class="container-fluid">
              <div class="row">
                  <div class="col-sm-3">

                      <!-- LOGO -->
          <div id="logo">
            <a href="index.html">
              <img src="assets/images/logo.png" alt="">
            </a>
          </div><!-- LOGO -->

                  </div><!-- col -->
                  <div class="col-sm-9">

          <!-- MENU -->
                      <nav>
                          <a id="mobile-menu-button" href="#"><i class="oslo-icon-menu55"></i></a>

                            <!-- The WordPress Menu goes here -->
                  					<?php wp_nav_menu(
                  						array(
                  							'theme_location' 	=> 'primary',
                                'container'         => '<li>',
                  							'container_class'   => 'dropdown',
                  							'menu_class' 		=> 'menu clearfix',
                  							'fallback_cb' 		=> 'wp_bootstrap_navwalker::fallback',
                  							'menu_id'			=> 'menu',
                  							'walker' 			=> new wp_bootstrap_navwalker()
                  						)
                  					); ?>

                      </nav>

                  </div><!-- col -->
              </div><!-- row -->
          </div><!-- container-fluid -->

      </header><!-- HEADER -->
