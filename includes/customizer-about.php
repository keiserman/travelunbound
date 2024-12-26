<?php
function add_about_customizer_settings($wp_customize)
{
    $wp_customize->add_panel("about_panel", [
        "title" => __("About Page", "mytheme"),
        "description" => __("Settings for the About Page"),
    ]);

    // Hero Section
    $wp_customize->add_section("about_hero_section", [
        "title" => __("Hero Section", "mytheme"),
        "description" => __("Settings for the hero section on the about page."),
        "panel" => "about_panel",
        "priority" => 10,
    ]);

    $wp_customize->add_setting("about_hero_video", [
        "default" => "",
        "sanitize_callback" => "absint",
    ]);

    $wp_customize->add_control(
        new WP_Customize_Media_Control($wp_customize, "about_hero_video", [
            "label" => __("Video", "mytheme"),
            "section" => "about_hero_section",
            "mime_type" => "video",
        ])
    );

    $wp_customize->add_setting("about_hero_video_poster", [
        "default" => "",
        "sanitize_callback" => "esc_url_raw",
    ]);

    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            "about_hero_video_poster",
            [
                "label" => __("Video Poster (Fallback)", "mytheme"),
                "section" => "about_hero_section",
            ]
        )
    );

    // About Section
    $wp_customize->add_section("about_about_section", [
        "title" => __("About Section", "mytheme"),
        "description" => __(
            "Settings for the about section on the about page."
        ),
        "panel" => "about_panel",
        "priority" => 20,
    ]);

    $wp_customize->add_setting("about_about_image", [
        "default" => "",
        "sanitize_callback" => "esc_url_raw",
    ]);

    $wp_customize->add_control(
        new WP_Customize_Image_Control($wp_customize, "about_about_image", [
            "label" => __("Image", "mytheme"),
            "section" => "about_about_section",
        ])
    );

    $wp_customize->add_setting("about_about_photo_credit", [
        "default" => "",
        "sanitize_callback" => "sanitize_text_field",
    ]);

    $wp_customize->add_control("about_about_photo_credit", [
        "label" => __("Photo Credit", "mytheme"),
        "section" => "about_about_section",
        "type" => "text",
    ]);

    // Mission Section
    $wp_customize->add_section("about_mission_section", [
        "title" => __("Mission Section", "mytheme"),
        "description" => __(
            "Settings for the mission section on the homepage."
        ),
        "panel" => "about_panel",
        "priority" => 30,
    ]);

    $wp_customize->add_setting("about_mission_image", [
        "default" => "",
        "sanitize_callback" => "esc_url_raw",
    ]);

    $wp_customize->add_control(
        new WP_Customize_Image_Control($wp_customize, "about_mission_image", [
            "label" => __("Image", "mytheme"),
            "section" => "about_mission_section",
        ])
    );

    $wp_customize->add_setting("about_mission_photo_credit", [
        "default" => "",
        "sanitize_callback" => "sanitize_text_field",
    ]);

    $wp_customize->add_control("about_mission_photo_credit", [
        "label" => __("Photo Credit", "mytheme"),
        "section" => "about_mission_section",
        "type" => "text",
    ]);
}

add_action("customize_register", "add_about_customizer_settings");
