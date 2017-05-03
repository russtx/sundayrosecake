
  <section id="contact">
    <div class="container">

      <h2>Lets Get Baking Today</h2>
      <hr />
      <?php echo do_shortcode('[contact-form-7 id="31" title="Contact form 1"]'); ?>
    </div><!-- container -->
  </section>
  <section id="connect">
    <div class="container">
      <div class="social">
        <h2>Connect With Us</h2>
				<hr />
      </div>
      <div class="row">
        <div class="footerSocials ">
          <a href="#" class="twitter"></a>
          <a href="#" class="facebook"></a>
          <a href="#" class="instagram"></a>
        </div>
      </row>
    </div><!--container -->
  </section>
  </main>
  <footer>
        <div class="container-fluid">
          <a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Logo" class="logo-img"></a>
          <div class="contact-nav">
            <p><a href="tel:555.555.5555">555.555.5555</a> &middot; <a href="mailto:info@sundayrosecakes.com">info@sundayrosecakes.com</a></p>
            <nav class="footer-nav">
              <ul class="nav navbar-nav navbar-right">
                <li><a href="#">About</a></li>
                <li><a href="#">Wedding Cakes</a></li>
                <li><a href="#">Celebrations</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Menu</a></li>
                <li><a href="#">Catering</a></li>
                <li><a href="#">Contact</a></li>
              </ul>
            </nav>
          </div>
        </div>
        <?php wp_footer(); ?>
      </footer>


</div> <!-- close main container -->
</body>
</html>
