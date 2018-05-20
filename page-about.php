<?php
?>
<!-- <header class="featured-hero" role="banner" data-interchange="[http://localhost/wordpress/wp-content/uploads/2018/05/Laura-Papple-640x200.jpg, small], [http://localhost/wordpress/wp-content/uploads/2018/05/Laura-Papple-1024x400.jpg, medium], [http://localhost/wordpress/wp-content/uploads/2018/05/Laura-Papple-1024x400.jpg, large], [http://localhost/wordpress/wp-content/uploads/2018/05/Laura-Papple-1024x400.jpg, xlarge]" data-resize="fcvz3t-interchange" id="fcvz3t-interchange" style="background-image: url(&quot;http://localhost/wordpress/wp-content/uploads/2018/05/Laura-Papple-1024x400.jpg&quot;);"> -->
<?php
if ( has_post_thumbnail( $post->ID ) ) : ?>
	<header class="featured-hero" role="banner" data-interchange="[<?php the_post_thumbnail_url( 'featured-small' ); ?>, small], [<?php the_post_thumbnail_url( 'featured-medium' ); ?>, medium], [<?php the_post_thumbnail_url( 'featured-large' ); ?>, large], [<?php the_post_thumbnail_url( 'featured-xlarge' ); ?>, xlarge]">
    <?php get_header(); ?>
    <a href="http://localhost/wordpress/"><div class="home-logo"></div></a>
</header>
<?php endif;

$about_text = get_theme_mod('artista_about_text');
$about_image = get_theme_mod('artista_about_image');
?>
<div class="main-container">
    <main class="main-content">
<div class="text-container">
    <div class="about-custom">
    <div class="about-text">
        <h3>About Us</h3>
    <?php if($about_text || is_customize_preview()):
        echo wpautop($about_text);
        endif; ?>
    </div>
<!--    <div class="about-img">-->
        <img class="about-img" src="<?php echo $about_image ?>">
<!--    </div>-->
    </div>
</div>
    </div>
    </div>
<?php get_footer(); ?>