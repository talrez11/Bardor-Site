<?php
	// Add featured image support
	add_theme_support( 'post-thumbnails' );

	// Register theme menues
	function print_site_menues() {
		register_nav_menus(
			array(
				'Main Menu' => __( 'Main Menu' ),
				'Features Menu' => __( 'Feature Menu' ),
				'Main Navigation' => __('Main Navigation'),
				'Project Menu' => __('Project Menu')
			)
		);
	}
	add_action( 'init', 'print_site_menues' );
?>