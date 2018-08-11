<?php
	/*
		Template Name: Inner Page
	*/
	function inner_page_scripts() {
		wp_enqueue_style('inner-page', get_stylesheet_directory_uri().'/css/inner.css', array(), true);
		wp_enqueue_script('script', get_stylesheet_directory_uri().'/js/script.js', array('jquery'), true);
	}
	add_action( 'wp_enqueue_scripts', 'inner_page_scripts' );
?>

<?php get_header(); ?>

	<section class="top">
		<?php
			if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
				the_post_thumbnail( 'full' );
		}
		?>
	</section>

	<section class="content">
		<?php the_content(); ?>
	</section>

<?php get_footer(); ?>