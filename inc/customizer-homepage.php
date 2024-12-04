<?php
function add_homepage_customizer_settings($wp_customize)
{
    // **Home Page Panel**
    $wp_customize->add_panel('homepage_panel', array(
        'title' => __('Home Page', 'mytheme'),
        'description' => __('Settings for the Home Page'),
        'priority' => 10,
    ));

    // **Hero Section**
    $wp_customize->add_section('hero_section', array(
        'title' => __('Hero Section', 'mytheme'),
        'description' => __('Settings for the hero section on the homepage.'),
        'panel' => 'homepage_panel',
        'priority' => 10,
    ));

    // Hero Heading
    $wp_customize->add_setting('hero_heading', array(
        'default' => __('Welcome to Our Site', 'mytheme'),
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('hero_heading', array(
        'label' => __('Hero Heading', 'mytheme'),
        'section' => 'hero_section',
        'type' => 'text',
    ));

    // Hero Image
    $wp_customize->add_setting('hero_image', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'hero_image', array(
        'label' => __('Hero Image', 'mytheme'),
        'section' => 'hero_section',
    )));

    $wp_customize->add_setting('hero_video', array(
        'default'           => '', // Default value
        'sanitize_callback' => 'absint', // Sanitize as an integer (attachment ID)
    ));

    $wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'hero_video', array(
        'label'      => __('Hero Video', 'mytheme'),
        'section'    => 'hero_section', // Add this control to the desired section
        'mime_type'  => 'video', // Restrict to video uploads
    )));

    // **About Section**
    $wp_customize->add_section('about_section', array(
        'title' => __('About Section', 'mytheme'),
        'description' => __('Settings for the about section on the homepage.'),
        'panel' => 'homepage_panel',
        'priority' => 20,
    ));

    $wp_customize->add_setting('about_video', array(
        'default'           => '', // Default value
        'sanitize_callback' => 'absint', // Sanitize as an integer (attachment ID)
    ));

    $wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'about_video', array(
        'label'      => __('About Video', 'mytheme'),
        'section'    => 'about_section', // Add this control to the desired section
        'mime_type'  => 'video', // Restrict to video uploads
    )));

    // **Experiences Section**
    $wp_customize->add_section('experiences_section', array(
        'title' => __('Experiences Section', 'mytheme'),
        'description' => __('Settings for the experiences section on the homepage.'),
        'panel' => 'homepage_panel',
        'priority' => 30,
    ));

    // Define the fields for each experience
    $experiences = [
        1 => [
            'title'   => __('Experience 1 Title', 'mytheme'),
            'image'   => __('Experience 1 Image', 'mytheme'),
            'excerpt' => __('Experience 1 Excerpt', 'mytheme'),
        ],
        2 => [
            'title'   => __('Experience 2 Title', 'mytheme'),
            'image'   => __('Experience 2 Image', 'mytheme'),
            'excerpt' => __('Experience 2 Excerpt', 'mytheme'),
        ],
        3 => [
            'title'   => __('Experience 3 Title', 'mytheme'),
            'image'   => __('Experience 3 Image', 'mytheme'),
            'excerpt' => __('Experience 3 Excerpt', 'mytheme'),
        ],
    ];

    // Loop through the experiences to add settings and controls dynamically
    foreach ($experiences as $key => $fields) {
        // Title
        $wp_customize->add_setting("experience_{$key}_title", array(
            'default' => $fields['title'],
            'sanitize_callback' => 'sanitize_text_field',
        ));
        $wp_customize->add_control("experience_{$key}_title", array(
            'label' => $fields['title'],
            'section' => 'experiences_section',
            'type' => 'text',
        ));

        // Image
        $wp_customize->add_setting("experience_{$key}_image", array(
            'default' => '',
            'sanitize_callback' => 'esc_url_raw',
        ));
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, "experience_{$key}_image", array(
            'label' => $fields['image'],
            'section' => 'experiences_section',
        )));

        // Excerpt
        $wp_customize->add_setting("experience_{$key}_excerpt", array(
            'default' => $fields['excerpt'],
            'sanitize_callback' => 'sanitize_textarea_field',
        ));
        $wp_customize->add_control("experience_{$key}_excerpt", array(
            'label' => $fields['excerpt'],
            'section' => 'experiences_section',
            'type' => 'textarea',
        ));
    }
}
