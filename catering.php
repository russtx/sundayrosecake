<?php /* Template Name: Catering Page  */ get_header(); ?>

<main >
	<!-- section -->
	<section id="cateringSection">

    <div class="container">

        <h2>Full Service Dessert Tables</h2>

        <hr />

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

    			<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

    		</article>
    		<!-- /article -->

    	<?php endif; ?>

      <a href="<?php echo home_url(); ?>/contact/" class="btn-main">Contact Us Today</a>

    </div><!-- container -->

	</section>
	<!-- /section -->
</main>



<?php get_footer(); ?>
