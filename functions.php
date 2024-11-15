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
