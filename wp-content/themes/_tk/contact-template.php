<?php
 /**
  * Template Name: Contact
  */
 get_header(); ?>

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
     
 <div class="row section-header">
   <div class="col-sm-12 text-center">
     <h3><?php the_title(); ?></h3>
     <p><?php the_field('subtitle'); ?></p>
   </div>
 </div>

 <section class="contact">
       <div class="container">
         <div class="row">
           <div class="col-md-4 col-sm-6">
             <p><?php the_content(); ?></p>
           </div>
           <div class="col-md-8 col-sm-6">
             <div class="contact-form" id="contact-form">
               <div class="row">
                 <div class="col-sm-12">
                   <div class="row">
                  <?php echo do_shortcode('[contact-form-7 id="1696" title="Beschikbaarheid"]'); ?>
                   </div>
                 </div>
               </div>
             </div>
           </div>
         </div>
       </div>
  </section>

  <section class="contact-map-wrapper">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="contact-map" style="height: 380px;"></div>
          </div>
        </div>
      </div>
  </section>

 <?php get_footer(); ?>
