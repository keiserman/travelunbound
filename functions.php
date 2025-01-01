<?php

// Theme setup
function travel_unbound_setup()
{
    // Add support for various theme features
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');

    // Register navigation menus
    register_nav_menus([
        'primary' => __('Primary Menu', 'travel-unbound'),
        'footer' => __('Footer Menu', 'travel-unbound'),
    ]);
}
add_action('after_setup_theme', 'travel_unbound_setup');

function add_custom_logos_support($wp_customize)
{
    // Add a new setting for the dark logo
    $wp_customize->add_setting('dark_logo', [
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ]);

    // Add the control for the dark logo
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'dark_logo', [
        'label' => __('Dark Mode Logo', 'travel-unbound'),
        'section' => 'title_tagline', // Add it to the same section as the regular logo
        'settings' => 'dark_logo',
    ]));
}
add_action('customize_register', 'add_custom_logos_support');

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
        ['gsap-core', 'gsap-scrolltrigger', 'swiper-js'],
        '1.0.0',
        true
    );
}
add_action('wp_enqueue_scripts', 'enqueue_travel_unbound_assets');

function add_general_customizer_settings($wp_customize)
{
    $wp_customize->add_section("social_links_section", [
        "title" => __("Social Links", "mytheme"),
        "description" => __(
            "Add social media links."
        ),
    ]);

    $wp_customize->add_setting("whatsapp_link", [
        "default" => "",
        "sanitize_callback" => "esc_url_raw",
    ]);

    $wp_customize->add_control("whatsapp_link", [
        "label" => __("WhatsApp Link", "mytheme"),
        "section" => "social_links_section",
        "type" => "url",
    ]);

    $wp_customize->add_setting("instagram_link", [
        "default" => "",
        "sanitize_callback" => "esc_url_raw",
    ]);

    $wp_customize->add_control("instagram_link", [
        "label" => __("Instagram Link", "mytheme"),
        "section" => "social_links_section",
        "type" => "url",
    ]);

    $wp_customize->add_setting("linkedin_link", [
        "default" => "",
        "sanitize_callback" => "esc_url_raw",
    ]);

    $wp_customize->add_control("linkedin_link", [
        "label" => __("LinkedIn Link", "mytheme"),
        "section" => "social_links_section",
        "type" => "url",
    ]);

    $wp_customize->add_setting("email_link", [
        "default" => "",
        "sanitize_callback" => "esc_url_raw",
    ]);

    $wp_customize->add_control("email_link", [
        "label" => __("Email Link", "mytheme"),
        "section" => "social_links_section",
        "type" => "url",
    ]);
}

add_action("customize_register", "add_general_customizer_settings");

// Add customizer options
require get_template_directory() . '/includes/customizer-home.php';
require get_template_directory() . '/includes/customizer-about.php';
require get_template_directory() . '/includes/customizer-contact.php';

// Register custom post types
require_once get_template_directory() . '/includes/register-experiences.php';
require_once get_template_directory() . '/includes/register-founders.php';

// Render components
require_once get_template_directory() . '/includes/render-experience-card.php';
