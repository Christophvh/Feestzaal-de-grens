<?php get_header() ?>

<section class="latest-news">
  <div class="container">
    <div class="row section-header">
      <div class="col-sm-12 text-center">
        <h3><?php single_post_title(); ?></h3>
          <p><?php the_field('subtitle'); ?></p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-8 blog-classic">
      <?php
      $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
      $args = array(
        'post_type' => 'post',
        'post_status' => 'publish',
        'posts_per_page' => 3,
        'paged'          => $paged
      );
      $the_query = new WP_Query( $args ); ?>

      <?php if ( $the_query->have_posts() ) : ?>

      	<!-- pagination here -->

      	<!-- the loop -->
      	<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
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
      	<?php endwhile; ?>
      	<!-- end of the loop -->

      	<!-- pagination here -->
        <div class="row">
          <div class="col-sm-12">
            <div class="nav-links clearfix">
              <div class="nav-next">
                <?php
             $big = 999999999;
             echo paginate_links( array(
               'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
               'current' => max( 1, get_query_var('paged') ),
               'total' => $the_query->max_num_pages,
               'format' => '/page/%#%',
               'prev_text' => '« Vorige',
               'next_text' => 'Volgende »',
             ) );
             ?>
            </div>
            </div>
          </div>
        </div>
        <div class="spacer"></div>

      	<?php wp_reset_postdata(); ?>

      <?php else : ?>
      	<p><?php _e( 'Sorry, Geen berichten gevonden.' ); ?></p>
      <?php endif; ?>


      </div>
      <div id="sidebar" class="col-md-4">
       <?php get_sidebar() ?>
      </div>
    </div>
  </div>
</section>

<?php get_footer() ?>
