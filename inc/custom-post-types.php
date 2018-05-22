<?php
/*
Template name: custom-post-types
 */
//EXHIBITIONS
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
            register_post_type('artista_opportunity',
        array(
            'labels' => array(
            'name' => __('Opportunities'),
                'singular_name' => __('Opportunity')
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
            // );
    // create new taxonomy for custom post types
    // register_taxonomy(
    //     'media',
    //     'artista_opportunity',
    //     array(
    //         'label' => __('Opportunities'),
    //         'labels' => array(
    //             'name' => __('Opportunities'),
    //             'singular_name' => __('Opportunity')
    //         )
    //     )
    );
}

add_action('init', 'artista_create_post_types');

