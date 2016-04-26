<?php get_header(); ?>
<section class="project-single">
					<div class="container">
						<div class="row">
							<div class="col-md-5 project-details">
								<h4 class="project-title"><?php the_title(); ?></h4>
								<div class="project-description">
									<p><?php the_content(); ?></p>
								</div>
								<div class="project-services">
									<div class="project-detail-item">
										<div class="left">
											<i class="fa fa-user"></i><strong>Client:</strong>
										</div>
										<div class="right">
											Samuel I. Lawson
										</div>
									</div>
									<div class="project-detail-item">
										<div class="left">
											<i class="fa fa-calendar"></i><strong>Date:</strong>
										</div>
										<div class="right">
											22 March 2015
										</div>
									</div>
									<div class="project-detail-item">
										<div class="left">
											<i class="fa fa-map-marker"></i><strong>Location:</strong>
										</div>
										<div class="right">
											Hazelwood  Algona,4067
										</div>
									</div>
									<div class="project-detail-item">
										<div class="left">
											<i class="fa fa-folder-open-o"></i><strong>Category:</strong>
										</div>
										<div class="right">
											Interior Design
										</div>
									</div>
									<div class="project-detail-item">
										<div class="left">
											<i class="fa fa-share-alt"></i><strong>Share on:</strong>
										</div>
										<div class="right">
											<a href="#">Facebook</a>
											<a href="#">Twitter</a>
											<a href="#">Google Plus</a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-7">
								<div class="row">
									<div class="col-sm-12">
										<div class="project-image-placeholder">
                      <?php if ( has_post_thumbnail() ): ?>
                      <?php the_post_thumbnail('feestzaal'); ?>
                      <?php endif; ?>
										</div>
									</div>
                    <?php $images = get_field('extra_fotos');
                        if( $images ): ?>
                                <?php foreach( $images as $image ): ?>
                                  <div class="col-sm-6">
                                    <div class="project-image-placeholder">
                                    <img  class="img-responsive" src="<?php echo $image['sizes']['feestzaal-gallery']; ?>" alt="<?php echo $image['alt']; ?>" />
                                    </div>
                                  </div>
                                <?php endforeach; ?>
                        <?php endif; ?>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12">
								<div class="project-nav hidden-xs">
                    <?php previous_post_link( '<div class="project-prev">%link</div>', '' . _x( '', 'Previous post link', '_tk' ) . '<i class="fa fa-angle-left"></i> %title' ); ?>
                    
									<div class="project-button">
										<a href="/de-feestzaal"><i class="fa fa-th"></i></a>
									</div>
                    	<?php next_post_link( '<div class="project-next">%link</div>', '%title <i class="fa fa-angle-right"></i>' . _x( '', 'Next post link', '_tk' ) . '' ); ?>
								</div>
							</div>
						</div>
					</div>
				</section>
<?php get_footer(); ?>
