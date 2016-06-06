<?php get_header() ?>

<div class="slider">

            <?php echo do_shortcode('[rev_slider alias="homepage"]'); ?>

      </div>

<?php if(get_field('link') && get_field('cta_description') && get_field('knoptekst')) :?>
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
    <?php endif; ?>

      <section class="services">
        <div class="container">
          <div class="row">
            <div class="col-md-5 col-sm-5">
              <div class="single-image">
                <?php if ( has_post_thumbnail() ): ?>
                <?php the_post_thumbnail('blog-img'); ?>
                <?php endif; ?>
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
              <div class="col-sm-6">


                    <?php if( have_rows('Troeven') ):  ?>


                      <?php  while ( have_rows('Troeven') ) : the_row(); ?>

                              <h5 class="service-title keypoints">
                                <i class="fa fa-check-circle-o front-icon" aria-hidden="true"></i> <?php the_sub_field('troef');  ?></h5>


                        <?php endwhile; ?>

                    <?php else : ?>

                      <p>Geen troeven gevonden!</p>

                    <?php endif; ?>
                    <?php edit_post_link( __( 'Edit', '_tk' ), '<span class="edit-link">', '</span>' ); ?>
              </div>
              <div class="col-sm-6">
                <?php
                  $image = get_field('troeven_foto');

                  if( !empty($image) ): ?>

                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

                  <?php endif; ?>
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
                  <?php edit_post_link( __( 'Edit', '_tk' ), '<hr><span class="edit-link">', '</span>' ); ?>
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

      <section class="full-width" style="background-color: #f2f2f2;">
        <div class="container">
          <div class="row section-header">
            <div class="col-sm-12 text-center">
              <h3>Het Team</h3>
            </div>
          </div>
          <div class="row">
            <?php
                $args = array (
                'post_type'       => 'teamleden',
                'post_status'     => 'publish',
                'posts_per_page'  => '3'
              );
                $the_query = new WP_Query( $args ); ?>
           <?php if ( $the_query->have_posts() ) : ?>
           <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
            <div class="col-md-4 col-sm-6">
              <div class="team-item">
                <div class="team-thumb">
                  <?php if ( has_post_thumbnail() ): ?>
                  <?php the_post_thumbnail('teamleden'); ?>
                  <?php endif; ?>
                  <div class="hover">
                    <a href="<?php the_field('facebook'); ?>"><i class="fa fa-facebook"></i></a>
                    <a href="<?php the_field('linkedin'); ?>"><i class="fa fa-linkedin"></i></a>
                  </div>
                  <div class="overlay"></div>
                </div>
                <div class="team-content">
                  <span class="role"><?php the_field('functie'); ?></span>
                  <h5><?php the_title(); ?></h5>
                  <p><?php the_content(); ?></p>
                  <p><?php edit_post_link( __( 'Edit', '_tk' ), '<span class="edit-link">', '</span>' ); ?></p>
                </div>
              </div>
            </div>
          <?php endwhile; ?>
          <!-- end of the loop -->
          <!-- pagination here -->
          <?php wp_reset_postdata(); ?>

        <?php else : ?>
          <p><?php _e( 'Sorry, geen teamleden gevonden.' ); ?></p>
        <?php endif; ?>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12 text-center">
            <a href="/over-ons" class="btn btn-accent">Bekijk het volledige team</a>
          </div>
        </div>
      </section>

      <section class="services">
        <div class="container">
          <div class="row section-header">
            <div class="col-sm-12 text-center">
              <h3><?php the_field('titel'); ?></h3>
            </div>
          </div>
          <div class="row">
            <div class="col-md-5 col-sm-5">
              <div class="single-image">
                <?php
                  $image = get_field('afbeelding');

                  if( !empty($image) ): ?>

                  	<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

                  <?php endif; ?>
              </div>
              <div class="spacer"></div>
            </div>
            <div class="col-md-7 col-sm-7">
              <p>
              <?php the_field('korte_tekst'); ?>
              </p>

              <?php $rating = get_field('rating') ?>

              <div class="review-stars" itemprop="reviewRating" itemscope="" itemtype="http://schema.org/Rating">
      					<div class="wporg-ratings" title="<?= $rating ?> out of 5 stars" style="color:#d2a508;">
                <?php switch ($rating) {
                          case 1:
                              echo '<span class="dashicons dashicons-star-filled"></span>
                                    <span class="dashicons dashicons-star-empty"></span>
                                    <span class="dashicons dashicons-star-empty"></span>
                                    <span class="dashicons dashicons-star-empty"></span>
                                    <span class="dashicons dashicons-star-empty"></span>';
                              break;
                          case 2:
                              echo '<span class="dashicons dashicons-star-filled"></span>
                                    <span class="dashicons dashicons-star-filled"></span>
                                    <span class="dashicons dashicons-star-empty"></span>
                                    <span class="dashicons dashicons-star-empty"></span>
                                    <span class="dashicons dashicons-star-empty"></span>';
                              break;
                          case 3:
                              echo '<span class="dashicons dashicons-star-filled"></span>
                                    <span class="dashicons dashicons-star-filled"></span>
                                    <span class="dashicons dashicons-star-filled"></span>
                                    <span class="dashicons dashicons-star-empty"></span>
                                    <span class="dashicons dashicons-star-empty"></span>';
                              break;
                          case 4:
                              echo '<span class="dashicons dashicons-star-filled"></span>
                                    <span class="dashicons dashicons-star-filled"></span>
                                    <span class="dashicons dashicons-star-filled"></span>
                                    <span class="dashicons dashicons-star-filled"></span>
                                    <span class="dashicons dashicons-star-empty"></span>';
                              break;
                          case 5:
                              echo '<span class="dashicons dashicons-star-filled"></span>
                                    <span class="dashicons dashicons-star-filled"></span>
                                    <span class="dashicons dashicons-star-filled"></span>
                                    <span class="dashicons dashicons-star-filled"></span>
                                    <span class="dashicons dashicons-star-filled"></span>';
                              break;
                           default:
                           echo '<span class="dashicons dashicons-star-filled"></span>
                                 <span class="dashicons dashicons-star-filled"></span>
                                 <span class="dashicons dashicons-star-filled"></span>
                                 <span class="dashicons dashicons-star-filled"></span>
                                 <span class="dashicons dashicons-star-filled"></span>';
                                 break;
                      } ?>

                </div>
                <meta itemprop="worstRating" content="1">
      					<meta itemprop="ratingValue" content="4">
      					<meta itemprop="bestRating" content="5">
							</div>

              <div class="spacer"></div>
            </div>
          </div>
        </div>
      </section>

      <section class="full-width" style="background-color: #f2f2f2;">
        <div class="container">
          <div class="row section-header">
            <div class="col-sm-12 text-center">
              <h3>Pakketten aangepast aan uw wensen</h3>
              <p>
                Alle prijzen zijn exclusief BTW en aan te passen aan uw specifieke verlangens
              </p>
            </div>
          </div>
          <div class="row">
               <div class="col-md-3 col-sm-6 col-xs-12 float-shadow">
                   <div class="price_table_container">
                       <div class="price_table_heading">Standaard</div>
                       <div class="price_table_body">
                           <div class="price_table_row cost warning-text"><strong>vanaf €200</strong></div>
                           <div class="price_table_row">Zaalverhuur onder 100 personen €400</div>
                           <div class="price_table_row">Zaalverhuur meer dan 100 personen €200</div>
                           <div class="price_table_row">Alles staat klaar voor gebruik. Geen kopzorgen</div>
                           <div class="price_table_row">Geluid/licht/personeel + Sabam inclusief</div>
                       </div>
                       <a href="/controleer-beschikbaarheid/" class="btn btn-warning btn-lg btn-block">Inclusief voor elk feest</a>
                   </div>
               </div>

               <div class="col-md-3 col-sm-6 col-xs-12 float-shadow">
                   <div class="price_table_container">
                       <div class="price_table_heading">'Basispakket drank'</div>
                       <div class="price_table_body">
                           <div class="price_table_row cost primary-text"><strong>€ 32,90/p.p</strong></div>
                           <div class="price_table_row">Standaardpakket</div>
                           <div class="price_table_row">Bier</div>
                           <div class="price_table_row">Frisdrank</div>
                           <div class="price_table_row">Assortiment wijnen</div>
                           <div class="price_table_row">Glas cava bij binnenkomst</div>
                       </div>
                       <a href="/controleer-beschikbaarheid/" class="btn btn-primary btn-lg btn-block">Controleer Beschikbaarheid</a>
                   </div>
               </div>

               <div class="col-md-3 col-sm-6 col-xs-12 float-shadow">
                 <div class="recommended"><strong><span class="glyphicon glyphicon-heart" aria-hidden="true"></span> Meest Populair!</strong></div>
                   <div class="price_table_container">
                       <div class="price_table_heading">'Kleine honger'</div>
                       <div class="price_table_body">
                           <div class="price_table_row cost success-bg"><strong>€ 36,50/p.p</strong></div>
                           <div class="price_table_row">Standaardpakket</div>
                           <div class="price_table_row">Basispakket drank</div>
                           <div class="price_table_row">Olijven op tafel</div>
                           <div class="price_table_row">Buggles met geitenkaas</div>
                           <div class="price_table_row">Frituurhapjes</div>
                       </div>
                       <a href="/controleer-beschikbaarheid/" class="btn btn-success btn-lg btn-block">Controleer Beschikbaarheid</a>
                   </div>
               </div>

               <div class="col-md-3 col-sm-6 col-xs-12 float-shadow">
                   <div class="price_table_container">
                       <div class="price_table_heading">'De Grens'</div>
                        <div class="price_table_row cost info-text"><strong>€ 39,90/p.p</strong></div>
                       <div class="price_table_body">
                         <div class="price_table_row">Standaardpakket</div>
                         <div class="price_table_row">Basispakket drank</div>
                         <div class="price_table_row">Borrel-, Frituur-, Ovenhapjes</div>
                         <div class="price_table_row">Zakje friet met saus naar keuze</div>
                         <div class="price_table_row">Olijven op tafel</div>
                         <div class="price_table_row">Toastjes</div>
                         <div class="price_table_row">Tomaat Mozarella</div>
                       </div>
                       <a href="/controleer-beschikbaarheid/" class="btn btn-info btn-lg btn-block">Controleer Beschikbaarheid</a>
                   </div>
               </div>
           </div>
       </div>
     </section>

<?php get_footer() ?>
