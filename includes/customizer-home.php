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

    $wp_customize->add_setting("home_hero_subheading_main", [
        "sanitize_callback" => "sanitize_text_field",
    ]);

    $wp_customize->add_control("home_hero_subheading_main", [
        "label" => __("Subheading Main", "mytheme"),
        "section" => "home_hero_section",
        "type" => "text",
    ]);

    $wp_customize->add_setting("home_hero_subheading_span", [
        "sanitize_callback" => "sanitize_text_field",
    ]);

    $wp_customize->add_control("home_hero_subheading_span", [
        "label" => __("Subheading Span", "mytheme"),
        "section" => "home_hero_section",
        "type" => "text",
    ]);

    $wp_customize->add_setting("home_hero_video_poster", [
        "default" => "",
        "sanitize_callback" => "esc_url_raw",
    ]);

    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            "home_hero_video_poster",
            [
                "label" => __("Video Poster (Fallback)", "mytheme"),
                "section" => "home_hero_section",
            ]
        )
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

    $wp_customize->add_setting("home_hero_button_link", [
        "default" => "",
        "sanitize_callback" => "absint",
    ]);

    $wp_customize->add_control("home_hero_button_link_control", [
        "label" => __("Button Link", "mytheme"),
        "section" => "home_hero_section",
        "settings" => "home_hero_button_link",
        "type" => "dropdown-pages",
    ]);

    $wp_customize->add_setting("home_hero_button_text", [
        "default" => "",
        "sanitize_callback" => "sanitize_text_field",
    ]);

    $wp_customize->add_control("home_hero_button_text", [
        "label" => __("Button Text", "mytheme"),
        "section" => "home_hero_section",
        "type" => "text",
    ]);

    $wp_customize->add_setting("home_hero_button2_link", [
        "default" => "",
        "sanitize_callback" => "absint",
    ]);

    $wp_customize->add_control("home_hero_button2_link_control", [
        "label" => __("Button2 Link", "mytheme"),
        "section" => "home_hero_section",
        "settings" => "home_hero_button2_link",
        "type" => "dropdown-pages",
    ]);

    $wp_customize->add_setting("home_hero_button2_text", [
        "default" => "",
        "sanitize_callback" => "sanitize_text_field",
    ]);

    $wp_customize->add_control("home_hero_button2_text", [
        "label" => __("Button2 Text", "mytheme"),
        "section" => "home_hero_section",
        "type" => "text",
    ]);

    // About Section
    $wp_customize->add_section("home_about_section", [
        "title" => __("About Section", "mytheme"),
        "panel" => "home_panel",
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
        new WP_Customize_Image_Control(
            $wp_customize,
            "home_about_video_poster",
            [
                "label" => __("Video Poster (Fallback)", "mytheme"),
                "section" => "home_about_section",
            ]
        )
    );

    $wp_customize->add_setting("home_about_caption_left", [
        "sanitize_callback" => "sanitize_text_field",
    ]);

    $wp_customize->add_control("home_about_caption_left", [
        "label" => __("Caption Left", "mytheme"),
        "section" => "home_about_section",
        "type" => "text",
    ]);

    $wp_customize->add_setting("home_about_caption_right", [
        "sanitize_callback" => "sanitize_text_field",
    ]);

    $wp_customize->add_control("home_about_caption_right", [
        "label" => __("Caption Right", "mytheme"),
        "section" => "home_about_section",
        "type" => "text",
    ]);

    $wp_customize->add_setting("home_about_subheading", [
        "sanitize_callback" => "sanitize_text_field",
    ]);

    $wp_customize->add_control("home_about_subheading", [
        "label" => __("Subheading", "mytheme"),
        "section" => "home_about_section",
        "type" => "text",
    ]);

    $wp_customize->add_setting("home_about_paragraph", [
        "sanitize_callback" => "sanitize_text_field",
    ]);

    $wp_customize->add_control("home_about_paragraph", [
        "label" => __("Paragraph", "mytheme"),
        "section" => "home_about_section",
        "type" => "textarea",
    ]);

    $wp_customize->add_setting("home_about_paragraph2", [
        "sanitize_callback" => "sanitize_text_field",
    ]);

    $wp_customize->add_control("home_about_paragraph2", [
        "label" => __("Paragraph 2", "mytheme"),
        "section" => "home_about_section",
        "type" => "textarea",
    ]);

    // Experiences Section
    $wp_customize->add_section("home_experiences_section", [
        "title" => __("Experiences Section", "mytheme"),
        "panel" => "home_panel",
    ]);

    $wp_customize->add_setting("home_experiences_heading_main", [
        "sanitize_callback" => "sanitize_text_field",
    ]);

    $wp_customize->add_control("home_experiences_heading_main", [
        "label" => __("Heading Main", "mytheme"),
        "section" => "home_experiences_section",
        "type" => "text",
    ]);

    $wp_customize->add_setting("home_experiences_heading_span", [
        "sanitize_callback" => "sanitize_text_field",
    ]);

    $wp_customize->add_control("home_experiences_heading_span", [
        "label" => __("Heading Span", "mytheme"),
        "section" => "home_experiences_section",
        "type" => "text",
    ]);

    $wp_customize->add_setting("home_experiences_paragraph", [
        "sanitize_callback" => "sanitize_text_field",
    ]);

    $wp_customize->add_control("home_experiences_paragraph", [
        "label" => __("Paragraph", "mytheme"),
        "section" => "home_experiences_section",
        "type" => "textarea",
    ]);

    $wp_customize->add_setting("home_experiences_paragraph2", [
        "sanitize_callback" => "sanitize_text_field",
    ]);

    $wp_customize->add_control("home_experiences_paragraph2", [
        "label" => __("Paragraph 2", "mytheme"),
        "section" => "home_experiences_section",
        "type" => "textarea",
    ]);

    $wp_customize->add_setting("home_experiences_paragraph3", [
        "sanitize_callback" => "sanitize_text_field",
    ]);

    $wp_customize->add_control("home_experiences_paragraph3", [
        "label" => __("Paragraph 3", "mytheme"),
        "section" => "home_experiences_section",
        "type" => "textarea",
    ]);

    $wp_customize->add_setting("home_experiences_paragraph4", [
        "sanitize_callback" => "sanitize_text_field",
    ]);

    $wp_customize->add_control("home_experiences_paragraph4", [
        "label" => __("Paragraph 4", "mytheme"),
        "section" => "home_experiences_section",
        "type" => "textarea",
    ]);

    $wp_customize->add_setting("home_experiences_button_link", [
        "default" => "",
        "sanitize_callback" => "absint",
    ]);

    $wp_customize->add_control("home_experiences_button_link_control", [
        "label" => __("Button Link", "mytheme"),
        "section" => "home_experiences_section",
        "settings" => "home_experiences_button_link",
        "type" => "dropdown-pages",
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

    // Journey Section
    $wp_customize->add_section("home_journey_section", [
        "title" => __("Journey Section", "mytheme"),
        "panel" => "home_panel",
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

    $wp_customize->add_setting("home_journey_button_link", [
        "default" => "",
        "sanitize_callback" => "absint",
    ]);

    $wp_customize->add_control("home_journey_button_link_control", [
        "label" => __("Button Link", "mytheme"),
        "section" => "home_journey_section",
        "settings" => "home_journey_button_link",
        "type" => "dropdown-pages",
    ]);

    $wp_customize->add_setting("home_journey_button_text", [
        "default" => "",
        "sanitize_callback" => "sanitize_text_field",
    ]);

    $wp_customize->add_control("home_journey_button_text", [
        "label" => __("Button Text", "mytheme"),
        "section" => "home_journey_section",
        "type" => "text",
    ]);

    $wp_customize->add_setting("home_journey_heading", [
        "default" => "",
        "sanitize_callback" => "sanitize_text_field",
    ]);

    $wp_customize->add_control("home_journey_heading", [
        "label" => __("Heading", "mytheme"),
        "section" => "home_journey_section",
        "type" => "text",
    ]);

    $wp_customize->add_setting("home_journey_paragraph", [
        "default" => "",
        "sanitize_callback" => "sanitize_text_field",
    ]);

    $wp_customize->add_control("home_journey_paragraph", [
        "label" => __("Paragraph", "mytheme"),
        "section" => "home_journey_section",
        "type" => "text",
    ]);

    // CTA Section
    $wp_customize->add_section("home_cta_section", [
        "title" => __("CTA Section", "mytheme"),
        "panel" => "home_panel",
    ]);

    $wp_customize->add_setting("home_cta_link", [
        "default" => "",
        "sanitize_callback" => "absint",
    ]);

    $wp_customize->add_control("home_cta_link_control", [
        "label" => __("CTA Link", "mytheme"),
        "section" => "home_cta_section",
        "settings" => "home_cta_link",
        "type" => "dropdown-pages",
    ]);

    $wp_customize->add_setting("home_cta_text", [
        "default" => "",
        "sanitize_callback" => "sanitize_text_field",
    ]);

    $wp_customize->add_control("home_cta_text", [
        "label" => __("CTA Text", "mytheme"),
        "section" => "home_cta_section",
        "type" => "text",
    ]);
}

add_action("customize_register", "add_home_customizer_settings");
