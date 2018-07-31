<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<title><?php wp_title(); ?></title>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

		<header>
			<!-- Display Header Menu -->
			<?php if(!wp_is_mobile()): ?>
				<a class="logo" href="<?php bloginfo('home'); ?>">
					<img src="<?php echo get_stylesheet_directory_uri().'/images/logo.png'; ?>" alt="<?php bloginfo('name'); ?>"/>
				</a>
				<a class="phone" href="tel:054-4439076">054-4439076</a>
			<?php endif; ?>
		</header><!-- .site-header -->
		<nav>
			<!-- Main Menu -->
			<?php
				wp_nav_menu( array(
					'theme_location' => 'Main Menu',
					'item_spacing' => 'discard'
					)
				);
			?>
			<!-- Main Navigation -->
			<?php
				wp_nav_menu( array(
					'theme_location' => 'Main Navigation',
					'item_spacing' => 'discard'
					)
				);
			?>
		</nav>