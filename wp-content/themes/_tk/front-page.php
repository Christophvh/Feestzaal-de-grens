<?php get_header() ?>

<div class="slider">

            <?php echo do_shortcode('[rev_slider alias="homepage"]'); ?>

      </div>

      <section class="call-to-action">
        <div class="container">
          <div class="row">
            <div class="col-sm-12">
              <div class="cta-inner clearfix">
                <div class="cta-text">
                  <h5 class="cta-title"><?php the_field('cta_description') ?></h5>
                </div>
                <div class="cta-button">
                  <a href="<?php the_field('link') ?>" class="btn btn-bordered"><?php the_field('knoptekst') ?></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="services">
        <div class="container">
          <div class="row">
            <div class="col-md-5 col-sm-5">
              <div class="single-image">
                <img src="/wp-content/themes/_tk/includes/img/info.jpg" alt="Buitenkant De Grens">
              </div>
              <div class="spacer"></div>
            </div>
            <div class="col-md-7 col-sm-7">
              <p>
                <?php the_content(); ?>
              </p>
              	<?php edit_post_link( __( 'Edit', '_tk' ), '<span class="edit-link">', '</span>' ); ?>
              <div class="spacer"></div>
            </div>
          </div>
        </div>
      </section>

      <section class="full-width" style="background-color: #f2f2f2;">
        <div class="container">
          <div class="row section-header">
            <div class="col-sm-12 text-center">
              <h3><?php echo get_the_title(1657);?></h3>
            </div>
          </div>
        </div>
        <div class="projects-holder clearfix">
          <?php
              $args = array(
                'post_type' => 'de_zaal',
                'post_status' => 'publish',
                'posts_per_page' => 4,
              );
              $the_query = new WP_Query( $args ); ?>

              <?php if ( $the_query->have_posts() ) : ?>


              	<!-- the loop -->
              	<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                  <?php $tax = get_the_terms( $post->ID, 'feestzaal_categorie' );
                    foreach ($tax as $category) {
                    $categories = $category->name;
                    }?>
                  <article class="project-post">
                    <a href="<?php the_permalink(); ?>" class="project-link">
                      <div class="project-overlay"></div>
                      <div class="project-hover">
                        <h5 class="project-title"><?php the_title(); ?></h5>
                        <p class="project-category"><?php echo $categories ?></p>
                      </div>
                      <div class="image-placeholder">
                        <?php if ( has_post_thumbnail() ): ?>
                        <?php the_post_thumbnail('feestzaal'); ?>
                        <?php endif; ?>
                      </div>
                    </a>
                  </article>
              	<?php endwhile; ?>
              	<!-- end of the loop -->

              	<!-- pagination here -->

              	<?php wp_reset_postdata(); ?>

              <?php else : ?>
              	<p><?php _e( 'Sorry, geen berichten gevonden' ); ?></p>
              <?php endif; ?>
        </div>
      </section>

      <section>
        <div class="container">
          <div class="row section-header">
            <div class="col-sm-12 text-center">
              <h3>Onze Troeven</h3>
            </div>
          </div>
            <div class="row">
              <div class="row">
                <div class="col-sm-3">
                  <h5 class="service-title keypoints"><i class="fa fa-check front-icon" aria-hidden="true"></i> Karaktervolle moderne zaal met geschiedenis</h5>
                </div>
                <div class="col-sm-3">
                    <h5 class="service-title  keypoints"><i class="fa fa-check front-icon" aria-hidden="true"></i> Terras</h5>
                </div>
                <div class="col-sm-3">
                    <h5 class="service-title  keypoints"><i class="fa fa-check front-icon" aria-hidden="true"></i> Veranda</h5>
                </div>
                <div class="col-sm-3">
                    <h5 class="service-title  keypoints"><i class="fa fa-check front-icon" aria-hidden="true"></i> Moderne inkleding</h5>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-3">
                  <h5 class="service-title  keypoints"><i class="fa fa-check front-icon" aria-hidden="true"></i> Bier van de tap</h5>
                </div>
                <div class="col-sm-3">
                    <h5 class="service-title  keypoints"><i class="fa fa-check front-icon" aria-hidden="true"></i> Heel ruime parking</h5>
                </div>
                <div class="col-sm-3">
                    <h5 class="service-title  keypoints"><i class="fa fa-check front-icon" aria-hidden="true"></i> Moderne keuken volgens restaurant normen</h5>
                </div>
                <div class="col-sm-3">
                    <h5 class="service-title  keypoints"><i class="fa fa-check front-icon" aria-hidden="true"></i> Menu naar keuze</h5>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-3">
                  <h5 class="service-title  keypoints"><i class="fa fa-check front-icon" aria-hidden="true"></i> Rokersruimte</h5>
                </div>
                <div class="col-sm-3">
                    <h5 class="service-title  keypoints"><i class="fa fa-check front-icon" aria-hidden="true"></i> Kidscorner</h5>
                </div>
                <div class="col-sm-3">
                    <h5 class="service-title  keypoints"><i class="fa fa-check front-icon" aria-hidden="true"></i> Topteam met ervaring</h5>
                </div>
                <div class="col-sm-3">
                  <h5 class="service-title keypoints"><i class="fa fa-check front-icon" aria-hidden="true"></i> Professioneel licht &amp; geluid</h5>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-3">
                  <h5 class="service-title keypoints"><i class="fa fa-check front-icon" aria-hidden="true"></i> Verjaardagen van 16 - 50</h5>
                </div>
                <div class="col-sm-3">
                    <h5 class="service-title keypoints"><i class="fa fa-check front-icon" aria-hidden="true"></i> Trouw</h5>
                </div>
                <div class="col-sm-3">
                    <h5 class="service-title keypoints"><i class="fa fa-check front-icon" aria-hidden="true"></i> Personeelsfeesten</h5>
                </div>
                <div class="col-sm-3">
                    <h5 class="service-title keypoints"><i class="fa fa-check front-icon" aria-hidden="true"></i> Bedrijfs events</h5>
                </div>
              </div>
              <div class="spacer"></div>
            </div>
        </div>
      </section>

      <section class="parallax-section" style="background-color: #888;">
        <div class="parallax-image" data-stellar-background-ratio="0.5" style="background-image: url('wp-content/themes/_tk/includes/img/bg-testimonial.jpg')"></div>
        <div class="parallax-inner">
          <div class="container">
            <div class="row section-header">
              <div class="col-sm-12 text-center">
                <h3>Wat zeggen onze klanten ?</h3>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12 text-center">
                <div class="flexslider carousel testimonials">
                  <ul class="slides">
                  <?php
                      $args = array (
                      'post_type' => 'testimonial',
                      'post_status' => 'publish',
                    );
                      $the_query = new WP_Query( $args ); ?>

                      <?php if ( $the_query->have_posts() ) : ?>
                      	<!-- pagination here -->
                      	<!-- the loop -->
                      	<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                          <li class="testimonial-item">
                            <p><?php the_content(); ?></p>
                           <div class="testimonial-author"><strong><?php the_title(); ?> - </strong>
                           <?php (the_field('functie')) ?  the_field('functie') : ""; ?></div>
                           <div class="avatar hidden-xs">
                             <?php if ( has_post_thumbnail() ): ?>
                             <?php the_post_thumbnail('avatar'); ?>
                             <?php else: ?>
                               <img src="http://placehold.it/100x100/" title="<?php the_title(); ?>" alt="avatar">
                             <?php endif; ?>
                           </div>
                          </li>
                      	<?php endwhile; ?>
                      	<!-- end of the loop -->
                      	<!-- pagination here -->
                      	<?php wp_reset_postdata(); ?>

                      <?php else : ?>
                      	<p><?php _e( 'Sorry, geen testimonials gevonden.' ); ?></p>
                      <?php endif; ?>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="latest-news">
        <div class="container">
          <div class="row section-header">
            <div class="col-sm-12 text-center">
              <h3><?php echo get_the_title(1611);?></h3>
            </div>
          </div>
          <div class="blog-isotope row">
            <?php
            $args = array(
              'post_type' => 'post',
              'post_status' => 'publish',
              'posts_per_page' => 3,
            );
            $the_query = new WP_Query( $args ); ?>

            <?php if ( $the_query->have_posts() ) : ?>

            	<!-- pagination here -->

            	<!-- the loop -->
            	<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
            		<h2></h2>
            <article class="blog-post col-md-4 col-sm-6">
              <h5 class="blog-title">
                <a href="<?php the_permalink(); ?>">
                  <span class="blog-thumb">
                    <?php if ( has_post_thumbnail() ): ?>
                    <?php the_post_thumbnail('home-blog'); ?>
                    <?php else: ?>
                      <img src="http://placehold.it/800x532/" title="<?php the_title_attribute(); ?>" alt="<?php the_alt_attribute(); ?>">
                    <?php endif; ?>
                    <span class="hover"></span>
                  </span>
                  <span class="blog-title-inner"><?php the_title(); ?></span>
                </a>
              </h5>
              <div class="entry-content">
                <span class="blog-meta"><?php the_category( ',' ); ?> , <?php the_time( get_option( 'date_format' ) ); ?></span>
                <p><?php the_excerpt(); ?></p>
                <p>
                  <a href="<?php the_permalink(); ?>" class="read-more">Lees Meer ..</a>
                </p>
              </div>
            </article>
          <?php endwhile; ?>
          <!-- end of the loop -->

          <!-- pagination here -->

          <?php wp_reset_postdata(); ?>

        <?php else : ?>
          <p><?php _e( 'Sorry, er geen berichten gevonden' ); ?></p>
        <?php endif; ?>
          </div>
        </div>
      </section>

<?php get_footer() ?>
