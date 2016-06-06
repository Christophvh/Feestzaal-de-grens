<?php
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
  <!-- Google Analytics -->
    <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-45258724-5', 'auto');
    ga('send', 'pageview');
    </script>
    <!-- End Google Analytics -->
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
      							<div class="left-header">
                      <i class="fa fa-map-marker" aria-hidden="true"></i> Bredabaan 58  2990 Wuustwezel
                      <i class="fa fa-phone" aria-hidden="true"></i> <a href="tel:+32476497930">+32(0)476 49 79 30</a>
                      <i class="fa fa-envelope-o" aria-hidden="true"></i><a href="mailto:feestzaaldegrens@promis-events.be">feestzaaldegrens@promis-events.be</a>
                    </div>
      							<div class="right-header">
      								<div class="social">
      									<a href="https://www.facebook.com/feestzaaldegrens/"><i class="fa fa-facebook"></i></a>
      									<a href="https://plus.google.com/107773458694078560816/about"><i class="fa fa-google-plus"></i></a>
      								</div>
      							</div>
      						</div>
      					</div>
      					<div id="main-header" class="main-header header-sticky">
      						<div class="inner-header clearfix">
      							<div class="logo">
      								<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img class="logo-holder" src="/wp-content/themes/_tk/includes/img/logo.png" alt="Feestzaal De Grens Logo"></a>
      							</div>
      							<div class="header-right-toggle pull-right">
      								<a href="javascript:void(0)" class="side-menu-button"><i class="fa fa-bars"></i></a>
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
