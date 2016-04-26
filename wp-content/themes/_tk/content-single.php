
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<div class="blog-post">
  <div class="post-thumb">
      <?php if ( has_post_thumbnail() ): ?>
      <?php the_post_thumbnail('blog-img'); ?>
      <?php else: ?>
        <img src="http://placehold.it/1200x650/" alt="<?php the_title(); ?>">
      <?php endif; ?>
  </div>
  <div class="post-content clearfix">
    <div class="post-date">
        <span class="day"><?php the_time('d'); ?> </span>
        <span class="month"><?php the_time('M'); ?> </span>
    </div>
    <div class="right post-formatting">
      <div class="post-header">
        <h3 class="post-title"><?php the_title(); ?></h3>
        <span class="post-meta">
          <?php the_category( ',' ); ?> ,
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
      <p><?php the_content(); ?></p>
    </div>
  </div>
</div>


		<?php edit_post_link( __( 'Edit', '_tk' ), '<span class="edit-link">', '</span>' ); ?>
</article><!-- #post-## -->
