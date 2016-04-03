<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package _tk
 */
?>
<!-- CONTENT -->
      <div id="page-content">





          <div class="container">
              <div class="row">
                  <div class="col-sm-12">

                      <h3>Pellentesque habitant morbi</h3>

                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla tortor in ullamcorper ultricies. Morbi lacinia augue arcu,
                          eu cursus nibh ornare vel. Quisque ac nisi congue, sagittis neque nec, eleifend lorem. Integer id neque ultrices orci vehicula
                          volutpat. Morbi vel risus ullamcorper, vehicula massa eget, rhoncus velit. Duis risus nibh, rhoncus at placerat non, vulputate nec
                          massa. Pellentesque malesuada orci et ultrices.</p>

                      <p>Etiam placerat sit amet tellus gravida mattis. Etiam eget eros nec sapien consequat semper. Quisque ut ligula sapien. Nulla in
                          feugiat ipsum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vivamus luctus nec enim
                          ac varius. Ut sagittis quis leo eu pellentesque. Vivamus at metus congue, interdum velit at, posuere eros. Duis vehicula leo nunc, ac
                          accums nisl pretium pretium.</p>

                  </div><!-- col -->
              </div><!-- row -->
          </div><!-- container -->

          <br>

          <div class="container">
              <div class="row">
                  <div class="col-sm-6">

                      <h4>Lorem ipsum dolor sit amet</h4>

                      <p>Pellentesque ut nunc pharetra, venenat urna vitae, dictum arcu. Sed accums enim tincidunt tortor ullamcorper cursus.
                          Vestibulum cursus fringilla ex, non aliquam arcu ullamcorper at. Interdum et malesuada fames ac ante ipsum primis in faucibus.
                          Vestibulum sem felis, imperdiet at scelerisque a, efficitur ut est. Pellentesque habitant morbi tristique senectus et netus et
                          malesuada fames ac turpis.</p>

                  </div><!-- col -->
                  <div class="col-sm-6">

                      <h4>Etiam sed enim et velit cursus</h4>

                      <p>Proin pulvinar justo lacus, vitae varius dolor rhoncus at. Ut ac ante vitae enim vestibulum fermentum ac a mauris. Donec
                          tristique, ligula et condimentum ultricies, felis nunc volutpat sapien, quis ullamcorper nisl turpis at risus. Lorem ipsum dolor sit
                          amet, consectetur adipiscing elit. Etiam sed enim et velit cursus facilisis a non nunc. Morbi eget libero ac quam sodales pharetra.
                          Vivamus convallis hendrerit. </p>

                  </div><!-- col -->
              </div><!-- row -->
          </div><!-- container -->

          <br>

          <div class="container">
              <div class="row">
                  <div class="col-sm-12">

                      <h3>Vivamus at metus congue interdum</h3>

                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla tortor in ullamcorper ultricies. Morbi lacinia augue arcu,
                          eu cursus nibh ornare vel. Quisque ac nisi congue, sagittis neque nec, eleifend lorem. Integer id neque ultrices orci vehicula
                          volutpat. Morbi vel risus ullamcorper, vehicula massa eget, rhoncus velit. Duis risus nibh, rhoncus at placerat non, vulputate nec
                          massa. Pellentesque malesuada orci et ultrices.</p>

                      <p>Etiam placerat sit amet tellus gravida mattis. Etiam eget eros nec sapien consequat semper. Quisque ut ligula sapien. Nulla in
                          feugiat ipsum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vivamus luctus nec enim
                          ac varius. Ut sagittis quis leo eu pellentesque. Vivamus at metus congue, interdum velit at, posuere eros. Duis vehicula leo nunc, ac
                          accums nisl pretium pretium.</p>

                  </div><!-- col -->
              </div><!-- row -->
          </div><!-- container -->

      </div><!-- PAGE CONTENT -->
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <div id="page-header">
      <div class="container">
          <div class="row">
              <div class="col-sm-12">

                  <h2><?php the_title(); ?></h2>

                  <ol class="breadcrumb">
                      <li><a href="#">Home</a></li>
                      <li class="active">No Sidebar</li>
                  </ol>

              </div><!-- col -->
          </div><!-- row -->
      </div><!-- container -->
  </div><!-- page-header -->
  <div class="container">
      <div class="row">
          <div class="col-sm-12 text-center">

              <div class="headline">

                  <p>Sample page</p>
                  <h2>Page without sidebar</h2>

              </div><!-- headline -->

          </div><!-- col -->
      </div><!-- row -->
  </div><!-- container -->

	<div class="entry-content">
		<div class="entry-content-thumbnail">
			<?php the_post_thumbnail(); ?>
		</div>
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', '_tk' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
	<?php edit_post_link( __( 'Edit', '_tk' ), '<footer class="entry-meta"><span class="edit-link">', '</span></footer>' ); ?>
</article><!-- #post-## -->
