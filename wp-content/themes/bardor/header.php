<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 */
	if(!is_mobile()) {
		wp_enqueue_style('header', get_stylesheet_directory_uri().'/css/header.css?vn='.THEME_VERSION, array(), true);
	} else {
		wp_enqueue_style('header', get_stylesheet_directory_uri().'/css/header_mobile.css?vn='.THEME_VERSION, array(), true);
	}
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-126271633-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-126271633-1');
    </script>
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
			<?php if(!is_mobile()) { ?>
				<a class="phone" href="tel:054-4439076">054-4439076</a>
			<?php } else { ?>
				<a class="phone" href="tel:054-4439076"></a>
			<?php } ?>
			<a class="logo" href="<?php bloginfo('home'); ?>">
				<img src="<?php echo get_stylesheet_directory_uri().'/images/logo.png'; ?>" alt="<?php bloginfo('name'); ?>"/>
			</a>
			<a href="javascript:void(0)" class="menu"><span></span></a>
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
		</nav>