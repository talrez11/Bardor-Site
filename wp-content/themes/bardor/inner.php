<?php
	/*
		Template Name: Inner Page
	*/
	function inner_page_scripts() {
		wp_enqueue_style('inner-page', get_stylesheet_directory_uri().'/css/inner.css', array(), true);
		wp_enqueue_script('inner-script', get_stylesheet_directory_uri().'/js/inner-script.js', array('jquery'), true);
	}
	add_action( 'wp_enqueue_scripts', 'inner_page_scripts' );
?>

<?php get_header(); ?>
	<!-- Include Social widget -->
	<?php include_once('includes/social.php'); ?>

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
		<?php the_content(); ?>
	</section>

<?php get_footer(); ?>