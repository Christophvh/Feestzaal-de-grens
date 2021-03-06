<?php
/**
 * The Template for displaying all single posts.
 *
 * @package _tk
 */

get_header(); ?>
<section class="latest-news">
      <div class="container">
        <!-- <div class="row section-header">
          <div class="col-sm-12 text-center">
            <h3>Blog Classic</h3>
            <p>Odd future photo booth flannel ethnic keffiyeh</p>
          </div>
        </div> -->
        <div class="row">
          <div class="col-md-8 blog-classic">


	<?php while ( have_posts() ) : the_post(); ?>

		<?php get_template_part( 'content', 'single' ); ?>
    <div class="row">
      <div class="col-sm-12">
        <hr>
        <div class="project-nav hidden-xs">
            <?php previous_post_link( '<div class="project-prev">%link</div>', '' . _x( '', 'Previous post link', '_tk' ) . '<i class="fa fa-angle-left"></i> %title' ); ?>

              <?php next_post_link( '<div class="project-next">%link</div>', '%title <i class="fa fa-angle-right"></i>' . _x( '', 'Next post link', '_tk' ) . '' ); ?>
        </div>
      </div>
    </div>



		<?php
			// If comments are open or we have at least one comment, load up the comment template
			if ( comments_open() || '0' != get_comments_number() )
				comments_template();
		?>

	<?php endwhile; // end of the loop. ?>

  <div class="spacer"></div>
  </div>

  <div id="sidebar" class="col-md-4">
    <?php get_sidebar(); ?>
  </div>
</div>
</div>
</section>
<?php get_footer(); ?>
