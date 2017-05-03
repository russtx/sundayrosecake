<?php /* Template Name: Home Page  */ get_header(); ?>

<main>
		<section id="collections">
			<div class="container">
				<div class="borderBox">
					<h2>Our Collections</h2>
					<hr />
					<div class="row">

					</div><!-- row -->
					<a href="#" class="btn-main">View All Cakes</a>
				</div><!-- borderBox-->
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
						<a href="#" class="btn-main">Learn More</a>
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
								<a href="#" class="btn-main left">Load More</a>
							</div><div class="col-xs-12 col-sm-6 ">
								<a href="#" class="btn-main right ">Follow Us<img src="<?php echo get_template_directory_uri(); ?>/images/instagram.png" alt="instagram" class="instagram-img"></a>
							</div>
						</div><!-- row -->
					</div><!-- borderBox -->
				</div><!-- container -->

		</section>
		<section id="qanda">
			<div class="container">
				<h2>Questions and Answers</h2>
				<hr />
				<div class="panel-group" id="accordian" role="tablist" aria-multiselectable="true">

					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="heading1">
							<h3 class="panel-title">
								<a href="#collapse1" role="button" data-toggle="collapse" data-parent="#accordian" aria-expanded="true" aria-controls="collapse1">
									Do you have a catalog with additional samples, sizes, and photographs?
								</a>
							</h3>
						</div>
						<div id="collapse1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading1">
							<div class="panel-body">
								<p>Since all of our cakes are custom-made to individual specifications, no catalog per se is available. Our website is designed to give an introduction to our style and services. We continually evolve and as we do, we introduce new, seasonal designs which are available for your review at our showroom and are frequently showcased in magazines. Additionally, we are constantly updating our Facebook page and there you will also find pictures of a wide sleection of our cakes.</p>
							</div>
						</div>
					</div>

					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="heading2">
							<h3 class="panel-title">
								<a href="#collapse2" role="button" data-toggle="collapse" data-parent="#accordian" aria-expanded="false" aria-controls="collapse2">
									I don't see any prices. How much do your cakes cost?
								</a>
							</h3>
						</div>
						<div id="collapse2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading2">
							<div class="panel-body">
								<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
							</div>
						</div>
					</div>

					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="heading3">
							<h3 class="panel-title">
								<a href="#collapse3" role="button" data-toggle="collapse" data-parent="#accordian" aria-expanded="false" aria-controls="collapse3">
									When should I book my cake?
								</a>
							</h3>
						</div>
						<div id="collapse3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading3">
							<div class="panel-body">
								<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
							</div>
						</div>
					</div>

					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="heading4">
							<h3 class="panel-title">
								<a href="#collapse4" role="button" data-toggle="collapse" data-parent="#accordian" aria-expanded="false" aria-controls="collapse4">
									I'm getting amrried ourside of Northern VA. Can you ship my cake?
								</a>
							</h3>
						</div>
						<div id="collapse4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading4">
							<div class="panel-body">
								<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
							</div>
						</div>
					</div>

					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="heading5">
							<h3 class="panel-title">
								<a href="#collapse5" role="button" data-toggle="collapse" data-parent="#accordian" aria-expanded="false" aria-controls="collapse5">
									My local baker is making my cake. Can you supply instructions, measurements, or sources?
								</a>
							</h3>
						</div>
						<div id="collapse5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading5">
							<div class="panel-body">
								<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
							</div>
						</div>
					</div>

				</div><!-- panel-group -->
			</div><!-- container -->
		</section>



<?php get_footer(); ?>
