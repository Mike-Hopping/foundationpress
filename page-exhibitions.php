<?php
/*
Template Name: Exhibitions
 */
?>
<?php
if ( has_post_thumbnail( $post->ID ) ) : ?>
	<header class="featured-hero" role="banner" data-interchange="[<?php the_post_thumbnail_url( 'featured-small' ); ?>, small], [<?php the_post_thumbnail_url( 'featured-medium' ); ?>, medium], [<?php the_post_thumbnail_url( 'featured-large' ); ?>, large], [<?php the_post_thumbnail_url( 'featured-xlarge' ); ?>, xlarge]">
    <?php get_header(); ?>
    <a href="http://localhost/wordpress/"><div class="home-logo"></div></a>
</header>
<?php endif;
get_header()
?>
<div class="main-container">
<div class="main-grid sidebar-right">
    <main class="main-content">
<section>
    <?php
    $args = array(
        'post_type' => 'artista_exhibition',
        'posts_per_page' => 10
    );
    $loop = new WP_Query($args);
    if($loop->have_posts()) {
        while ($loop->have_posts()) {
            $loop->the_post();
            ?>
            <a href="<?php echo site_url() . '/artista_exhibition/' . $post->post_name?>">
            <img alt="<?php the_title(); ?>" src="<?php the_post_thumbnail_url(); ?>">
            </a>
            <h2><?php echo $post->post_name; ?></h2>
            <p><?php the_content(); ?></p>
        <?php }
    } ?>

</section>
</main>
<?php get_sidebar(); ?>
</div>
</div>
<?php get_footer(); ?>
