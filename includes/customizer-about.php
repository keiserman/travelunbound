<?php
function add_aboutpage_customizer_settings($wp_customize)
{
    $wp_customize->add_panel('about_page_panel', array(
        'title' => __('About Page', 'mytheme'),
        'description' => __('Settings for the About Page'),
    ));

    $wp_customize->add_section('about_hero_section', array(
        'title' => __('Hero Section', 'mytheme'),
        'description' => __('Settings for the hero section on the about page.'),
        'panel' => 'about_page_panel',
        'priority' => 10,
    ));

    $wp_customize->add_setting('about_hero_video', array(
        'default' => '',
        'sanitize_callback' => 'absint',
    ));

    $wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'about_hero_video', array(
        'label' => __('About Hero Video', 'mytheme'),
        'section' => 'about_hero_section',
        'mime_type' => 'video',
    )));

    // About Section

    $wp_customize->add_section('about_about_section', array(
        'title' => __('About Section', 'mytheme'),
        'description' => __('Settings for the about section on the about page.'),
        'panel' => 'about_page_panel',
        'priority' => 20,
    ));

    $wp_customize->add_setting('about_about_image', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'about_about_image', array(
        'label' => __('About Image', 'mytheme'),
        'section' => 'about_about_section',
    )));

    // Made Section
    $wp_customize->add_section('about_made_section', array(
        'title' => __('Made Section', 'mytheme'),
        'description' => __('Settings for the made section on the homepage.'),
        'panel' => 'about_page_panel',
        'priority' => 30,
    ));

    // Made Image
    $wp_customize->add_setting('about_made_image', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'about_made_image', array(
        'label' => __('Made Image', 'mytheme'),
        'section' => 'about_made_section',
    )));

    // Made Photo Credit
    $wp_customize->add_setting('about_made_photo_credit', array(
        'default' => __('photo credit:', 'mytheme'),
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('about_made_photo_credit', array(
        'label' => __('Photo Credit', 'mytheme'),
        'section' => 'about_made_section',
        'type' => 'text',
    ));
}

add_action('customize_register', 'add_aboutpage_customizer_settings');
