<?php
/**
 * Created by PhpStorm.
 * User: 845856208
 * Date: 12/04/2018
 * Time: 1:30 PM
 */

function artista_create_post_types(){
    register_post_type('artista_service',
        array(
            'labels' => array(
            'name' => __('Services'),
                'singular_name' => __('Service')
            ),
            'public' => true,
            'has_archive' => true,
            'menu_position' => 5,
            'supports' => array(
                'editor',
                'title',
                'thumbnail'
                )
            )
            );
    // create new taxonomy for custom post types
    register_taxonomy(
        'media',
        'artista_service',
        array(
            'label' => __('Repairs'),
            'labels' => array(
                'name' => __('Repairs'),
                'singular_name' => __('Repair')
            )
        )
    );
}

add_action('init', 'artista_create_post_types');

