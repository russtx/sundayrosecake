
  <section id="contact">
    <div class="container">
      <div class="borderBox">
        <h2>Lets Get Baking Today</h2>
        <hr />
        <?php echo do_shortcode('[contact-form-7 id="31" title="Contact form 1"]'); ?>
      </div>
    </div><!-- container -->
  </section>
  <section id="connect">
    <div class="container">
      <div class="social">
        <h2>Connect With Us</h2>
				<hr />
      </div>
      <div class="row">
        <div class="footerSocials hidden-xs ">
          <a href="<?php the_field('instagram', 'option'); ?>" target="_blank" class="instagram"></a>
          <a href="<?php the_field('facebook', 'option'); ?>" target="_blank" class="facebook"></a>
          <a href="<?php the_field('twitter', 'option'); ?>" target="_blank" class="twitter"></a>
        </div>

        <div class=" small-footer-socialIcons visible-xs-* hidden-sm hidden-md hidden-lg">
          <a href="<?php the_field('instagram', 'option'); ?>" target="_blank" class="instagram"></a>
          <a href="<?php the_field('facebook', 'option'); ?>" target="_blank" class="facebook"></a>
          <a href="<?php the_field('twitter', 'option'); ?>" target="_blank" class="twitter"></a>
        </div>

      </row>
    </div><!--container -->
  </section>
  </main>
  <footer>
    <div class="container-fluid">
      <div class="col-sm-3">
        <a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Logo" class="footer-logo-img "></a>
      </div>
      <div class="contact-nav col-sm-9 ">
        <p><a href="tel:<?php the_field('phone_number', 'option'); ?>"><?php the_field('phone_number', 'option'); ?></a> &middot; <a href="mailto:<?php the_field('email_address', 'option'); ?>"><?php the_field('email_address', 'option'); ?></a></p>
        <nav class="footer-nav">
          <?php wp_nav_menu( array('menu' => 'Main', 'menu_class' => 'nav navbar-nav navbar-right', 'depth'=> 3, 'container'=> false, 'walker'=> new Bootstrap_Walker_Nav_Menu)); ?>
        </nav>
      </div><!-- contact-nav -->
      <div class="clearfix"></div>
      <div class="col-xs-6 footerBottom">
          <p class="copyright">
            &copy; <?php echo date('Y'); ?> Copyright <?php bloginfo('name'); ?>.
          </p>
        </div>
        <div class="col-xs-6 footerBottom">
          <p class="childress">
            Created by<a href="#" target="_blank">The Childress Agency</a>
          </p>
        </div
    </div><!-- container-fluid -->
    <?php wp_footer(); ?>
  </footer>


</div> <!-- close main container -->
</body>
</html>
