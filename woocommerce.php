<?php
/**
 * Basic WooCommerce support
 * For an alternative integration method see WC docs
 * http://docs.woothemes.com/document/third-party-custom-theme-compatibility/
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */
?>
<?php
if ( has_post_thumbnail( $post->ID ) ) : ?>
	<header class="featured-hero" role="banner" data-interchange="[<?php the_post_thumbnail_url( 'featured-small' ); ?>, small], [<?php the_post_thumbnail_url( 'featured-medium' ); ?>, medium], [<?php the_post_thumbnail_url( 'featured-large' ); ?>, large], [<?php the_post_thumbnail_url( 'featured-xlarge' ); ?>, xlarge]">
    <?php get_header(); ?>
    <a href="http://localhost/wordpress/"><div class="home-logo"></div></a>
</header>
<?php endif;

?>
<div class="main-container">
	<div class="main-grid">
		<main class="main-content">
			<div class="woocommerce">
				<?php woocommerce_content(); ?>
			</div>
		</main>
	<!-- <?php get_sidebar(); ?> -->
	</div>
</div>
<?php get_footer();
