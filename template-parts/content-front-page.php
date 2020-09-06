<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		
		<div class="cover_1 overlay bg-light">
			<div class="img_bg" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/images/slider-1.jpg');" data-stellar-background-ratio="0.5">
				<div class="container">
					<div class="row align-items-center justify-content-center text-center">
						<div class="col-md-10" data-aos="fade-up">
							<h2 class="heading mb-5">	<?php the_title(); ?></h2>
							<p>
								<a href="#section-reservation" class="smoothscroll btn btn-outline-white px-5 py-3">
								<?php esc_html_e( 'Reserve a tabe', 'foodio' );	?>
								</a>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div> <!-- .cover_1 -->
		
		<div class="section"  data-aos="fade-up">
			<div class="container">
				<div class="row section-heading justify-content-center mb-5">
					<div class="col-md-8 text-center">
						<h2 class="heading mb-3"><?php esc_html_e( 'Find your best food', 'foodio' );	?></h2>
						<p class="sub-heading mb-5">Free Website Template For Restaurants Made by Colorlib</p>  
					</div>
				</div>
				<div class="row">

					<div class="ftco-46">
						<div class="ftco-46-row d-flex flex-column flex-lg-row">
							<div class="ftco-46-image" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/images/img_1.jpg');"></div>
							<div class="ftco-46-text ftco-46-arrow-left">
								<h4 class="ftco-46-subheading">Vegies</h4>
								<h3 class="ftco-46-heading">Beef Empanadas</h3>
								<p class="mb-5">Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
								<p><a href="#" class="btn-link">Learn More <span class="ion-android-arrow-forward"></span></a></p>
							</div>
							<div class="ftco-46-image" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/images/img_2.jpg');"></div> 
						</div>

						<div class="ftco-46-row d-flex flex-column flex-lg-row">
							<div class="ftco-46-text ftco-46-arrow-right">
								<h4 class="ftco-46-subheading">Food</h4>
								<h3 class="ftco-46-heading">Buttermilk Chicken Jibaritos</h3>
								<p class="mb-5">A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
								<p><a href="#" class="btn-link">Learn More <span class="ion-android-arrow-forward"></span></a></p>
							</div>
							<div class="ftco-46-image" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/images/img_3.jpg');"></div>
							<div class="ftco-46-text ftco-46-arrow-up">
								<h4 class="ftco-46-subheading">Food</h4>
								<h3 class="ftco-46-heading">Chicken Chimichurri Croquettes</h3>
								<p class="mb-5">Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life.</p>
								<p><a href="#" class="btn-link">Learn More <span class="ion-android-arrow-forward"></span></a></p>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div> <!-- .section -->

	</article>