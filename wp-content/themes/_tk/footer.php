<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package _tk
 */
?>
<footer>
  <div class="footer-widgets">
    <div class="container">
      <div class="row">
        <div class="spacer"></div>
        <?php if ( is_active_sidebar( 'footer_1' ) ) : ?>
        		<?php dynamic_sidebar( 'footer_1' ); ?>
        <?php endif; ?>
      </div>
    </div>
  </div>
  <div class="footer-copyright">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">&copy; <?php echo date('Y'); ?> Feestzaal De Grens, All Rights Reserved</div>
      </div>
    </div>
  </div>
</footer>

<a href="#" class="go-top"><i class="fa fa-angle-up"></i></a>

</div>

</div>

<nav class="sidebar-menu slide-from-left">
  <div class="nano">
    <div class="content">
      <nav class="responsive-menu">
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
</nav>

</div>

<?php wp_footer(); ?>
<script src="/wp-content/themes/_tk/includes/js/custom.min.js" type="text/javascript"></script>
<script src="/wp-content/themes/_tk/includes/js/plugins.min.js" type="text/javascript"></script>
</body>
</html>
