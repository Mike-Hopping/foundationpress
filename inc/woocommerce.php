<?php
/**
 * Created by PhpStorm.
 * User: 845856208
 * Date: 17/04/2018
 * Time: 2:28 PM
 */
function artista_woocommerce_setup(){
    add_theme_support('woocommerce');
    add_theme_support('wc-product-gallery-zoom');
    add_theme_support('wc-product-gallery-lightbox');
    add_theme_support('wc-product-gallery-slider');
}
add_action('after_setup_theme', 'artista_woocommerce_setup');

function woocommerce_scripts(){
    wp_enqueue_style('artista-woocommerce-style', get_template_directory_uri() . '/woocommerce.css');
}
add_action('wp_enqueue_scripts', 'woocommerce_scripts');

//Add 'woocommerce-active' class to body tag.
function artista_woocommerce_active_body_class(){
    $classes[] = 'woocommerce-active';
    return $classes;
}

add_filter('body_class', 'artista_woocommerce_active_body_class');