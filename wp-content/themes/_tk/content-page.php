<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package _tk
 */
?>
<section id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div class="container">
          <div class="row section-header">
            <div class="col-sm-12 text-center">
              <h3><?php the_title(); ?></h3>
                <p><?php the_field('subtitle'); ?></p>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <?php the_content(); ?>
              <?php
                wp_link_pages( array(
                  'before' => '<div class="page-links">' . __( 'Pages:', '_tk' ),
                  'after'  => '</div>',
                ) );
              ?>
              <?php edit_post_link( __( 'Edit', '_tk' ), '<span class="edit-link">', '</span>' ); ?>
            </div>
          </div>
        </div>
</section>
