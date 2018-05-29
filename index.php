<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<header class="featured-hero" role="banner" data-interchange="[http://michael.hopping.wux.yoobee.net.nz/artistsalliance/wp-content/uploads/2018/05/Laura-Papple-640x200.jpg, small], [http://michael.hopping.wux.yoobee.net.nz/artistsalliance/wp-content/uploads/2018/05/Laura-Papple-1024x400.jpg, medium], [http://michael.hopping.wux.yoobee.net.nz/artistsalliance/wp-content/uploads/2018/05/Laura-Papple-1024x400.jpg, large], [http://michael.hopping.wux.yoobee.net.nz/artistsalliance/wp-content/uploads/2018/05/Laura-Papple-1024x400.jpg, xlarge]" data-resize="nnnflm-interchange" id="nnnflm-interchange" style="background-image: url(&quot;http://michael.hopping.wux.yoobee.net.nz/artistsalliance/wp-content/uploads/2018/05/Laura-Papple-1024x400.jpg&quot;);" data-events="resize">
<?php get_header(); ?>
</header>
<div class="woocommerce">
<div class="main-container">
<div class="main-grid">
	<main class="main-content">
	<?php if ( have_posts() ) : ?>

		<?php /* Start the Loop */ ?>
		<?php while ( have_posts() ) : the_post(); ?>
		<a href="<?php echo site_url() . '/template-parts/' . $post->post_name?>">
            <img alt="<?php the_title(); ?>" src="<?php the_post_thumbnail_url(); ?>">
            </a>
			<?php get_template_part( 'template-parts/content', get_post_format() ); ?>
		<?php endwhile; ?>

		<?php else : ?>
			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; // End have_posts() check. ?>

		<?php /* Display navigation to next/previous pages when applicable */ ?>
		<?php
		if ( function_exists( 'foundationpress_pagination' ) ) :
			foundationpress_pagination();
		elseif ( is_paged() ) :
		?>
			<nav id="post-nav">
				<div class="post-previous"><?php next_posts_link( __( '&larr; Older posts', 'foundationpress' ) ); ?></div>
				<div class="post-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'foundationpress' ) ); ?></div>
			</nav>
		<?php endif; ?>

	</main>
	<?php get_sidebar(); ?>

</div>
</div>
		</div>
<?php get_footer();
