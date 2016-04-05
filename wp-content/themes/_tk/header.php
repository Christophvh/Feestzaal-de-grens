<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package _tk
 */
?><!DOCTYPE html>
<html itemscope="itemscope" itemtype="http://schema.org/Webpage" <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<title><?php wp_title( '|', true, 'right' ); ?></title>

	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
  <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,700' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Radley:400,400italic' rel='stylesheet' type='text/css'>
</head>

<body <?php body_class(); ?>>
	<?php do_action( 'before' ); ?>
  <div class="sidebar-menu-container" id="sidebar-menu-container">

		<div class="sidebar-menu-push">

			<div class="sidebar-menu-overlay"></div>

			<div class="sidebar-menu-inner">
        <header class="site-header">
      					<div class="top-header">
      						<div class="inner-header clearfix">
      							<div class="left-header">In placerat ultricies sapien et venenatis</div>
      							<div class="right-header">
      								<div class="social">
      									<a href="#"><i class="fa fa-facebook"></i></a>
      									<a href="#"><i class="fa fa-twitter"></i></a>
      									<a href="#"><i class="fa fa-linkedin"></i></a>
      									<a href="#"><i class="fa fa-google-plus"></i></a>
      									<a href="#"><i class="fa fa-rss"></i></a>
      								</div>
      							</div>
      						</div>
      					</div>
      					<div id="main-header" class="main-header header-sticky">
      						<div class="inner-header clearfix">
      							<div class="logo">
      								<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img class="logo-holder" src="assets/images/logo.png" alt="Artcore"></a>
      							</div>
      							<div class="header-right-toggle pull-right">
      								<a href="javascript:void(0)" class="side-menu-button"><i class="fa fa-bars"></i></a>
      							</div>
      							<div class="search-menu-button pull-right hidden-sm hidden-xs">
      								<a href="javascript:void(0)" class="search-link"><i class="fa fa-search"></i></a>
      								<div class="search-wrap">
      									<form method="get" class="search-form">
      										<input type="text" placeholder="Search here" name="s" autocomplete="off">
      									</form>
      								</div>
      							</div>
      							<nav class="main-navigation pull-right hidden-xs hidden-sm">
                      <!-- The WordPress Menu goes here -->
                      <?php wp_nav_menu(
                        array(
                          'theme_location' 	=> 'primary',
                          'menu_class' 		=> 'nav navbar-nav',
                          'fallback_cb' 		=> 'wp_bootstrap_navwalker::fallback',
                          'menu_id'			=> 'main-menu',
                          'walker' 			=> new wp_bootstrap_navwalker()
                        )
                      ); ?>

      							</nav>
      						</div>
      					</div>
      				</header>
