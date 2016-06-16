<?php
 /**
  * Template Name: Over Ons
  */
 get_header(); ?>

 <section>
   <div class="container">
     <div class="row section-header">
       <div class="col-sm-12 text-center">
         <h3><?php the_title(); ?></h3>
         <p><?php the_field('subtitle'); ?></p>
       </div>
     </div>
     <div class="row">
       <div class="col-sm-12">
             <?php the_content(); ?>
             <div class="spacer"></div>
       </div>
     </div>
   </div>
 </section>

 <section class="full-width" style="background-color: #f2f2f2;">
   <div class="container">
     <?php
         $args = array (
         'posts_per_page' => 2,
         'post_type' => 'testimonial',
         'post_status' => 'publish',
       );
         $the_query = new WP_Query( $args ); ?>
          <div class="row">
         <?php if ( $the_query->have_posts() ) : ?>
             <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
             <div class="col-md-6 col-sm-6">
               <div class="client-quote">
                 <p class="description"><?php the_content(); ?></p>
                 <p><strong><?php the_title(); ?>,</strong>  <?php (the_field('functie')) ?  the_field('functie') : ""; ?></p>
               </div>
             </div>

         <?php endwhile; ?>
         <!-- end of the loop -->
         <!-- pagination here -->
         <?php wp_reset_postdata(); ?>

       <?php else : ?>
         <p><?php _e( 'Sorry, geen testimonials gevonden.' ); ?></p>
       <?php endif; ?>
        </div>
   </div>
 </section>


 <?php get_footer(); 
