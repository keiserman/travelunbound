<?php

// Theme setup
function travel_unbound_setup()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    register_nav_menus([
        'primary' => __('Primary Menu', 'travel-unbound'),
    ]);
}
add_action('after_setup_theme', 'travel_unbound_setup');

// Enqueue styles and scripts
function enqueue_travel_unbound_assets()
{
    // Enqueque Glightbox CSS
    wp_enqueue_style('glightbox', get_template_directory_uri() . '/assets/css/glightbox.min.css', [], '1.0.0');

    // Enqueue Tailwind CSS
    wp_enqueue_style('tailwind', get_template_directory_uri() . '/style.css', [], '1.0.0');

    // Register and enqueue Glightbox core
    wp_enqueue_script(
        'glightbox',
        get_template_directory_uri() . '/assets/js/glightbox.min.js',
        [],
        true
    );

    // Register and enqueue GSAP core
    wp_enqueue_script(
        'gsap',
        get_template_directory_uri() . '/assets/js/gsap.min.js',
        [],
        '3.12.5',
        true
    );

    // Register and enqueue GSAP ScrollTrigger plugin
    wp_enqueue_script(
        'gsap-scrolltrigger',
        get_template_directory_uri() . '/assets/js/ScrollTrigger.min.js',
        ['gsap'],
        '3.12.5',
        true
    );

    // Enqueue main script with GSAP dependencies
    wp_enqueue_script(
        'main-script',
        get_template_directory_uri() . '/assets/js/main.js',
        ['gsap', 'gsap-scrolltrigger', 'glightbox'],
        '1.0.0',
        true
    );
}
add_action('wp_enqueue_scripts', 'enqueue_travel_unbound_assets');

// Add customizer options
require get_template_directory() . '/includes/customizer-home.php';
require get_template_directory() . '/includes/customizer-about.php';


// Register custom post types
require_once get_template_directory() . '/includes/register-faqs.php';
require_once get_template_directory() . '/includes/register-experiences.php';
require_once get_template_directory() . '/includes/register-team-members.php';
