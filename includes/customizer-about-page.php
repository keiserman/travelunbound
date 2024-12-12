<?php
function add_aboutpage_customizer_settings($wp_customize)
{
    $wp_customize->add_panel('about_page_panel', array(
        'title' => __('About Page', 'mytheme'),
        'description' => __('Settings for the About Page'),
        'priority' => 20,
    ));

    $wp_customize->add_section('about_hero_section', array(
        'title' => __('Hero Section', 'mytheme'),
        'description' => __('Settings for the hero section on the about page.'),
        'panel' => 'about_page_panel',
        'priority' => 10,
    ));

    // Hero Heading
    $wp_customize->add_setting('about_hero_heading', array(
        'default' => __('Welcome to Our Site', 'mytheme'),
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('about_hero_heading', array(
        'label' => __('Hero Heading', 'mytheme'),
        'section' => 'about_hero_section',
        'type' => 'text',
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
}

add_action('customize_register', 'add_aboutpage_customizer_settings');
