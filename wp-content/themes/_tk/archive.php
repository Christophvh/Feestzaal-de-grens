<?php

get_header(); ?>

<section class="latest-news">
  <div class="container">

    <div class="row section-header">
      <div class="col-sm-12 text-center">
        <h3>	<?php
						if ( is_category() ) :
							single_cat_title();

						elseif ( is_tag() ) :
							single_tag_title();

						elseif ( is_author() ) :
							/* Queue the first post, that way we know
							 * what author we're dealing with (if that is the case).
							*/
							the_post();
							printf( __( 'Auteur: %s', '_tk' ), '<span class="vcard">' . get_the_author() . '</span>' );
							/* Since we called the_post() above, we need to
							 * rewind the loop back to the beginning that way
							 * we can run the loop properly, in full.
							 */
							rewind_posts();

						elseif ( is_day() ) :
							printf( __( 'Dag: %s', '_tk' ), '<span>' . get_the_date() . '</span>' );

						elseif ( is_month() ) :
							printf( __( 'Maand: %s', '_tk' ), '<span>' . get_the_date( 'F Y' ) . '</span>' );

						elseif ( is_year() ) :
							printf( __( 'Jaar: %s', '_tk' ), '<span>' . get_the_date( 'Y' ) . '</span>' );

						elseif ( is_tax( 'post_format', 'post-format-aside' ) ) :
							_e( 'Asides', '_tk' );

						elseif ( is_tax( 'post_format', 'post-format-image' ) ) :
							_e( 'Images', '_tk');

						elseif ( is_tax( 'post_format', 'post-format-video' ) ) :
							_e( 'Videos', '_tk' );

						elseif ( is_tax( 'post_format', 'post-format-quote' ) ) :
							_e( 'Quotes', '_tk' );

						elseif ( is_tax( 'post_format', 'post-format-link' ) ) :
							_e( 'Links', '_tk' );

						else :
							_e( 'Archief', '_tk' );

						endif;
					?></h3>
          <p>	<?php
    					// Show an optional term description.
    					$term_description = term_description();
    					if ( ! empty( $term_description ) ) :
    						printf( $term_description );
    					endif;
    				?></p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-8 blog-classic">
            <?php if ( have_posts() ) : ?>
      	<!-- pagination here -->

      	<!-- the loop -->
        <?php while ( have_posts() ) : the_post(); ?>
          <div class="blog-post">
            <div class="post-thumb">
              <a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>">
                <?php if ( has_post_thumbnail() ): ?>
                <?php the_post_thumbnail('blog-img'); ?>
                <?php else: ?>
                  <img src="http://placehold.it/1200x650/" alt="<?php the_title(); ?>">
                <?php endif; ?>
              </a>
            </div>
            <div class="post-content clearfix">
              <div class="post-date">
                  <span class="day"><?php the_time('d'); ?> </span>
                  <span class="month"><?php the_time('M'); ?></span>
              </div>
              <div class="right">
                <div class="post-header">
                  <h3 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                  <span class="post-meta"><?php the_category( ',' ); ?> ,
                    <?php the_time( get_option( 'date_format' ) ); ?>
                    <span class="taglist pull-right">
                    <?php $tags = get_the_tag_list( '  #', __( '  #', '_tk' ));
                      if($tags){
                        echo $tags;
                      }
                     ?>
                     </span>
                  </span>
                </div>
                <p><?php the_excerpt(); ?></p>
                <p>
                  <a href="<?php the_permalink(); ?>" class="read-more">Lees Meer ..</a>
                </p>
              </div>
            </div>
          </div>


        <div class="spacer"></div>
      <?php endwhile; ?>
      <div class="row">
    		<div class="col-sm-12">
    			<hr>
    			<div class="nav-links clearfix">
    				<?php _tk_content_nav( 'nav-below' ); ?>
    			</div>
    		</div>
    		</div>
    <?php else : ?>

      <?php get_template_part( 'no-results', 'archive' ); ?>

    <?php endif; ?>

      </div>
      <div id="sidebar" class="col-md-4">
       <?php get_sidebar() ?>
      </div>
    </div>
  </div>
</section>
<?php get_footer(); ?>
