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

    wp_enqueue_script(
        'gsap',
        'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js',
        [],
        null,
        true
    );

    wp_enqueue_script(
        'main-script',
        get_template_directory_uri() . '/assets/js/main.js',
        ['gsap'], // Make gsap a dependency
        null,
        true
    );
}
add_action('wp_enqueue_scripts', 'travel_unbound_assets');

function travel_unbound_customize_register($wp_customize)
{
    // Panel: Home Page
    $wp_customize->add_panel('home_page_panel', [
        'title'       => __('Home Page', 'travel-unbound'),
        'description' => __('Customize the home page sections.', 'travel-unbound'),
        'priority'    => 10,
    ]);

    // Section: Home Hero Section
    $wp_customize->add_section('home_hero_section', [
        'title'       => __('Hero Section', 'travel-unbound'),
        'description' => __('Customize the hero section of the home page.', 'travel-unbound'),
        'panel'       => 'home_page_panel', // Assign to Home Page panel
        'priority'    => 10,
    ]);

    // Section: Home Footer Section
    $wp_customize->add_section('home_footer_section', [
        'title'       => __('Footer Section', 'travel-unbound'),
        'description' => __('Customize the footer section of the home page.', 'travel-unbound'),
        'panel'       => 'home_page_panel', // Assign to Home Page panel
        'priority'    => 20,
    ]);

    // Panel: About Page
    $wp_customize->add_panel('about_page_panel', [
        'title'       => __('About Page', 'travel-unbound'),
        'description' => __('Customize the about page sections.', 'travel-unbound'),
        'priority'    => 20,
    ]);

    // Section: About Hero Section
    $wp_customize->add_section('about_hero_section', [
        'title'       => __('Hero Section', 'travel-unbound'),
        'description' => __('Customize the hero section of the about page.', 'travel-unbound'),
        'panel'       => 'about_page_panel', // Assign to About Page panel
        'priority'    => 10,
    ]);

    // Section: About Team Section
    $wp_customize->add_section('about_team_section', [
        'title'       => __('Team Section', 'travel-unbound'),
        'description' => __('Customize the team section of the about page.', 'travel-unbound'),
        'panel'       => 'about_page_panel', // Assign to About Page panel
        'priority'    => 20,
    ]);

    // Settings and Controls: Home Hero Section
    $wp_customize->add_setting('home_hero_heading', [
        'default'   => 'Welcome to Travel/Unbound!',
        'transport' => 'refresh',
    ]);
    $wp_customize->add_control('home_hero_heading_control', [
        'label'    => __('Hero Heading', 'travel-unbound'),
        'section'  => 'home_hero_section', // Assign to Hero Section
        'settings' => 'home_hero_heading',
        'type'     => 'text',
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
            'section'  => 'home_hero_section', // Assign to Hero Section
            'settings' => 'home_hero_image',
        ]
    ));

    // Settings and Controls: About Hero Section
    $wp_customize->add_setting('about_hero_heading', [
        'default'   => 'About Us',
        'transport' => 'refresh',
    ]);
    $wp_customize->add_control('about_hero_heading_control', [
        'label'    => __('Hero Heading', 'travel-unbound'),
        'section'  => 'about_hero_section', // Assign to Hero Section
        'settings' => 'about_hero_heading',
        'type'     => 'text',
    ]);

    $wp_customize->add_setting('about_team_description', [
        'default'   => 'Meet the passionate team behind Travel/Unbound.',
        'transport' => 'refresh',
    ]);
    $wp_customize->add_control('about_team_description_control', [
        'label'    => __('Team Description', 'travel-unbound'),
        'section'  => 'about_team_section', // Assign to Team Section
        'settings' => 'about_team_description',
        'type'     => 'textarea',
    ]);
}
add_action('customize_register', 'travel_unbound_customize_register');


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
