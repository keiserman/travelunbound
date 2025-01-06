<?php
function add_contact_customizer_settings($wp_customize)
{
    $wp_customize->add_panel("contact_panel", [
        "title" => __("Contact Page", "mytheme"),
        "description" => __("Settings for the Contact Page"),
    ]);

    // Hero Section
    $wp_customize->add_section("contact_hero_section", [
        "title" => __("Hero Section", "mytheme"),
        "description" => __(
            "Settings for the hero section on the contact page."
        ),
        "panel" => "contact_panel",
        "priority" => 10,
    ]);

    $wp_customize->add_setting("contact_hero_heading_main", [
        "sanitize_callback" => "sanitize_text_field",
    ]);

    $wp_customize->add_control("contact_hero_heading_main", [
        "label" => __("Heading Main", "mytheme"),
        "section" => "contact_hero_section",
        "type" => "text",
    ]);

    $wp_customize->add_setting("contact_hero_heading_span", [
        "sanitize_callback" => "sanitize_text_field",
    ]);

    $wp_customize->add_control("contact_hero_heading_span", [
        "label" => __("Heading Span", "mytheme"),
        "section" => "contact_hero_section",
        "type" => "text",
    ]);

    $wp_customize->add_setting("contact_hero_subtitle_main", [
        "sanitize_callback" => "sanitize_text_field",
    ]);

    $wp_customize->add_control("contact_hero_subtitle_main", [
        "label" => __("Subtitle Main", "mytheme"),
        "section" => "contact_hero_section",
        "type" => "text",
    ]);

    $wp_customize->add_setting("contact_hero_subtitle_span", [
        "sanitize_callback" => "sanitize_text_field",
    ]);

    $wp_customize->add_control("contact_hero_subtitle_span", [
        "label" => __("Subtitle Span", "mytheme"),
        "section" => "contact_hero_section",
        "type" => "text",
    ]);

    $wp_customize->add_setting("contact_hero_caption", [
        "sanitize_callback" => "sanitize_text_field",
    ]);

    $wp_customize->add_control("contact_hero_caption", [
        "label" => __("Caption", "mytheme"),
        "section" => "contact_hero_section",
        "type" => "text",
    ]);

    $wp_customize->add_setting("contact_hero_video", [
        "default" => "",
        "sanitize_callback" => "absint",
    ]);

    $wp_customize->add_control(
        new WP_Customize_Media_Control($wp_customize, "contact_hero_video", [
            "label" => __("Hero Video", "mytheme"),
            "section" => "contact_hero_section",
            "mime_type" => "video",
        ])
    );

    $wp_customize->add_setting("contact_hero_video_poster", [
        "default" => "",
        "sanitize_callback" => "esc_url_raw",
    ]);

    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            "contact_hero_video_poster",
            [
                "label" => __("Hero Video Poster (Fallback)", "mytheme"),
                "section" => "contact_hero_section",
            ]
        )
    );

    $wp_customize->add_setting("contact_hero_mobile_image", [
        "default" => "",
        "sanitize_callback" => "esc_url_raw",
    ]);

    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            "contact_hero_mobile_image",
            [
                "label" => __("Hero Mobile Image", "mytheme"),
                "section" => "contact_hero_section",
            ]
        )
    );

    // Contact Section
    $wp_customize->add_section("contact_contact_section", [
        "title" => __("Contact Section", "mytheme"),
        "description" => __(
            "Settings for the contact section on the contact page."
        ),
        "panel" => "contact_panel",
        "priority" => 10,
    ]);

    $wp_customize->add_setting("contact_contact_heading_main", [
        "sanitize_callback" => "sanitize_text_field",
    ]);

    $wp_customize->add_control("contact_contact_heading_main", [
        "label" => __("Heading Main", "mytheme"),
        "section" => "contact_contact_section",
        "type" => "text",
    ]);

    $wp_customize->add_setting("contact_contact_heading_span", [
        "sanitize_callback" => "sanitize_text_field",
    ]);

    $wp_customize->add_control("contact_contact_heading_span", [
        "label" => __("Heading Span", "mytheme"),
        "section" => "contact_contact_section",
        "type" => "text",
    ]);

    $wp_customize->add_setting("contact_contact_paragraph", [
        "sanitize_callback" => "sanitize_text_field",
    ]);

    $wp_customize->add_control("contact_contact_paragraph", [
        "label" => __("Paragraph", "mytheme"),
        "section" => "contact_contact_section",
        "type" => "text",
    ]);
}

add_action("customize_register", "add_contact_customizer_settings");
