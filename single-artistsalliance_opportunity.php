<?php
/*
 Template Name: single-artistsalliance_opportunity
 */
?>
<?php get_header(); ?>
    <div id="content-inner">
        <a href="http://localhost/wordpress/opportunities/"><i class="fas fa-arrow-left"></i>Back</a>
        <?php //the loop
        if (have_posts()) : while (have_posts()) : the_post(); ?>
            <img alt="<?php the_title(); ?>" src="<?php the_post_thumbnail_url(); ?>">
            <h2><?php the_title(); ?></h2>
            <?php wpautop(the_content()); ?>
            <div>
            <?php the_terms($post->ID, 'artista_opportunity_media', 'Media: ', ', ', ' ' ); ?>
            </div>
        <?php endwhile;
        else : ?>
        <p><?php esc_html_e('Sorry, no posts matched your criteria.'); ?></p>
        <?php endif; ?>
    </div>
<?php
//get_sidebar();
get_footer();