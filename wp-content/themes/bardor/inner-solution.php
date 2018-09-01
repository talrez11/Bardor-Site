<?php
	/*
		Template Name: Solution Inner Page
	*/
	function inner_page_scripts() {
		wp_enqueue_script('slider', get_stylesheet_directory_uri().'/js/jquery.bxslider.js', array('jquery'), true);
		wp_enqueue_style('slider-style', get_stylesheet_directory_uri().'/css/jquery.bxslider.css', array(), true);
		wp_enqueue_script('inner-script', get_stylesheet_directory_uri().'/js/inner-script.js', array('jquery'), true);
		if(!is_mobile()) {
			wp_enqueue_script('slick-script', get_stylesheet_directory_uri().'/js/slick.js', array('jquery'), true);
			wp_enqueue_style('slick-theme-style', get_stylesheet_directory_uri().'/css/slick-theme.css', array(), true);
			wp_enqueue_style('slick-style', get_stylesheet_directory_uri().'/css/slick.css', array(), true);
			wp_enqueue_style('inner-page', get_stylesheet_directory_uri().'/css/inner.css', array(), true);
		} else {
			wp_enqueue_style('inner-page-mobile', get_stylesheet_directory_uri().'/css/inner_mobile.css', array(), true);
		}
	}
	add_action( 'wp_enqueue_scripts', 'inner_page_scripts' );
?>

<?php get_header(); ?>
	<!-- Include Social widget -->
	<?php if(!is_mobile()) { ?>
		<?php include_once('includes/social.php'); ?>
	<?php } ?>

	<section id="gallery" class="gallery">
		<?php if( have_rows('slider_images') ): ?>
			<?php while( have_rows('slider_images') ): the_row(); // vars
				$image = get_sub_field('image');
				$description = get_sub_field('description');
				$class = get_sub_field('description_position');
			?>
				<div class="slide" style="background-image: url('<?php echo $image; ?>');">
					<div class="<?php echo $class.' info' ?>">
						<p><?php echo $description; ?></p>
					</div>
				</div>
			<?php endwhile; ?>
		<?php endif; ?>
	</section>

	<section class="content">
		<h2><?php echo the_title(); ?></h2>
		<?php echo the_content(); ?>
	</section>

	<?php if( have_rows('links') ): ?>
		<section class="solution_links">
			<?php while( have_rows('links') ): the_row(); // vars
				$title = get_sub_field('title');
				$url = get_sub_field('link');
				$image = get_sub_field('image');
			?>
				<a href="<?php echo $url; ?>">
					<img src="<?php echo $image; ?>" alt="<?php echo $title; ?>">
					<span><?php echo $title; ?></span>
				</a>
			<?php endwhile; ?>
		</section>
	<?php endif; ?>

<?php get_footer(); ?>