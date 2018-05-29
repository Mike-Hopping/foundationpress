<?php
/*
Template Name: Customizer
*/

function artista_customize_register($wp_customize){
//-------------About--------------//
    //About Text
    $wp_customize->add_section('artista_about_section',
        array(
            'title' =>__('About'),
            'priority' => 30
        ));
    $wp_customize->add_setting('artista_about_text', array());
    $wp_customize->add_control('artista_about_text_ctrl', array(
        'type' => 'textarea',
        'section' => 'artista_about_section',
        'label' => __('About Us Text'),
        'settings' => 'artista_about_text'
        )
    );

    //Contact

    $wp_customize->add_section('artista_contact_section',
        array(
            'title' =>__('Contact'),
            'priority' => 30
        ));
    $wp_customize->add_setting('artista_contact_text', array());
    $wp_customize->add_control('artista_contact_text_ctrl', array(
            'type' => 'textarea',
            'section' => 'artista_contact_section',
            'label' => __('Contact Text'),
            'settings' => 'artista_contact_text'
        )
    );

     //Join Text
    $wp_customize->add_section('artista_join_section',
        array(
            'title' =>__('Join'),
            'priority' => 30
        ));
    $wp_customize->add_setting('artista_join_text', array());
    $wp_customize->add_control('artista_join_text_ctrl', array(
            'type' => 'textarea',
            'section' => 'artista_join_section',
            'label' => __('Join Us Text'),
            'settings' => 'artista_join_text'
        )
    );
    //Home

    $wp_customize->add_section('artista_home_statement_section',
        array(
            'title' =>__('Home Statement'),
            'priority' => 30
        ));
    $wp_customize->add_setting('artista_home_statement_text', array());
    $wp_customize->add_control('artista_home_statement_text_ctrl', array(
            'type' => 'textarea',
            'section' => 'artista_home_statement_section',
            'label' => __('Home Mission Statement Text'),
            'settings' => 'artista_home_statement_text'
            )
        );      
    $wp_customize->add_section('artista_home_about_section',
    array(
        'title' =>__('Home About'),
        'priority' => 30
    ));
    $wp_customize->add_setting('artista_home_about_text', array());
    $wp_customize->add_control('artista_home_about_text_ctrl', array(
        'type' => 'textarea',
        'section' => 'artista_home_about_section',
        'label' => __('Home About Text'),
        'settings' => 'artista_home_about_text'
        )
    );
    $wp_customize->add_section('artista_home_donate_section',
    array(
        'title' =>__('Home Donate'),
        'priority' => 30
    ));
    $wp_customize->add_setting('artista_home_donate_text', array());
    $wp_customize->add_control('artista_home_donate_text_ctrl', array(
        'type' => 'textarea',
        'section' => 'artista_home_donate_section',
        'label' => __('Home Donate Text'),
        'settings' => 'artista_home_donate_text'
        )
    );
}

add_action('customize_register', 'artista_customize_register');

?>