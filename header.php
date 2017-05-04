<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <?php wp_head(); ?>
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Rochester" rel="stylesheet">

	</head>

  <body <?php body_class(isset($class) ? $class : ''); ?>>
    <header>
      <div class="masthead">
        <div class="container">
          <div class="col-xs-12 col-sm-4 phone-logo">
            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/logo-mini.png" alt="Mini Logo" class="mini-logo-img"></a>
            <a href="tel:555.555.5555" class="header-phone">555.555.5555</a>
          </div>

          <div class="col-xs-12 col-sm-4 main-logo top-header">
              <a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Logo" class="logo-img"></a>
          </div>

          <div class="col-xs-12 col-sm-4 social">
            <div class=" socialIcons">
              <a href="#" class="instagram"></a>
              <a href="#" class="facebook"></a>
              <a href="#" class="twitter"></a>
            </div>
          </div>
        </div><!-- container -->
      </div><!-- masthead -->

      <nav class="navbar navbar-default " data-spy="affix" data-offset-top="197" role="navigation" >
        <!-- Brand and toggle get grouped for better mobile display -->
          <div class="container">
            <div class="navbar-header">

              <div class="col-xs-12 col-sm-4 phone-logo">
                <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/logo-mini.png" alt="Mini Logo" class="mini-logo-img"></a>
                <a href="tel:555.555.5555" class="header-phone">555.555.5555</a>
              </div>

              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>

              <div class=" socialIcons">
                <a href="#" class="twitter"></a>
                <a href="#" class="facebook"></a>
                <a href="#" class="instagram"></a>
              </div>

            </div><!-- navbar-header -->

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse " >
             <?php wp_nav_menu( array('menu' => 'Main', 'menu_class' => 'nav navbar-nav ', 'depth'=> 3, 'container'=> false, 'walker'=> new Bootstrap_Walker_Nav_Menu)); ?>
            </div><!-- /.navbar-collapse -->
          </div><!-- container -->
      </nav>
</header>
<?php if(is_front_page()): ?>
    <section id="hp-hero" class="carousel slide" data-ride="">
      <div class="carousel-inner" role="listbox">

        <div class="item active">
          <img src="<?php echo get_template_directory_uri(); ?>/images/roses-coral-gradient.jpg" alt="Roses with Coral Gradient" />
          <div class="caption-wrapper">
            <div class="caption">
              <h1>Sweet Elegance of Cake Artistry</h1>
            </div>
          </div>
        </div>

        <div class="item">
          <img src="<?php echo get_template_directory_uri(); ?>/images/roses-coral-gradient.jpg" alt="Roses with Coral Gradient" />
          <div class="caption-wrapper">
            <div class="caption">
              <h1>Second Slide</h1>
            </div>
          </div>
        </div>

        <div class="item">
          <img src="<?php echo get_template_directory_uri(); ?>/images/roses-coral-gradient.jpg" alt="Roses with Coral Gradient" />
          <div class="caption-wrapper">
            <div class="caption">
              <h1>Third Slide</h1>
            </div>
          </div>
        </div>

      </div><!-- carousel-inner -->

          <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

    </section><!-- hp-hero -->

        <?php else: ?>

          

        <section id="heroSection">
        <div id="mainPhoto" style="background-image: url(<?php the_field('hero_image'); ?>);">

        <?php if(get_field('hero_title')): ?>

          <h1><?php the_field('hero_title'); ?></h1>

        <?php else: ?>

          <h1><?php echo get_the_title(); ?></h1>

        <?php endif; ?>

      <?php endif; ?>
      </section><!-- heroSection -->
