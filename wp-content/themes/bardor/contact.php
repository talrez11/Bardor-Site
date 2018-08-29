<?php
	/*
		Template Name: Contact Page
	*/
	function inner_page_scripts() {
		wp_enqueue_script('slider', get_stylesheet_directory_uri().'/js/jquery.bxslider.js', array('jquery'), true);
		wp_enqueue_style('slider-style', get_stylesheet_directory_uri().'/css/jquery.bxslider.css', array(), true);
		wp_enqueue_style('inner-page', get_stylesheet_directory_uri().'/css/inner.css', array(), true);
		wp_enqueue_script('contact-script', get_stylesheet_directory_uri().'/js/contact-script.js', array('jquery'), true);
	}
	add_action( 'wp_enqueue_scripts', 'inner_page_scripts' );
?>

<?php get_header(); ?>
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
		<form id="signup" method="post">
			<fieldset>
				<div>
					<label for="fname">שם:</label> <input name="fname" id="fname" type="text"/>
				</div>
				<div>
					<label for="lname">טלפון:</label> <input name="lname" id="lname" type="text"/>
				</div>
				<div>
					<label for="email">דוא"ל אלקטרוני:</label> <input name="email" id="email" type="text"/>
				</div>
				<div>
					<label for="textarea">הערות:</label> <textarea name="message" id="textarea" ></textarea>
				</div>
				<div>
					<input type="submit" title="Send" value="שלח"/>
				</div>
			</fieldset>
		</form>
		<div id="response"></div>
		<div class="lds-roller"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
	</section>
<?php get_footer(); ?>