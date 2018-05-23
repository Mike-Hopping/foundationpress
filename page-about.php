<?php
/*
Template Name: About
*/
?>
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
    <div class="donate-btn-container">
		<a href="http://localhost/wordpress/join/" button type="button" class="donate-btn">Donate</button></a>
	</div>
   <div class="about-img">
        <img class="about-img" src="<?php echo $about_image ?>">
   </div>
    </div>
</div>
    </div>
    </div>
<?php get_footer(); ?>