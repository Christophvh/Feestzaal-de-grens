<?php
/**
 * The main template file.
 */
$portfolio_options = get_option('wope-portfolio');
$main_option 	   = get_option('wope-main');
$header_option	   = get_option('wope-header');
$wope_header_option = get_option('wope-header');

//init data
$heading_class = '';
$heading_align_class = 'left';
$header_style = 'gray';
$heading_align = '';

//check for version 2.0
if( isset($wope_header_option['header_style']) ){
	$header_style  		= $wope_header_option['header_style'];
	$heading_align  	= $wope_header_option['heading_align'];
}

//process style,class
if($header_style == 'white'){ 
	$heading_class = 'heading-gray';
}else{
	$heading_style = $header_style;
	$heading_class = 'heading-'.$heading_style;
}

$heading_align_class = 'heading-align-'.$heading_align;


get_header(); ?>
	

				<!-- Page heading -->
				<div id="page-heading" class="<?php wope_var($heading_class);?> <?php wope_var($heading_align_class);?>">
					<div class="wrap">
						<div id="page-heading-left">
							<h1 id="page-title">
								<h1 id="page-title"><?php echo esc_html($portfolio_options['portfolio_label']);?></h1>
							</h1>
						</div>
						<div id="breadcrumb">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e('Home','mega');?></a>
							/ <span><?php echo esc_html($portfolio_options['portfolio_label']);?></span>
						</div>
						<div class="cleared"></div>
					</div>
				</div>
			</div><!-- End Header Content -->
		</div> <!-- end Header -->
	<div class="cleared"></div>

	
	
	<div id="body" class="content-page">
		<div class="full-column">
			<div class="wrap-column">
					<?php
						//get paginate
						$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
						
						$total_portfolio = $portfolio_options['portfolio_category_grid_column']*$portfolio_options['portfolio_category_grid_row'];
						$category = get_term_by('name',single_cat_title( '', false ),'portfolio-category');
						$column = $portfolio_options['portfolio_category_grid_column'];
						$args = array(
							'post_type' => 'portfolio',
							'paged' => $paged,
							'posts_per_page' => $total_portfolio,
							'posts_per_archive_page' => $total_portfolio,
						);
						
						$thumb_size = 'wope-thumb-grid-portfolio' ;
						
				if($portfolio_options['portfolio_pagination_type'] == 1){ //filter 
					$args['posts_per_archive_page'] = -1;
					// The Query
					$wp_query = new WP_Query( $args );
					//get all current category
					while ( $wp_query->have_posts() ) { $wp_query->the_post();
						$portfolio_categories = get_the_terms( $post->ID , 'portfolio-category' );
						if(is_array($portfolio_categories)){
							foreach($portfolio_categories as $each_category){
								$category_list[$each_category->term_id]['name'] = $each_category->name;
								$category_list[$each_category->term_id]['slug'] = $each_category->slug;
							}
						}
						
					}
					?>
					
					<div class="column1">
						<div class="wrap-no-fullwidth">
							<ul class="filters">
								<li><span class="active" data-filter="*"><?php _e('All','wope');?></span></li>
								<?php if(count($category_list) > 0){?>
									<?php foreach($category_list as $each_category){?>
										<li> <span data-filter=".<?php wope_var( $each_category['slug']);?>"><?php wope_var( $each_category['name']);?></span></li>
									<?php }?>
								<?php }?>
							</ul>
						</div>
					</div>
					<div class="cleared"></div>
					<div class="portfolio-grid">
						<div class="portfolio-filter-container">		
						<?php 
						$total_portfolio = 1;
						
						while ( $wp_query->have_posts() ) { $wp_query->the_post();
							if($total_portfolio == $column){
								$total_portfolio = 1;
							}else{
								$total_portfolio++;
							}
							
							//make category string
							$categories = get_the_terms( $post->ID , 'portfolio-category' );
							$category_string = "";
							
							if(count($categories) > 0){
								foreach($categories as $each_category){
									$category_string .= $each_category->slug." ";
								}
							}
							
							$portfolio_cat_links = get_terms_links($post->ID, 'portfolio-category');
							if(!is_array($portfolio_cat_links)){
								$portfolio_cat_links = array();
							}
							?>
							<div class="portfolio_filter_item <?php wope_var( $category_string);?> portfolio_filter<?php wope_var($column);?>">
								<div class="portfolio-cell">
									<div class="portfolio-cell-thumb">
										<div class="portfolio-cell-bg"></div>
										<a class="portfolio-cell-view" href="<?php the_permalink(); ?>"><i class="pe-7s-search"></i></a>
										<a href="<?php the_permalink(); ?>">
											<?php if ( has_post_thumbnail() ) {?>
												<?php the_post_thumbnail( $thumb_size);?>
											<?php }?>	
										</a>
									</div>
									<div class="portfolio-cell-data">
										<div class="portfolio-cell-title">
											<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
										</div>
										<div class="portfolio-cell-categories"><?php wope_var(implode(' / ',$portfolio_cat_links));?></div>
									</div>
								</div>
							</div>
						<?php } ?>
						</div>
					</div>
				<?php }else{?>
				<div class="portfolio-cell-container">
					<?php
						// The Query
						$wp_query = new WP_Query( $args );
						
						if ( $wp_query->have_posts() ) {
							$post_num = 1;
							$post_current = 1;
							$total_post = $wp_query->post_count;
							while ( $wp_query->have_posts() ) : $wp_query->the_post();
								
								if($post_num == $column){
									$column_last = 'column-last';
									$clear_div = '<div class="cleared"></div>';
									$post_num = 1;
								}else{
									$column_last = '';
									$clear_div = '';
									$post_num++;
								}
								$end_class = wopo_get_end_class($post_current,$total_post,$column);
								$post_current++;
								
								$portfolio_cat_links = wopo_get_terms_links($post->ID, 'portfolio-category');
								if(!is_array($portfolio_cat_links)){
									$portfolio_cat_links = array();
								}		
							?>
							<div class="column<?php echo esc_attr($column);?>_1 <?php echo esc_attr($column_last);?>">
								<div class="portfolio-cell <?php echo esc_attr($end_class);?>">
									<div class="portfolio-cell-thumb">
										
										<a class="portfolio-cell-view" href="<?php the_permalink(); ?>"><i class="pe-7s-search"></i></a>
										<a href="<?php the_permalink(); ?>">
											<div class="portfolio-cell-bg"></div>
											<?php if ( has_post_thumbnail() ) {?>
												<?php the_post_thumbnail( $thumb_size);?>
											<?php }?>	
										</a>
									</div>
									<div class="portfolio-cell-data">
										<div class="portfolio-cell-title">
											<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
										</div>
										<div class="portfolio-cell-categories"><?php wope_var(implode(' / ',$portfolio_cat_links));?></div>
									</div>
								</div>
							</div>
							<?php wopo_var($clear_div);?>
							<?php
							endwhile;
							// Reset Post Data
							wp_reset_postdata();
						}
					?>
					<div class="cleared"></div>
				</div>
				
				<?php if($wp_query->max_num_pages > 1){ ?>
				<div class="column1">
					<div class="paginate paginate-portfolio">
						<?php wopo_custom_paginate_links($paged); ?>
					</div>
				</div>
				<div class="cleared"></div>
				<?php } } ?>
				</div>
		</div>
	</div><!-- End Body-->
<?php get_footer(); ?>