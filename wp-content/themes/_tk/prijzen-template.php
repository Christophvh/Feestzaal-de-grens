<?php
 /**
  * Template Name: Prijzen
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
 <section>
   <div class="container">
     <div class="row section-header">
       <div class="col-sm-12 text-center">
         <h3><?php the_title(); ?></h3>
         <p><?php the_field('subtitle'); ?></p>
       </div>
     </div>
     <div class="row">
       <div class="col-sm-12 text-center">
             <?php the_content(); ?>
       </div>
     </div>
     <div class="row">
       <div class="table-responsive table-striped">
         <table class="table">
           <thead>
             <tr>
               <th
                     <p style="font-size:25px;text-align:center"><?php the_field('titel_optie') ?></p>
               </th>
               <th>
                 <div class="price_table_container">
                     <div class="price_table_heading"><?php the_field('formule_1_titel') ?></div>
                     <div class="price_table_body">
                         <div class="price_table_row cost primary-text"><strong>&euro; <?php the_field('formule_1_prijs') ?></strong></div>

                     </div>
                 </div>
               </th>
               <th>
                 <div class="recommended"><strong><span class="glyphicon glyphicon-heart" aria-hidden="true"></span> Meest Populair!</strong></div>
                   <div class="price_table_container">
                       <div class="price_table_heading"><?php the_field('formule_2_titel') ?></div>
                       <div class="price_table_body">
                           <div class="price_table_row cost primary-text"><strong>&euro; <?php the_field('formule_2_prijs') ?></strong></div>

                       </div>
                   </div>
               </th>
               <th>
                 <div class="price_table_container">
                     <div class="price_table_heading"><?php the_field('formule_3_titel') ?></div>
                     <div class="price_table_body">
                      <div class="price_table_row cost primary-text"><strong>&euro; <?php the_field('formule_3_prijs') ?></strong></div>
                    </div>
                 </div>
               </th>
             </tr>
           </thead>
         <tbody>
           <?php
                // check if the repeater field has rows of data
                if( have_rows('opties') ):

                 	// loop through the rows of data
                    while ( have_rows('opties') ) : the_row();

                        // display a sub field value

                        ?>
                        <tr>
                          <th scope="row" class="text-center"><?= the_sub_field('optie'); ?></th>
                           <?php if(get_sub_field('checklist')): ?>
                             <td class="text-center"><i class="fa fa-check-circle-o front-icon" aria-hidden="true"></i></td>
                           <?php else : ?>
                             <td class="text-center"></td>
                           <?php endif; ?>

                           <?php if(get_sub_field('checklist_2')): ?>
                             <td class="text-center"><i class="fa fa-check-circle-o front-icon" aria-hidden="true"></i></td>
                           <?php else : ?>
                             <td class="text-center"></td>
                           <?php endif; ?>

                           <?php if(get_sub_field('checklist_3')): ?>
                             <td class="text-center"><i class="fa fa-check-circle-o front-icon" aria-hidden="true"></i></td>
                           <?php else : ?>
                             <td class="text-center"></td>
                           <?php endif; ?>
                         </tr>
                        <?php

                    endwhile;
                endif;

                ?>
          </tbody>
        </table>
      </div>

     </div>
   </div>

 </section>




<?php get_footer();
