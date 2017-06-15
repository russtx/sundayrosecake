<?php /* Template Name: Contact Page  */ get_header(); ?>

<main >
	<!-- section -->
	<section id="contactSection">
    <div class="container">
      <div class="row">
        <h2>Call Us</h2>
        <hr />
        <span><a href="tel:<?php the_field('phone_number', 'option'); ?>" class="header-phone"><?php the_field('phone_number', 'option'); ?></a></span>
				<h2>Our Address</h2>
        <hr />
        <span class="address"><?php the_field('address', 'option'); ?></span>
        <h2>Email Us</h2>
        <hr />
        <?php echo do_shortcode('[contact-form-7 id="108" title="Contact form 2"]'); ?>
      </div><!-- row -->
    </div><!-- container-->



	</section>
	<!-- /section -->
</main>



<?php get_footer('footer-2'); ?>
