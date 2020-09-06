<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>
<body class="bg-light" <?php body_class(); ?>>

	<body data-spy="scroll" data-target="#ftco-navbar-spy" data-offset="0">

	<div class="site-wrap">

		<!-- <nav class="site-menu" id="ftco-navbar-spy">
			<div class="site-menu-inner" id="ftco-navbar">
				<ul class="list-unstyled">
					<li><a href="#section-home">Home</a></li>
					<li><a href="#section-about">About Us</a></li>
					<li><a href="#section-menu">Our Menu</a></li>
					<li><a href="#section-reservation">Reserve A Table</a></li>
					<li><a href="#section-contact">Contact</a></li>
				</ul>
			</div>
		</nav> -->

		<header class="site-header">
			<div class="row align-items-center">
				<div class="col-5 col-md-3">
				<?php get_sidebar(  ); ?>
				</div>
				<div class="col-2 col-md-6 text-center site-logo-wrap">
					<a href="index.html" class="site-logo">M</a>
				</div>
				<div class="col-5 col-md-3 text-right menu-burger-wrap">
					<a href="#" class="site-nav-toggle js-site-nav-toggle"><i></i></a>

				</div>
			</div>

			<!-- <nav id="site-navigation" class="main-navigation" role="navigation"> -->
			<nav class="site-menu" id="ftco-navbar-spy">
				<?php
					$args = [
						'theme_location' => 'main-menu',
						'containter' => 'div',
				
						'items_wrap'      =>  '<ul id="%1$s" class="%2$s">%3$s</ul>',
						'menu_class'      =>  'list-unstyled',
					];
					wp_nav_menu( $args );
				?>
	  	</nav>	

		</header> <!-- site-header -->

		<div class="main-wrap " id="section-home">

