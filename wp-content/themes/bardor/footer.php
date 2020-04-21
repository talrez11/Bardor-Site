<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 */
?>
	</div><!-- .site-content -->
	<footer>
		<a class="logo" href="<?php bloginfo('home'); ?>">
			<img src="<?php echo get_stylesheet_directory_uri().'/images/logo.png'; ?>" alt="<?php bloginfo('name'); ?>"/>
		</a>
		<ul>
			<li>
				הסחלב 18 צורן ת.ד 986 מיקוד 42823
			</li>
			<li>
				<a href="tel:0544439076">טלפון:0544439076 </a>
			</li>
			<li>
				<a href="mailto:office@bardor.co.il">דוא"ל:office@bardor.co.il</a>
			</li>
		</ul>
	</footer><!-- .site-footer -->
</div><!-- .site -->

<?php wp_footer(); ?>

<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5e9f388e0befe3ed"></script>

</body>
</html>