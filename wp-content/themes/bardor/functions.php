<?php
	// Add featured image support
	add_theme_support( 'post-thumbnails' );

	// Register theme menues
	function print_site_menues() {
		register_nav_menus(
			array(
				'Main Menu' => __( 'Main Menu' ),
				'Features Menu' => __( 'Feature Menu' ),
				'Main Navigation' => __('Main Navigation')
			)
		);
	}
	add_action( 'init', 'print_site_menues' );

	function home_page_scripts() {
		wp_enqueue_script('slider', get_stylesheet_directory_uri().'/js/jquery.bxslider.js', array('jquery'), true);
		wp_enqueue_style('slider-style', get_stylesheet_directory_uri().'/css/jquery.bxslider.css', array(), true);
		wp_enqueue_style('home-page', get_stylesheet_directory_uri().'/css/home.css', array(), true);
		// Load script file
		wp_enqueue_script('slick-script', get_stylesheet_directory_uri().'/js/slick.js', array('jquery'), true);
		wp_enqueue_style('slick-theme-style', get_stylesheet_directory_uri().'/css/slick-theme.css', array(), true);
		wp_enqueue_style('slick-style', get_stylesheet_directory_uri().'/css/slick.css', array(), true);

		wp_enqueue_script('script', get_stylesheet_directory_uri().'/js/script.js', array('jquery'), true);

	}
	add_action( 'wp_enqueue_scripts', 'home_page_scripts' );
?>