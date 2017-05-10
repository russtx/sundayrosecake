<?php /* Template Name: Home Page  */ get_header(); ?>

<main>
	<section id="cakeGallery">
		<div class="container">
			<div class="borderBox">
				<div class="collectionsGallery">

					<div class="row row-centered">

						<h2>Our Collections</h2>
						<hr>

								<?php $other_page = 8;  ?>
								<?php if( have_rows('collections', $other_page) ): ?>
									<?php while( have_rows('collections', $other_page) ): the_row(); ?>
										<div class=" col-xs-6 col-sm-3 col-centered">
											<div class="collection">
													<img src="<?php the_sub_field('collection_featured_image'); ?>" alt="#" class="img-responsive center-block test-img" />
													<span><a href="<?php the_sub_field('collection_featured_image'); ?>" class="gallery-link" data-lightbox="<?php the_sub_field('collection_name'); ?>" data-title="<?php the_sub_field('collection_name'); ?>"><?php the_sub_field('collection_name'); ?></a></span>
													<?php
														$images = get_sub_field('collection_gallery');
														foreach($images as $image): ?>
															<a href="<?php echo $image['url']; ?>" data-lightbox="<?php the_sub_field('collection_name'); ?>" data-title="<?php the_sub_field('collection_name'); ?>"></a>
													<?php endforeach; ?>
											</div>
										</div>
								<?php endwhile; ?>
								<?php endif; ?>

					</div><!-- row -->
				</div><!-- collectionsGallery -->
				<a href="<?php echo home_url(); ?>/collections/#cakeGallery" class="btn-main">View All Cakes</a>


			</div><!-- borderBox -->
		</div><!-- container -->
	</section>
		<section id="about">
			<div class="container">
				<div class="row">
					<div class="col-sm-8 col-sm-offset-2 ">
						<h2><?php
						    // query for the about page
						    $your_query = new WP_Query( 'pagename=about' );
						    // "loop" through query (even though it's just one page)
						    while ( $your_query->have_posts() ) : $your_query->the_post();
						        the_title();
						    endwhile;
						    // reset post data (important!)
						    wp_reset_postdata();
						?></h2>
										<hr />
						<?php
						    // query for the about page
						    $your_query = new WP_Query( 'pagename=about' );
						    // "loop" through query (even though it's just one page)
						    while ( $your_query->have_posts() ) : $your_query->the_post();
						        the_content();
						    endwhile;
						    // reset post data (important!)
						    wp_reset_postdata();
						?>
						<a href="<?php echo home_url(); ?>/about/" class="btn-main">Learn More</a>
					</div>
				</div><!-- row -->
			</div><!-- container -->
		</section>
		<section id="instagramFeed">
			<div class="container">
				<div class="borderBox">
						<h2>What's Been Happening Lately</h2>
						<hr />
						<div class="row">
							<div class="col-md-3 col-xs-6">
								<img src="http://placehold.it/200x200?text=Instagram Feed" class="img-responsive center-block filler" alt="" />
							</div>
							<div class="col-md-3 col-xs-6">
								<img src="http://placehold.it/200x200?text=Instagram Feed" class="img-responsive center-block filler" alt="" />
							</div>
							<div class="col-md-3 col-xs-6">
								<img src="http://placehold.it/200x200?text=Instagram Feed" class="img-responsive center-block filler" alt="" />
							</div>
							<div class="col-md-3 col-xs-6">
								<img src="http://placehold.it/200x200?text=Instagram Feed" class="img-responsive center-block filler" alt="" />
							</div>
							<div class="col-md-3 col-xs-6">
								<img src="http://placehold.it/200x200?text=Instagram Feed" class="img-responsive center-block filler" alt="" />
							</div>
							<div class="col-md-3 col-xs-6">
								<img src="http://placehold.it/200x200?text=Instagram Feed" class="img-responsive center-block filler" alt="" />
							</div>
							<div class="col-md-3 col-xs-6">
								<img src="http://placehold.it/200x200?text=Instagram Feed" class="img-responsive center-block filler" alt="" />
							</div>
							<div class="col-md-3 col-xs-6">
								<img src="http://placehold.it/200x200?text=Instagram Feed" class="img-responsive center-block filler" alt="" />
							</div>
						</div><!-- row -->
						<div class="row">

							<div class="col-xs-12 col-sm-6">
								<a href="#" class="btn-main left clickme">Load More</a>
								<div class="box ">
									<div class="container reset">
										<div class="row">
											<div class="col-md-3 col-xs-6">
												<img src="http://placehold.it/200x200?text=Instagram Feed" class="img-responsive center-block filler" alt="" />
											</div>
											<div class="col-md-3 col-xs-6">
												<img src="http://placehold.it/200x200?text=Instagram Feed" class="img-responsive center-block filler" alt="" />
											</div>
											<div class="col-md-3 col-xs-6">
												<img src="http://placehold.it/200x200?text=Instagram Feed" class="img-responsive center-block filler" alt="" />
											</div>
											<div class="col-md-3 col-xs-6">
												<img src="http://placehold.it/200x200?text=Instagram Feed" class="img-responsive center-block filler" alt="" />
											</div>
											<div class="col-md-3 col-xs-6">
												<img src="http://placehold.it/200x200?text=Instagram Feed" class="img-responsive center-block filler" alt="" />
											</div>
											<div class="col-md-3 col-xs-6">
												<img src="http://placehold.it/200x200?text=Instagram Feed" class="img-responsive center-block filler" alt="" />
											</div>
											<div class="col-md-3 col-xs-6">
												<img src="http://placehold.it/200x200?text=Instagram Feed" class="img-responsive center-block filler" alt="" />
											</div>
											<div class="col-md-3 col-xs-6">
												<img src="http://placehold.it/200x200?text=Instagram Feed" class="img-responsive center-block filler" alt="" />
											</div>
										</div><!-- row -->
									</div><!--container -->
							</div><!-- box -->
							</div>

							<div class="col-xs-12 col-sm-6 ">
								<a href="<?php the_field('instagram', 'option'); ?>" target="_blank" class="btn-main right ">Follow Us<img src="<?php echo get_template_directory_uri(); ?>/images/instagram.png" alt="instagram" class="instagram-img"></a>
							</div>


						</div><!-- row -->
					</div><!-- borderBox -->
				</div><!-- container -->

		</section>
		<section id="qanda">
			<div class="container">
				<h2>Questions and Answers</h2>
				<hr />
				<?php	if(have_rows('question_answer', 'option')): ?>
					<div class="panel-group" id="accordian" role="tablist" aria-multiselectable="true">
						<?php $i=0; while(have_rows('question_answer', 'option')): the_row(); ?>
							<div class="panel panel-default">
								<div class="panel-heading" id="heading<?php echo $i; ?>">
									<h3 class="panel-title">
										<a href="#collapse<?php echo $i; ?>" role="button" data-toggle="collapse" data-parent="#accordian" aria-expanded="true" aria-controls="collapse<?php echo $i; ?>">
											<?php the_sub_field('question_field'); ?>
										</a>
									</h3>
								</div><!-- panel-heading -->
									<div id="collapse<?php echo $i; ?>" class="panel-collapse collapse<?php if($i==0){ echo ' in'; } ?>" role="tabpanel" aria-labelledby="heading<?php echo $i; ?>">
										<p><?php the_sub_field('answer_field'); ?></p>
									</div><!-- panel collapse -->
								</div><!-- panel panel-default -->
							<?php $i++; endwhile; ?>
						</div><!-- panel-group -->
				<?php endif; ?>




			</div><!-- container -->
		</section>



<?php get_footer(); ?>
