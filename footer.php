
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
          <a href="#" class="twitter"></a>
          <a href="#" class="facebook"></a>
          <a href="#" class="instagram"></a>
        </div>

        <div class=" small-footer-socialIcons visible-xs-* hidden-sm hidden-md hidden-lg">
          <a href="#" class="instagram"></a>
          <a href="#" class="facebook"></a>
          <a href="#" class="twitter"></a>
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
        <p><a href="tel:555.555.5555">555.555.5555</a> &middot; <a href="mailto:info@sundayrosecakes.com">info@sundayrosecakes.com</a></p>
        <nav class="footer-nav">
          <?php wp_nav_menu( array('menu' => 'Main', 'menu_class' => 'nav navbar-nav navbar-right', 'depth'=> 3, 'container'=> false, 'walker'=> new Bootstrap_Walker_Nav_Menu)); ?>
        </nav>
      </div><!-- contact-nav -->
    </div><!-- container-fluid -->
    <?php wp_footer(); ?>
  </footer>


</div> <!-- close main container -->
</body>
</html>
