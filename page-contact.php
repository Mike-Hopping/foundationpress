<?php
/*
Template Name: Contact
*/
?>
<?php
if ( has_post_thumbnail( $post->ID ) ) : ?>
	<header class="featured-hero" role="banner" data-interchange="[<?php the_post_thumbnail_url( 'featured-small' ); ?>, small], [<?php the_post_thumbnail_url( 'featured-medium' ); ?>, medium], [<?php the_post_thumbnail_url( 'featured-large' ); ?>, large], [<?php the_post_thumbnail_url( 'featured-xlarge' ); ?>, xlarge]">
    <?php get_header(); ?>
    <a href="http://localhost/wordpress/"><div class="home-logo"></div></a>
</header>
<?php endif;

$contact_text = get_theme_mod('artista_contact_text');
?>
<div class="main-container">
    <main class="main-content">
    <div class="text-container">
    <div class="contact-container">
    <div id="map-container">Map goes here</div>
        <br>
        <script>
            function myMap() {
                var mapOptions = {
                    center: new google.maps.LatLng(-36.858883, 174.751738),
                    zoom: 19
                };
                var map = new google.maps.Map(document.getElementById("map-container"), mapOptions);
            }
        </script>
    <div class="contact-info">
        <div class="contact-text">
    <h3>Contact Us</h3>
            <?php if($contact_text || is_customize_preview()):
                echo wpautop($contact_text);
            endif; ?>
        </div>
        <a href=""><strong>Please click here to enquire</strong></a>
    </div>
    </div>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCZHMT4UAIYHOtBxAh-BnJoZ8vvEDPWYYM&callback=myMap"></script>
</div>
    </div>
</div>
    </div>
    </div>
<?php get_footer(); ?>