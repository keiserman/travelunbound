<?php
function add_contactpage_customizer_settings($wp_customize)
{
    $wp_customize->add_panel('contact_page_panel', array(
        'title' => __('Contact Page', 'mytheme'),
        'description' => __('Settings for the Contact Page'),
    ));

    $wp_customize->add_section('contact_hero_section', array(
        'title' => __('Hero Section', 'mytheme'),
        'description' => __('Settings for the hero section on the contact page.'),
        'panel' => 'contact_page_panel',
        'priority' => 10,
    ));

    $wp_customize->add_setting('contact_hero_heading', array(
        'default' => __('Welcome to Our Site', 'mytheme'),
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('contact_hero_heading', array(
        'label' => __('Hero Heading', 'mytheme'),
        'section' => 'contact_hero_section',
        'type' => 'text',
    ));

    $wp_customize->add_setting('contact_hero_video', array(
        'default' => '',
        'sanitize_callback' => 'absint',
    ));

    $wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'contact_hero_video', array(
        'label' => __('Contact Hero Video', 'mytheme'),
        'section' => 'contact_hero_section',
        'mime_type' => 'video',
    )));

    $wp_customize->add_setting('contact_hero_image', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'contact_hero_image', array(
        'label' => __('Contact Hero Image', 'mytheme'),
        'section' => 'contact_hero_section',
    )));
}

add_action('customize_register', 'add_contactpage_customizer_settings');
