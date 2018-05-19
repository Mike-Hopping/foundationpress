<?php
/**
 * Created by PhpStorm.
 * User: 845856208
 * Date: 10/04/2018
 * Time: 1:35 PM
 */
?>
<?php get_header(); ?>
<section>
    <?php
    $args = array(
        'post_type' => 'artista_service',
        'posts_per_page' => 10
    );
    $loop = new WP_Query($args);
    if($loop->have_posts()) {
        while ($loop->have_posts()) {
            $loop->the_post();
            ?>
            <a href="<?php echo site_url() . '/artista_service/' . $post->post_name?>">
            <img alt="<?php the_title(); ?>" src="<?php the_post_thumbnail_url(); ?>">
            </a>
            <h2><?php echo $post->post_name; ?></h2>
            <p><?php the_content(); ?></p>
        <?php }
    } ?>

</section>
<?php get_footer(); ?>
