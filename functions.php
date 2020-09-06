<?php 

// Add theme support
add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'post-format', ['aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat'] );
add_theme_support( 'html5' );
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'custom-background' );
add_theme_support( 'custom-header' );
add_theme_support( 'custom-logo' );
add_theme_support( 'custom-customize-refresh-widgets' );
add_theme_support( 'starter-content' );



// Load in our CSS
function foodio_enqueue_styles() {

	wp_enqueue_style( 'playfair-font', 'https://fonts.googleapis.com/css?family=Playfair+Display:300,400,700,800|Open+Sans:300,400,700', [], '', 'all');
	wp_enqueue_style( 'bootstrap', get_stylesheet_directory_uri() . '/assets/css/bootstrap.css', [ 'playfair-font' ], time(), 'all');
	wp_enqueue_style( 'animate', get_stylesheet_directory_uri() . '/assets/css/animate.css', [ 'bootstrap' ], time(), 'all');
	wp_enqueue_style( 'owl-carousel', get_stylesheet_directory_uri() . '/assets/css/owl.carousel.min.css', [ 'animate' ], time(), 'all');
	wp_enqueue_style( 'magnific-popup', get_stylesheet_directory_uri() . '/assets/css/magnific-popup.css', [ 'owl-carousel' ], time(), 'all');
	// wp_enqueue_style( 'aos', get_stylesheet_directory_uri() . '/assets/css/aos.css', [ 'magnific-popup' ], time(), 'all');
	wp_enqueue_style( 'ionicons', get_stylesheet_directory_uri() . '/assets/fonts/ionicons/css/ionicons.min.css', [  ], time(), 'all');
	wp_enqueue_style( 'font-awesome', get_stylesheet_directory_uri() . '/assets/fonts/fontawesome/css/font-awesome.min.css', [ 'ionicons' ], time(), 'all');
	wp_enqueue_style( 'flaticon', get_stylesheet_directory_uri() . '/assets/fonts/flaticon/font/flaticon.css', [ 'font-awesome' ], time(), 'all');
	wp_enqueue_style( 'main', get_stylesheet_directory_uri() . '/style.css', [ 'flaticon' ], time(), 'all');
	
}
add_action( 'wp_enqueue_scripts', 'foodio_enqueue_styles' );

// Load in our JS
function foodio_enqueue_scripts() {

	wp_enqueue_script( 'popper', get_stylesheet_directory_uri() . '/assets/js/popper.min.js', [ 'jquery' ], time(), true);
	wp_enqueue_script( 'bootstrap', get_stylesheet_directory_uri() . '/assets/js/bootstrap.min.js', [ 'popper' ], time(), true);
	wp_enqueue_script( 'owl-carousel', get_stylesheet_directory_uri() . '/assets/js/owl.carousel.min.js', [ 'bootstrap' ], time(), true);
	wp_enqueue_script( 'jquery-waypoints', get_stylesheet_directory_uri() . '/assets/js/jquery.waypoints.min.js', [ 'owl-carousel' ], time(), true);
	wp_enqueue_script( 'bootstrap-datepicker', get_stylesheet_directory_uri() . '/assets/js/bootstrap-datepicker.js', [ 'jquery-waypoints' ], time(), true);
	wp_enqueue_script( 'jquery-timepicker', get_stylesheet_directory_uri() . '/assets/js/jquery.timepicker.min.js', [ 'bootstrap-datepicker' ], time(), true);
	wp_enqueue_script( 'jquery-stellar', get_stylesheet_directory_uri() . '/assets/js/jquery.stellar.min.js', [ 'jquery-timepicker' ], time(), true);
	wp_enqueue_script( 'jquery-easing', get_stylesheet_directory_uri() . '/assets/js/jquery.easing.1.3.js', [ 'jquery-stellar' ], time(), true);
	wp_enqueue_script( 'aos', get_stylesheet_directory_uri() . '/assets/js/aos.js', [ 'jquery-easing' ], time(), true);
	wp_enqueue_script( 'main', get_stylesheet_directory_uri() . '/assets/js/main.js', [ 'aos' ], time(), true);
	
}
add_action( 'wp_enqueue_scripts', 'foodio_enqueue_scripts' );


// Load in our JS
function newwphierarchy_enqueue_scripts() {

	// wp_enqueue_script( 'theme', get_stylesheet_directory_uri() . '/assets/js/theme.js', [], time(), true );
	wp_enqueue_script( 'jquery-theme-js', get_stylesheet_directory_uri() . '/assets/js/jquery.theme.js', [ 'jquery' ], time(),  );

}
add_action( 'wp_enqueue_scripts', 'newwphierarchy_enqueue_scripts' );


// Register Menu Locations
register_nav_menus( [
	'main-menu' => esc_html__( 'Main Menu', 'foodio' )
]);


// Setup Widget Areas
function foodio_widgets_init() {
	register_sidebar( [
		'name'          => esc_html__( 'Main Sidebar', 'foodio' ),
		'id'            => 'main-sidebar',
		'description'   => esc_html__( 'Add widgets for main sidebar here', 'foodio' ),
		'before_widget' => '<section class="widget">',
		'after_widget'  => '</section>',
		'before_title' => '<h2 class="widget-title">',
		'after_title'  => '</h2>',
	]);
	register_sidebar( [
		'name'          => esc_html__( 'Front Page Widgets', 'foodio' ),
		'id'            => 'front-page',
		'description'   => esc_html__( 'Add widgets for the front page here', 'foodio' ),
		'before_widget' => '<section class="widget">',
		'after_widget'  => '</section>',
		'before_title' => '<h2 class="widget-title">',
		'after_title'  => '</h2>',
	]);
}
add_action( 'widgets_init', 'foodio_widgets_init' );




?>