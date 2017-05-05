<?php /* Template Name: Collections Page  */ get_header(); ?>

<main >
	<!-- section -->
	<section id="occasions" >
		<div class="fluid-container">
			<div class="row">
				<div class="col-xs-12  collectionsContent" style="background-image: url(<?php the_field('collections_image'); ?>);">

						<div class="col-sm-9 col-sm-offset-3">
							<h2><?php the_field('collections_header'); ?></h2>
							<?php the_field('collections_content'); ?>
						</div>
				</div><!-- collectionsContent -->
			</div><!-- row -->
		</div><!-- fluid-container -->
	</section>
	<section id="cakeGallery">
		<div class="container">
			<div class="borderBox">
				<div class="collectionsGallery">
					<h2>Our Collections</h2>
					<hr>
					<h4> Select a category to view more of the same cakes</h4>
					<div class="row row-centered">
						<div class=" col-xs-6 col-sm-3 col-centered">
							<div class="collection">
								<img src="<?php echo get_template_directory_uri(); ?>/images/wedding-cake.jpg" alt="#" class="img-responsive center-block test-img">
								<span><a href="#">Weddings</a></span>
							</div>
						</div>
						<div class="col-xs-6 col-sm-3 col-centered">
							<div class="collection">
								<img src="<?php echo get_template_directory_uri(); ?>/images/dessert-table.jpg" alt="#" class="img-responsive center-block test-img">
								<span><a href="#">Dessert Tables</a></span>
							</div>
						</div>
						<div class="col-xs-6 col-sm-3 col-centered">
							<div class="collection">
								<img src="<?php echo get_template_directory_uri(); ?>/images/for-him-cake.jpg" alt="#" class="img-responsive center-block test-img">
								<span><a href="#">For Him</a></span>
								</div>
						</div>
						<div class="col-xs-6 col-sm-3 col-centered">
							<div class="collection">
								<img src="<?php echo get_template_directory_uri(); ?>/images/candy-apple.jpg" alt="#" class="img-responsive center-block test-img">
								<span><a href="#">Candy Apples</a></span>
							</div>
						</div>

						<div class="col-xs-6 col-sm-3 col-centered">
							<div class="collection">
								<img src="<?php echo get_template_directory_uri(); ?>/images/cake-pop.jpg" alt="#" class="img-responsive center-block test-img">
								<span><a href="#">Cake Pops</a></span>
							</div>
						</div>
						<div class="col-xs-6 col-sm-3 col-centered">
							<div class="collection">
								<img src="<?php echo get_template_directory_uri(); ?>/images/cupcakes-with-shells.jpg" alt="#" class="img-responsive center-block test-img">
								<span><a href="#">CupCakes</a></span>
							</div>
						</div>
						<div class="col-xs-6 col-sm-3 col-centered">
							<div class="collection">
								<img src="<?php echo get_template_directory_uri(); ?>/images/flag-cake-with-medallions.jpg" alt="#" class="img-responsive center-block test-img">
								<span><a href="#">Military</a></span>
							</div>
						</div>
						<div class="col-xs-6 col-sm-3 col-centered">
							<div class="collection">
								<img src="<?php echo get_template_directory_uri(); ?>/images/children-cake.png" alt="#" class="img-responsive center-block test-img">
								<span><a href="#">Childrens</a></span>
							</div>
						</div>
						<div class="col-xs-6 col-sm-3 col-centered">
							<div class="collection">
								<img src="<?php echo get_template_directory_uri(); ?>/images/holiday-cake.png" alt="#" class="img-responsive center-block test-img">
								<span><a href="#">Holidays</a></span>
							</div>
						</div>
						<div class="col-xs-6 col-sm-3 col-centered">
							<div class="collection">
								<img src="<?php echo get_template_directory_uri(); ?>/images/birthday-cake.png" alt="#" class="img-responsive center-block test-img">
								<span><a href="#">Birthdays</a></span>
							</div>
						</div>
					</div><!-- row -->
				</div><!-- collectionsGallery -->






			</div><!-- borderBox -->
		</div><!-- container -->
	</section>
	<section id="collectionLinks">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-6 leftSide">
					<?php the_field('collections_left_side'); ?>
					<a href="#" class="btn-main">Contact Us Today</a>
				</div>
				<div class="col-xs-12 col-sm-6 rightSide">
					<?php the_field('collections_right_side'); ?>
					<a href="#" class="btn-main">View our Menu Now</a>
				</div>
			</div><!-- row -->
		</div><!-- container -->
	</section>
</main>



<?php get_footer(); ?>
