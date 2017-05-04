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
