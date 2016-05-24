<?php
 /**
  * Template Name: Overzicht Feestzaal
  */

 ?>

 <?php get_header(); ?>
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
 				<section class="projects">
 					<div class="container">
 						<div class="row section-header">
 							<div class="col-sm-12 text-center">
                <h3><?php the_title(); ?></h3>
                  <p><?php the_field('subtitle'); ?></p>
 							</div>
 							<div class="col-sm-12 text-center">
 								<div id="projects-filter">
                  <?php $terms = get_terms( array(
                    'taxonomy' => 'feestzaal_categorie',
                ) );?>

 									<a href="#" data-filter="*" class="active">Toon Alles</a>
                  <?php foreach ($terms as $term): ?>
                    	<a href="#" data-filter=".<?php echo $term->name ?>"><?php echo $term->name ?></a>
                  <?php endforeach; ?>
 								</div>
 							</div>
 						</div>
 					</div>
 					<div class="container">
           <div class="row" id="projects-grid">
            <?php
                $args = array(
                  'post_type' => 'de_zaal',
                  'post_status' => 'publish',
                  'posts_per_page' => -1,
                );
                $the_query = new WP_Query( $args ); ?>

                <?php if ( $the_query->have_posts() ) : ?>

                	<!-- pagination here -->

                	<!-- the loop -->
                	<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                    <?php $tax = get_the_terms( $post->ID, 'feestzaal_categorie' );
                      foreach ($tax as $category) {
                      $categories = $category->name;
                      }?>

                    <div class="col-md-4 col-sm-6 project-item <?php echo $categories ?>">
                      <article class="project-post">
                        <a href="<?php the_permalink(); ?>" class="project-link">
                          <div class="project-overlay"></div>
                          <div class="project-hover">
                            <h5 class="project-title"><?php the_title(); ?></h5>
                            <p class="project-category"><?php echo $categories ?></p>
                          </div>
                          <div class="image-placeholder">
                            <?php if ( has_post_thumbnail() ): ?>
                            <a href="<?php the_permalink(); ?>" title="the_title();"><?php the_post_thumbnail('feestzaal'); ?></a>
                            <?php endif; ?>
                          </div>
                        </a>
                      </article>
                    </div>
                	<?php endwhile; ?>
                	<!-- end of the loop -->

                	<?php wp_reset_postdata(); ?>

                <?php else : ?>
                	<p><?php _e( 'Sorry, geen feestzaal-items gevonden.' ); ?></p>
                <?php endif; ?>
 						</div>
 					</div>
 				</section>
 <?php get_footer(); ?>
