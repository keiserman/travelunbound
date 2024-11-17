<?php

// Theme setup
function travel_unbound_setup()
{
    // Enable dynamic title tag support
    add_theme_support('title-tag');

    // Enable post thumbnails
    add_theme_support('post-thumbnails');

    // Register navigation menu
    register_nav_menus([
        'primary' => __('Primary Menu', 'travel-unbound'),
    ]);
}
add_action('after_setup_theme', 'travel_unbound_setup');

// Enqueue styles and scripts
function travel_unbound_assets()
{
    // Enqueue Tailwind CSS
    wp_enqueue_style('tailwind', get_template_directory_uri() . '/style.css', [], null);

    // Enqueue JavaScript (optional)
    wp_enqueue_script('scripts', get_template_directory_uri() . '/assets/js/main.js', [], null, true);
}
add_action('wp_enqueue_scripts', 'travel_unbound_assets');

function travel_unbound_customize_register($wp_customize)
{

    $wp_customize->add_panel('page_settings_panel', [
        'title'       => __('Page Settings', 'travel-unbound'),
        'description' => __('Customize settings for individual pages.', 'travel-unbound'),
        'priority'    => 5,
    ]);


    // Home Page Section
    $wp_customize->add_section('home_section', [
        'title'       => __('Home Page', 'travel-unbound'),
        'description' => __('Customize the home page.', 'travel-unbound'),
        'panel'    => 'page_settings_panel',
        'priority'    => 10,
    ]);

    $wp_customize->add_setting('home_hero_image', [
        'default'   => '',
        'transport' => 'refresh',
    ]);

    $wp_customize->add_control(new WP_Customize_Image_Control(
        $wp_customize,
        'home_hero_image_control',
        [
            'label'    => __('Hero Image', 'travel-unbound'),
            'section'  => 'home_section',
            'settings' => 'home_hero_image',
        ]
    ));

    // About Page Section
    $wp_customize->add_section('about_section', [
        'title'       => __('About Page', 'travel-unbound'),
        'description' => __('Customize the about page.', 'travel-unbound'),
        'panel'    => 'page_settings_panel',
        'priority'    => 20,
    ]);

    $wp_customize->add_setting('about_background_image', [
        'default'   => '',
        'transport' => 'refresh',
    ]);

    $wp_customize->add_control(new WP_Customize_Image_Control(
        $wp_customize,
        'about_background_image_control',
        [
            'label'    => __('Background Image', 'travel-unbound'),
            'section'  => 'about_section',
            'settings' => 'about_background_image',
        ]
    ));
}
add_action('customize_register', 'travel_unbound_customize_register');
