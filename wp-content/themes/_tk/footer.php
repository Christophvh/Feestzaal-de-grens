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
        <div class="col-md-3 col-sm-6 widget">
          <span class="image-placeholder"><img src="assets/images/logo-light.png" alt=""></span>
          <div class="widget-text">
            <p>Lumbersexual roof party crucifix, hoodie synth Shoreditch 3 wolf moon 90's retro four loko chillwave Marfa Pitchfork. Occupy mlkshk meditation Intelligentsia stum.</p>
          </div>
          <div class="spacer"></div>
        </div>
        <div class="col-md-3 col-sm-6 widget">
          <h4 class="widget-title">Recent posts</h4>
          <div class="widget-recent-posts">
            <ul class="footer-list">
              <li><a href="#">Lumbersexual roof party crucifix</a></li>
              <li><a href="#">Hoodie synth Shoreditch 3 wolf moon</a></li>
              <li><a href="#">90's retro four loko chillwave</a></li>
              <li><a href="#">Marfa Pitchfork Occupy mlkshk</a></li>
              <li><a href="#">Meditation Intelligentsia stum</a></li>
            </ul>
          </div>
          <div class="spacer"></div>
        </div>
        <div class="col-md-3 col-sm-6 widget">
          <h4 class="widget-title">Flickr stream</h4>
          <div class="flickr-feed">
            <ul class="flickr-images">
            </ul>
          </div>
          <div class="spacer"></div>
        </div>
        <div class="col-md-3 col-sm-6 widget">
          <h4 class="widget-title">Newsletter</h4>
          <div class="widget-text newsletter">
            <p>Lumbersexual roof party crucifix, hoodie synth Shoreditch 3 wolf moon.</p>
            <form method="get" id="subscribe-form" class="subscribe-form">
              <input type="text" class="subscribe-field" name="s" placeholder="Enter Email" value="">
              <button class="subscribe-submit">Submit</button>
            </form>
          </div>
          <div class="spacer"></div>
        </div>
      </div>
    </div>
  </div>
  <div class="footer-copyright">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">&copy; 2015 Artcore, All Rights Reserved</div>
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
