<?php
/*
    Template Name: Inner Page
*/
function inner_page_scripts() {
    wp_enqueue_script('slider', get_stylesheet_directory_uri().'/js/jquery.bxslider.js', array('jquery'), true);
    wp_enqueue_style('slider-style', get_stylesheet_directory_uri().'/css/jquery.bxslider.css', array(), true);
    wp_enqueue_script('inner-script', get_stylesheet_directory_uri().'/js/inner-script.js?vn='.THEME_VERSION, array('jquery'), true);
    if(!is_mobile()) {
        wp_enqueue_script('slick-script', get_stylesheet_directory_uri().'/js/slick.js', array('jquery'), true);
        wp_enqueue_style('slick-theme-style', get_stylesheet_directory_uri().'/css/slick-theme.css', array(), true);
        wp_enqueue_style('slick-style', get_stylesheet_directory_uri().'/css/slick.css', array(), true);
        wp_enqueue_style('inner-page', get_stylesheet_directory_uri().'/css/inner.css?vn='.THEME_VERSION, array(), true);
    } else {
        wp_enqueue_style('inner-page-mobile', get_stylesheet_directory_uri().'/css/inner_mobile.css?vn='.THEME_VERSION, array(), true);
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
        <?php if(!is_mobile()) { ?>
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
        <?php } else {?>
            <?php if( have_rows('slider_images') ): ?>
                <?php while( have_rows('slider_images') ): the_row(); // vars
                    $image = get_sub_field('image');
                    $description = get_sub_field('description');
                    $class = get_sub_field('description_position');
                    ?>
                    <div class="slide" style="background-image: url('<?php echo $image; ?>');">
                    </div>
                    <?php break; ?>
                <?php endwhile; ?>
            <?php endif; ?>
        <?php } ?>
    </section>

    <section class="content">
        <h2><?php echo the_title(); ?></h2>
        <?php echo the_content(); ?>
        <?php if( have_rows('page_content') ): ?>
            <?php while( have_rows('page_content') ): the_row(); // vars
                $title = get_sub_field('title');
                $description = get_sub_field('description');
                ?>
                <article>
                    <div class="content">
                        <h3><?php echo trim($title); ?></h3>
                        <?php echo $description; ?>
                    </div>
                    <div class="image">
                        <?php if( have_rows('content_image') ): ?>
                            <?php while( have_rows('content_image') ): the_row();?>
                                <div class="wrapper">
                                    <img src="<?php echo get_sub_field('image'); ?>" alt="<?php echo get_sub_field('name'); ?>">
                                    <span><?php echo get_sub_field('name'); ?></spa<?php echo get_sub_field('name'); ?>n>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </article>
            <?php endwhile; ?>
        <?php endif; ?>
    </section>

    <!-- Share options -->
    <?php include_once('includes/share.php'); ?>

<?php if( have_rows('page_gallery') ): ?>
    <section class="product_images">
        <?php while( have_rows('page_gallery') ): the_row(); // vars
            $image = get_sub_field('image');
            $title = get_sub_field('title');
            ?>
            <div>
                <img src="<?php echo $image; ?>" alt="<?php echo $title ?>">
                <span><?php echo $title; ?></span>
            </div>
        <?php endwhile; ?>
    </section>
<?php endif; ?>

<?php if( have_rows('logo_images') ): ?>
    <section class="logos">
        <?php if(!wp_is_mobile()): ?>
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
    </section>
<?php endif; ?>


<?php get_footer(); ?>