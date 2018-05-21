<?php
/**
 * Created by PhpStorm.
 * User: 845856208
 * Date: 12/04/2018
 * Time: 1:30 PM
 */

function artista_create_post_types(){
    register_post_type('artista_exhibition',
        array(
            'labels' => array(
            'name' => __('Exhibitions'),
                'singular_name' => __('Exhibition')
            ),
            'public' => true,
            'has_archive' => true,
            'menu_position' => 5,
            'supports' => array(
                'editor',
                'title',
                'content',
                'thumbnail'
                )
            )
            );
    // create new taxonomy for custom post types
    register_taxonomy(
        'media',
        'artista_opportunity',
        array(
            'label' => __('Opportunities'),
            'labels' => array(
                'name' => __('Opportunities'),
                'singular_name' => __('Opportunity')
            )
        )
    );
}

add_action('init', 'artista_create_post_types');

