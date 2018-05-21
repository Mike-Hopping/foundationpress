<?php
/**
 * Created by PhpStorm.
 * User: 845856208
 * Date: 13/04/2018
 * Time: 12:31 PM
 */
?>
<?php get_header(); ?>
    <div id="content-inner">
        <a href="http://localhost/wordpress/exhibitions/"><i class="fas fa-arrow-left"></i>Back</a>
        <?php //the loop
        if (have_posts()) : while (have_posts()) : the_post(); ?>
            <img alt="<?php the_title(); ?>" src="<?php the_post_thumbnail_url(); ?>">
            <h2><?php the_title(); ?></h2>
            <?php wpautop(the_content()); ?>
            <div>
            <?php the_terms($post->ID, 'artista_exhibition_media', 'Media: ', ', ', ' ' ); ?>
            </div>
        <?php endwhile;
        else : ?>
        <p><?php esc_html_e('Sorry, no posts matched your criteria.'); ?></p>
        <?php endif; ?>
    </div>
<?php
//get_sidebar();
get_footer();
