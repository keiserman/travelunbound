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
    // Enqueue Tailwind CSS
    wp_enqueue_style('tailwind', get_template_directory_uri() . '/style.css', [], '1.0.0');

    // Enqueue Swiper CSS
    wp_enqueue_style(
        'swiper-css',
        'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css',
        [],
        null
    );

    // Enqueue Swiper JS
    wp_enqueue_script(
        'swiper-js',
        'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js',
        [],
        null,
        true
    );

    // Enqueue GSAP Core
    wp_enqueue_script(
        'gsap-core',
        'https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js',
        [],
        null,
        true
    );

    // Enqueue GSAP ScrollTrigger Plugin
    wp_enqueue_script(
        'gsap-scrolltrigger',
        'https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js',
        ['gsap-core'],
        null,
        true
    );

    // Enqueue main script with GSAP dependencies
    wp_enqueue_script(
        'main-script',
        get_template_directory_uri() . '/assets/js/main.js',
        ['gsap-core', 'gsap-scrolltrigger'],
        '1.0.0',
        true
    );
}
add_action('wp_enqueue_scripts', 'enqueue_travel_unbound_assets');

// Add customizer options
require get_template_directory() . '/includes/customizer-home.php';
require get_template_directory() . '/includes/customizer-about.php';
require get_template_directory() . '/includes/customizer-contact.php';

// Register custom post types
require_once get_template_directory() . '/includes/register-approaches.php';
require_once get_template_directory() . '/includes/register-faqs.php';
require_once get_template_directory() . '/includes/register-experiences.php';
require_once get_template_directory() . '/includes/register-team-members.php';
require_once get_template_directory() . '/includes/register-hotel-partners.php';
