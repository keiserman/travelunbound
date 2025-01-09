<?php

function travel_unbound_setup()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');

    register_nav_menus([
        'primary' => __('Primary Menu', 'travel-unbound'),
        'footer' => __('Footer Menu', 'travel-unbound'),
        'footer-links' => __('Footer Links', 'travel-unbound'),
    ]);
}
add_action('after_setup_theme', 'travel_unbound_setup');

function add_custom_logos_support($wp_customize)
{
    $wp_customize->add_setting('dark_logo', [
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ]);

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'dark_logo', [
        'label' => __('Dark Mode Logo', 'travel-unbound'),
        'section' => 'title_tagline',
        'settings' => 'dark_logo',
    ]));
}
add_action('customize_register', 'add_custom_logos_support');

function enqueue_travel_unbound_assets()
{
    wp_enqueue_style('tailwind', get_template_directory_uri() . '/style.css', [], '1.0.0');

    wp_enqueue_style(
        'swiper-css',
        get_template_directory_uri() . '/assets/css/swiper-bundle.min.css',
        [],
        null
    );

    wp_enqueue_script(
        'swiper-js',
        get_template_directory_uri() . '/assets/js/swiper-bundle.min.js',
        [],
        null,
        true
    );

    wp_enqueue_script(
        'gsap-core',
        get_template_directory_uri() . '/assets/js/gsap.min.js',
        [],
        null,
        true
    );

    wp_enqueue_script(
        'gsap-scrolltrigger',
        get_template_directory_uri() . '/assets/js/ScrollTrigger.min.js',
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
require get_template_directory() . '/includes/customizer-footer.php';

// Register custom post types
require_once get_template_directory() . '/includes/register-experiences.php';
require_once get_template_directory() . '/includes/render-experience-card.php';
