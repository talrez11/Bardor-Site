<?php
global $post;
$blog_url = get_permalink( get_option( $post->ID ) );
?>

<div class="share">
    <h3>שתפו אותנו</h3>
    <ul>
        <li>
            <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo $blog_url; ?>" target="_blank">
                <img src="<?php echo get_stylesheet_directory_uri().'/images/linkedin.png'; ?>" alt="linkedin"/>
            </a>
        </li>
        <li>
            <a href="mailto:?<?php echo $blog_url; ?>" target="_blank">
                <img src="<?php echo get_stylesheet_directory_uri().'/images/mail.png'; ?>" alt="mail"/>
            </a>
        </li>
        <li>
            <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $blog_url; ?>" target="_blank">
                <img src="<?php echo get_stylesheet_directory_uri().'/images/facebook.png'; ?>" alt="facebook"/>
            </a>
        </li>
    </ul>
</div>
