<?php
	/*
		Template Name: Home Page
	*/
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

<?php get_header(); ?>
	<!-- Include Social widget -->
	<?php include_once('includes/social.php'); ?>
	<!-- Page image -->
	<section id="gallery" class="gallery">
		<?php if( have_rows('slider_images') ): ?>
			<?php while( have_rows('slider_images') ): the_row(); // vars
				$image = get_sub_field('image');
			?>
				<div class="slide" style="background-image: url('<?php echo $image; ?>');"></div>
			<?php endwhile; ?>
		<?php endif; ?>
	</section>

	<div class="features">
		<?php
			wp_nav_menu( array(
				'theme_location' => 'Features Menu',
				'item_spacing' => 'discard',
				'menu_id' => 'feature')
			);
		?>
	</div>

	<div class="project">
		<?php
			wp_nav_menu( array(
				'theme_location' => 'Project Menu',
				'item_spacing' => 'discard',
				'menu_id' => 'project')
			);
		?>
	</div>

	<section class="content">
		<?php echo get_post_field('post_content', $post->ID); ?>
	</section>

	<section class="logos">
		<h2>בין לקוחותינו</h2>
		<?php if(!wp_is_mobile()): ?>
			<?php if( have_rows('logo_images') ): ?>
				<ul class="slides">
				<?php while( have_rows('logo_images') ): the_row();

					// vars
					$image = get_sub_field('image');
					$alt = get_sub_field('alt');
					?>

					<li class="slide">
						<img src="<?php echo $image; ?>" alt="<?php echo $alt; ?>" />
					</li>
				<?php endwhile; ?>
			<?php endif; ?>
		<?php endif; ?>
	</section>
<?php get_footer(); ?>