<?php
function add_home_customizer_settings($wp_customize)
{
    $wp_customize->add_panel("home_panel", [
        "title" => __("Home Page", "mytheme"),
    ]);

    // Hero Section
    $wp_customize->add_section("home_hero_section", [
        "title" => __("Hero Section", "mytheme"),
        "panel" => "home_panel",
        "priority" => 10,
    ]);

    $wp_customize->add_setting("home_hero_heading_main", [
        "sanitize_callback" => "sanitize_text_field",
    ]);

    $wp_customize->add_control("home_hero_heading_main", [
        "label" => __("Heading Main", "mytheme"),
        "section" => "home_hero_section",
        "type" => "text",
    ]);

    $wp_customize->add_setting("home_hero_heading_span", [
        "sanitize_callback" => "sanitize_text_field",
    ]);

    $wp_customize->add_control("home_hero_heading_span", [
        "label" => __("Heading Span", "mytheme"),
        "section" => "home_hero_section",
        "type" => "text",
    ]);

    $wp_customize->add_setting("home_hero_video_poster", [
        "default" => "",
        "sanitize_callback" => "esc_url_raw",
    ]);

    $wp_customize->add_control(
        new WP_Customize_Image_Control($wp_customize, "home_hero_video_poster", [
            "label" => __("Video Poster (Fallback)", "mytheme"),
            "section" => "home_hero_section",
        ])
    );

    $wp_customize->add_setting("home_hero_video", [
        "default" => "",
        "sanitize_callback" => "absint",
    ]);

    $wp_customize->add_control(
        new WP_Customize_Media_Control($wp_customize, "home_hero_video", [
            "label" => __("Video", "mytheme"),
            "section" => "home_hero_section",
            "mime_type" => "video",
        ])
    );

    // Experiences Section
    $wp_customize->add_section("home_experiences_section", [
        "title" => __("Experiences Section", "mytheme"),
        "description" => __(
            "Settings for the experiences section on the homepage."
        ),
        "panel" => "home_panel",
        "priority" => 20,
    ]);

    $wp_customize->add_setting("home_experiences_button_link", [
        "default" => "",
        "sanitize_callback" => "esc_url_raw",
    ]);

    $wp_customize->add_control("home_experiences_button_link", [
        "label" => __("Button Link", "mytheme"),
        "section" => "home_experiences_section",
        "type" => "url",
    ]);

    $wp_customize->add_setting("home_experiences_button_text", [
        "default" => "",
        "sanitize_callback" => "sanitize_text_field",
    ]);

    $wp_customize->add_control("home_experiences_button_text", [
        "label" => __("Button Text", "mytheme"),
        "section" => "home_experiences_section",
        "type" => "text",
    ]);

    // About Section
    $wp_customize->add_section("home_about_section", [
        "title" => __("About Section", "mytheme"),
        "description" => __("Settings for the hero section on the homepage."),
        "panel" => "home_panel",
        "priority" => 20,
    ]);

    $wp_customize->add_setting("home_about_image", [
        "default" => "",
        "sanitize_callback" => "esc_url_raw",
    ]);

    $wp_customize->add_control(
        new WP_Customize_Image_Control($wp_customize, "home_about_image", [
            "label" => __("Image", "mytheme"),
            "section" => "home_about_section",
        ])
    );

    $wp_customize->add_setting("home_about_video", [
        "default" => "",
        "sanitize_callback" => "absint",
    ]);

    $wp_customize->add_control(
        new WP_Customize_Media_Control($wp_customize, "home_about_video", [
            "label" => __("Video", "mytheme"),
            "section" => "home_about_section",
            "mime_type" => "video",
        ])
    );

    $wp_customize->add_setting("home_about_video_poster", [
        "default" => "",
        "sanitize_callback" => "esc_url_raw",
    ]);

    $wp_customize->add_control(
        new WP_Customize_Image_Control($wp_customize, "home_about_video_poster", [
            "label" => __("Video Poster (Fallback)", "mytheme"),
            "section" => "home_about_section",
        ])
    );

    // Journey Section
    $wp_customize->add_section("home_journey_section", [
        "title" => __("Journey Section", "mytheme"),
        "description" => __(
            "Settings for the journey section on the homepage."
        ),
        "panel" => "home_panel",
        "priority" => 30,
    ]);

    $wp_customize->add_setting("home_journey_image", [
        "default" => "",
        "sanitize_callback" => "esc_url_raw",
    ]);

    $wp_customize->add_control(
        new WP_Customize_Image_Control($wp_customize, "home_journey_image", [
            "label" => __("Image", "mytheme"),
            "section" => "home_journey_section",
        ])
    );

    $wp_customize->add_setting("home_journey_photo_credit", [
        "default" => "",
        "sanitize_callback" => "sanitize_text_field",
    ]);

    $wp_customize->add_control("home_journey_photo_credit", [
        "label" => __("Photo Credit", "mytheme"),
        "section" => "home_journey_section",
        "type" => "text",
    ]);
}

add_action("customize_register", "add_home_customizer_settings");
