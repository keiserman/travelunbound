<?php

// Theme setup
function travel_unbound_setup()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    register_nav_menus([
        'primary' => __('Primary Menu', 'travel-unbound'),
    ]);
}
add_action('after_setup_theme', 'travel_unbound_setup');

// Enqueue styles and scripts
function travel_unbound_assets()
{
    wp_enqueue_style('tailwind', get_template_directory_uri() . '/style.css', [], null);

    wp_enqueue_script(
        'gsap',
        'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js',
        [],
        null,
        true
    );

    wp_enqueue_script(
        'scrollTrigger',
        'https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js',
        [],
        null,
        true
    );

    wp_enqueue_script(
        'main-script',
        get_template_directory_uri() . '/assets/js/main.js',
        null,
        true
    );
}
add_action('wp_enqueue_scripts', 'travel_unbound_assets');

require get_template_directory() . '/inc/customizer-homepage.php';

function mytheme_customize_register($wp_customize)
{
    add_homepage_customizer_settings($wp_customize);
}
add_action('customize_register', 'mytheme_customize_register');

// Register FAQ Post Type
function travel_unbound_register_faqs_cpt()
{
    $labels = array(
        'name'                  => _x('FAQs', 'Post type general name', 'travel-unbound'),
        'singular_name'         => _x('FAQ', 'Post type singular name', 'travel-unbound'),
        'menu_name'             => _x('FAQs', 'Admin Menu text', 'travel-unbound'),
        'name_admin_bar'        => _x('FAQ', 'Add New on Toolbar', 'travel-unbound'),
        'add_new'               => __('Add New FAQ', 'travel-unbound'),
        'add_new_item'          => __('Add New FAQ', 'travel-unbound'),
        'edit_item'             => __('Edit FAQ', 'travel-unbound'),
        'new_item'              => __('New FAQ', 'travel-unbound'),
        'view_item'             => __('View FAQ', 'travel-unbound'),
        'all_items'             => __('All FAQs', 'travel-unbound'),
        'search_items'          => __('Search FAQs', 'travel-unbound'),
        'parent_item_colon'     => __('Parent FAQs:', 'travel-unbound'),
        'not_found'             => __('No FAQs found.', 'travel-unbound'),
        'not_found_in_trash'    => __('No FAQs found in Trash.', 'travel-unbound'),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'faqs'),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 20,
        'menu_icon'          => 'dashicons-editor-help', // Icon for the CPT in the admin menu
        'supports'           => array('title', 'editor', 'thumbnail'), // Features to enable
    );

    register_post_type('faq', $args);
}
add_action('init', 'travel_unbound_register_faqs_cpt');
