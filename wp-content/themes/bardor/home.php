<?php
	/*
		Template Name: Home Page
	*/
?>

<?php get_header(); ?>
	<!-- Page image -->
	<section>
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