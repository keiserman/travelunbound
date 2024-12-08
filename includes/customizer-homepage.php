<?php
function add_homepage_customizer_settings($wp_customize)
{
    // **Home Page Panel**
    $wp_customize->add_panel('homepage_panel', array(
        'title' => __('Home Page', 'mytheme'),
        'description' => __('Settings for the Home Page'),
        'priority' => 10,
    ));

    // **Hero Section**
    $wp_customize->add_section('hero_section', array(
        'title' => __('Hero Section', 'mytheme'),
        'description' => __('Settings for the hero section on the homepage.'),
        'panel' => 'homepage_panel',
        'priority' => 10,
    ));

    // Hero Heading
    $wp_customize->add_setting('hero_heading', array(
        'default' => __('Welcome to Our Site', 'mytheme'),
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('hero_heading', array(
        'label' => __('Hero Heading', 'mytheme'),
        'section' => 'hero_section',
        'type' => 'text',
    ));

    // Hero Image
    $wp_customize->add_setting('hero_image', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'hero_image', array(
        'label' => __('Hero Image', 'mytheme'),
        'section' => 'hero_section',
    )));

    $wp_customize->add_setting('hero_video', array(
        'default'           => '', // Default value
        'sanitize_callback' => 'absint', // Sanitize as an integer (attachment ID)
    ));

    $wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'hero_video', array(
        'label'      => __('Hero Video', 'mytheme'),
        'section'    => 'hero_section', // Add this control to the desired section
        'mime_type'  => 'video', // Restrict to video uploads
    )));

    // **Journey Section**
    $wp_customize->add_section('journey_section', array(
        'title' => __('Journey Section', 'mytheme'),
        'description' => __('Settings for the journey section on the homepage.'),
        'panel' => 'homepage_panel',
        'priority' => 20,
    ));

    // Journey Image
    $wp_customize->add_setting('journey_image', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'journey_image', array(
        'label' => __('Image', 'mytheme'),
        'section' => 'journey_section',
    )));

    // Journey Photo Credit
    $wp_customize->add_setting('journey_photo_credit', array(
        'default' => __('photo credit:', 'mytheme'),
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('journey_photo_credit', array(
        'label' => __('Photo Credit', 'mytheme'),
        'section' => 'journey_section',
        'type' => 'text',
    ));
}

add_action('customize_register', 'add_homepage_customizer_settings');
