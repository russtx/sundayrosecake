<?php /* Template Name: Test Page  */ get_header(); ?>

<div class="container">
	<div class="row">
			<div class="col-xs-12 testingArea">
				<?php if( have_rows('test_area') ): ?>
					<?php while( have_rows('test_area') ): the_row(); ?>
						<img src="<?php the_sub_field('test_featured_image'); ?>" alt="" />
						<a href="#" class="gallery-link" data-lightbox="weddings" data-title="Wedding 1"><?php the_sub_field('test_name'); ?></a>
				<?php endwhile; ?>
				<?php endif; ?>
			</div>
	</div>
</div>
<!-- Gallery Sample from ACF -->
<?php

$images = get_field('test_gallery');

if( $images ): ?>
    <ul>
        <?php foreach( $images as $image ): ?>
            <li>
                <a href="<?php echo $image['url']; ?>">
                     <img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" />
                </a>
                <p><?php echo $image['caption']; ?></p>
            </li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>



<!-- end of ACF -->
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
				</div><!-- row -->
			</div><!-- collectionsGallery -->
			<a href="#" class="btn-main clickme">View All Cakes</a>
			<div class="box">
				<div class="row row-centered">
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
			</div><!-- box -->
		</div><!-- borderBox -->
	</div><!-- container -->
</section>


<section id="collections">
	<div class="container">
		<h2>Our Collections</h2>
		<hr />
		<div class="row">
			<div class="col-md-4 col-sm-3 centered-cols">
				<div class="collection">
					<img src="<?php echo get_template_directory_uri(); ?>/images/cake-pop.jpg" alt="#" class="img-responsive center-block test-img">
					<a href="<?php echo get_template_directory_uri(); ?>/images/wedding-cake.jpg" class="gallery-link" data-lightbox="weddings" data-title="Wedding 1">Weddings</a>
					<a href="<?php echo get_template_directory_uri(); ?>/images/cake-pop.jpg" data-lightbox="weddings" data-title="Wedding 2"></a>
					<a href="<?php echo get_template_directory_uri(); ?>/images/candy-apple.jpg" data-lightbox="weddings" data-title="Wedding 3"></a>
					<a href="<?php echo get_template_directory_uri(); ?>/images/cupcakes-with-shells.jpg" data-lightbox="weddings" data-title="Weddings 4"></a>
				</div>
			</div>
			<div class="col-md-4 col-sm-3 centered-cols">
				<div class="collection">
					<img src="<?php echo get_template_directory_uri(); ?>/images/dessert-table.jpg" alt="#" class="img-responsive center-block test-img">
					<a href="<?php echo get_template_directory_uri(); ?>/images/dessert-table.jpg" data-lightbox="dessert-table" data-title="Dessert Table 1">Dessert Tables</a>
					<a href="<?php echo get_template_directory_uri(); ?>/images/flag-cake-with-medallions.jpg" data-lightbox="dessert-table" data-title="Dessert Table 2"></a>
					<a href="<?php echo get_template_directory_uri(); ?>/images/for-him-cake.jpg" data-lightbox="dessert-table" data-title="Dessert Table 3"></a>
					<a href="<?php echo get_template_directory_uri(); ?>/images/cake-pop.jpg" data-lightbox="dessert-table" data-title="Dessert Table 4"></a>
				</div>
			</div>
			<div class="col-md-4 col-sm-3 centered-cols">
				<div class="collections">
					<img src="<?php echo get_template_directory_uri(); ?>/images/for-him-cake.jpg" alt="#" class="img-responsive center-block test-img">
					<a href="http://placehold.it/800x600?text=for-him-1" data-lightbox="for-him" data-title="For Him 1">For Him</a>
					<a href="http://placehold.it/800x600?text=for-him-2" data-lightbox="for-him" data-title="For Him 2"></a>
					<a href="http://placehold.it/800x600?text=for-him-3" data-lightbox="for-him" data-title="For Him 3"></a>
					<a href="http://placehold.it/800x600?text=for-him-4" data-lightbox="for-him" data-title="For Him 4"></a>
				</div>
			</div>
			<div class="col-md-4 col-sm-3 centered-cols">
				<div class="collections">
					<img src="<?php echo get_template_directory_uri(); ?>/images/candy-apple.jpg" alt="#" class="img-responsive center-block test-img">
					<a href="http://placehold.it/800x600?text=candy-apples-1" data-lightbox="candy-apples" data-title="Candy Apples 1">Candy Apples</a>
					<a href="http://placehold.it/800x600?text=candy-apples-2" data-lightbox="candy-apples" data-title="Candy Apples 2"></a>
					<a href="http://placehold.it/800x600?text=candy-apples-3" data-lightbox="candy-apples" data-title="Candy Apples 3"></a>
					<a href="http://placehold.it/800x600?text=candy-apples-4" data-lightbox="candy-apples" data-title="Candy Apples 4"></a>
				</div>
			</div>
			<div class="col-md-4 col-sm-3 centered-cols">
				<div class="collections">
					<img src="<?php echo get_template_directory_uri(); ?>/images/cake-pop.jpg" alt="#" class="img-responsive center-block test-img">
					<a href="http://placehold.it/800x600?text=cake-pop-1" data-lightbox="cake-pop" data-title="Cake Pops 1">Cake Pops</a>
					<a href="http://placehold.it/800x600?text=cake-pop-2" data-lightbox="cake-pop" data-title="Cake Pops 2"></a>
					<a href="http://placehold.it/800x600?text=cake-pop-3" data-lightbox="cake-pop" data-title="Cake Pops 3"></a>
					<a href="http://placehold.it/800x600?text=cake-pop-4" data-lightbox="cake-pop" data-title="Cake Pops 4"></a>
				</div>
			</div>
			<div class="col-md-4 col-sm-3 centered-cols">
				<div class="collections">
					<img src="<?php echo get_template_directory_uri(); ?>/images/cupcakes-with-shells.jpg" alt="#" class="img-responsive center-block test-img">
					<a href="http://placehold.it/800x600?text=cupcakes-1" data-lightbox="cupcakes" data-title="Cupcakes 1">Cupcakes</a>
					<a href="http://placehold.it/800x600?text=cupcakes-2" data-lightbox="cupcakes" data-title="Cupcakes 2"></a>
					<a href="http://placehold.it/800x600?text=cupcakes-3" data-lightbox="cupcakes" data-title="Cupcakes 3"></a>
					<a href="http://placehold.it/800x600?text=cupcakes-4" data-lightbox="cupcakes" data-title="Cupcakes 4"></a>
				</div>
			</div>
			<div class="col-md-4 col-sm-3 centered-cols">
				<div class="collections">
					<img src="<?php echo get_template_directory_uri(); ?>/images/flag-cake-with-medallions.jpg" alt="#" class="img-responsive center-block test-img">
					<a href="http://placehold.it/800x600?text=military-1" data-lightbox="military" data-title="Military 1">Military</a>
					<a href="http://placehold.it/800x600?text=military-2" data-lightbox="military" data-title="Military 2"></a>
					<a href="http://placehold.it/800x600?text=military-3" data-lightbox="military" data-title="Military 3"></a>
					<a href="http://placehold.it/800x600?text=military-4" data-lightbox="military" data-title="Military 4"></a>
				</div>
			</div>
		</div>
		<a href="#" class="btn-main">View All Cakes</a>
	</div>
</section>



	<section id="testSection">

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php the_content(); ?>

				<?php comments_template( '', true ); // Remove if you don't want comments ?>

				<br class="clear">

				<?php edit_post_link(); ?>

			</article>
			<!-- /article -->

		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h2><?php _e( 'Sorry, nothing to display.' ); ?></h2>

			</article>
			<!-- /article -->

		<?php endif; ?>



	</section>
<?php get_footer(); ?>
