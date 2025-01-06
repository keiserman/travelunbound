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

    $wp_customize->add_setting("about_hero_subtitle_main", [
        "default" => "",
        "sanitize_callback" => "sanitize_text_field",
    ]);

    $wp_customize->add_control("about_hero_subtitle_main", [
        "label" => __("Subtitle Main", "mytheme"),
        "section" => "about_hero_section",
        "type" => "text",
    ]);

    $wp_customize->add_setting("about_hero_subtitle_span", [
        "default" => "",
        "sanitize_callback" => "sanitize_text_field",
    ]);

    $wp_customize->add_control("about_hero_subtitle_span", [
        "label" => __("Subtitle Span", "mytheme"),
        "section" => "about_hero_section",
        "type" => "text",
    ]);

    $wp_customize->add_setting("about_hero_caption", [
        "default" => "",
        "sanitize_callback" => "sanitize_text_field",
    ]);

    $wp_customize->add_control("about_hero_caption", [
        "label" => __("Caption", "mytheme"),
        "section" => "about_hero_section",
        "type" => "text",
    ]);

    // About Section
    $wp_customize->add_section("about_about_section", [
        "title" => __("About Section", "mytheme"),
        "description" => __(
            "Settings for the about section on the about page."
        ),
        "panel" => "about_panel",
        "priority" => 20,
    ]);

    $wp_customize->add_setting("about_about_heading_main", [
        "default" => "",
        "sanitize_callback" => "sanitize_text_field",
    ]);

    $wp_customize->add_control("about_about_heading_main", [
        "label" => __("Heading Main", "mytheme"),
        "section" => "about_about_section",
        "type" => "text",
    ]);

    $wp_customize->add_setting("about_about_heading_span", [
        "default" => "",
        "sanitize_callback" => "sanitize_text_field",
    ]);

    $wp_customize->add_control("about_about_heading_span", [
        "label" => __("Heading Span", "mytheme"),
        "section" => "about_about_section",
        "type" => "text",
    ]);

    $wp_customize->add_setting("about_about_paragraph", [
        "default" => "",
        "sanitize_callback" => "sanitize_text_field",
    ]);

    $wp_customize->add_control("about_about_paragraph", [
        "label" => __("Paragraph", "mytheme"),
        "section" => "about_about_section",
        "type" => "textarea",
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

    $wp_customize->add_setting("about_about_subheading_main", [
        "default" => "",
        "sanitize_callback" => "sanitize_text_field",
    ]);

    $wp_customize->add_control("about_about_subheading_main", [
        "label" => __("Heading Main", "mytheme"),
        "section" => "about_about_section",
        "type" => "text",
    ]);

    $wp_customize->add_setting("about_about_subheading_span", [
        "default" => "",
        "sanitize_callback" => "sanitize_text_field",
    ]);

    $wp_customize->add_control("about_about_subheading_span", [
        "label" => __("Heading Span", "mytheme"),
        "section" => "about_about_section",
        "type" => "text",
    ]);

    // Founders Section
    $wp_customize->add_section("about_founders_section", [
        "title" => __("Founders Section", "mytheme"),
        "panel" => "about_panel",
        "priority" => 30,
    ]);

    $wp_customize->add_setting("about_founders_heading_main", [
        "default" => "",
        "sanitize_callback" => "sanitize_text_field",
    ]);

    $wp_customize->add_control("about_founders_heading_main", [
        "label" => __("Heading Main", "mytheme"),
        "section" => "about_founders_section",
        "type" => "text",
    ]);

    $wp_customize->add_setting("about_founders_heading_span", [
        "default" => "",
        "sanitize_callback" => "sanitize_text_field",
    ]);

    $wp_customize->add_control("about_founders_heading_span", [
        "label" => __("Heading Span", "mytheme"),
        "section" => "about_founders_section",
        "type" => "text",
    ]);

    $wp_customize->add_setting("about_founders_paragraph", [
        "default" => "",
        "sanitize_callback" => "sanitize_text_field",
    ]);

    $wp_customize->add_control("about_founders_paragraph", [
        "label" => __("Paragraph", "mytheme"),
        "section" => "about_founders_section",
        "type" => "textarea",
    ]);

    // Travel Partners Section
    $wp_customize->add_section("about_tp_section", [
        "title" => __("Travel Partners Section", "mytheme"),
        "panel" => "about_panel",
        "priority" => 30,
    ]);

    $wp_customize->add_setting("about_tp_paragraph", [
        "default" => "",
        "sanitize_callback" => "sanitize_text_field",
    ]);

    $wp_customize->add_control("about_tp_paragraph", [
        "label" => __("Paragraph", "mytheme"),
        "section" => "about_tp_section",
        "type" => "textarea",
    ]);

    // Hotel Partners Section
    $wp_customize->add_section("about_hp_section", [
        "title" => __("Hotel Partners Section", "mytheme"),
        "panel" => "about_panel",
        "priority" => 30,
    ]);

    $wp_customize->add_setting("about_hp_heading", [
        "default" => "",
        "sanitize_callback" => "sanitize_text_field",
    ]);

    $wp_customize->add_control("about_hp_heading", [
        "label" => __("Heading", "mytheme"),
        "section" => "about_hp_section",
        "type" => "text",
    ]);

    $wp_customize->add_setting("about_hp_paragraph", [
        "default" => "",
        "sanitize_callback" => "sanitize_text_field",
    ]);

    $wp_customize->add_control("about_hp_paragraph", [
        "label" => __("Paragraph", "mytheme"),
        "section" => "about_hp_section",
        "type" => "textarea",
    ]);

    // Mission Section
    $wp_customize->add_section("about_mission_section", [
        "title" => __("Mission Section", "mytheme"),
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

    $wp_customize->add_setting("about_mission_button_link", [
        "default" => "",
        "sanitize_callback" => "absint",
    ]);

    $wp_customize->add_control("about_mission_button_link_control", [
        "label" => __("Button Link", "mytheme"),
        "section" => "about_mission_section",
        "settings" => "about_mission_button_link",
        "type" => "dropdown-pages",
    ]);

    $wp_customize->add_setting("about_mission_button_text", [
        "default" => "",
        "sanitize_callback" => "sanitize_text_field",
    ]);

    $wp_customize->add_control("about_mission_button_text", [
        "label" => __("Button Text", "mytheme"),
        "section" => "about_mission_section",
        "type" => "text",
    ]);

    $wp_customize->add_setting("about_mission_faq_title", [
        "default" => "",
        "sanitize_callback" => "sanitize_text_field",
    ]);

    $wp_customize->add_control("about_mission_faq_title", [
        "label" => __("FAQ Title", "mytheme"),
        "section" => "about_mission_section",
        "type" => "text",
    ]);

    $wp_customize->add_setting("about_mission_faq_text", [
        "default" => "",
        "sanitize_callback" => "sanitize_text_field",
    ]);

    $wp_customize->add_control("about_mission_faq_text", [
        "label" => __("FAQ Text", "mytheme"),
        "section" => "about_mission_section",
        "type" => "textarea",
    ]);

    // CTA Section
    $wp_customize->add_section("about_cta_section", [
        "title" => __("CTA Section", "mytheme"),
        "panel" => "about_panel",
    ]);

    $wp_customize->add_setting("about_cta_link", [
        "default" => "",
        "sanitize_callback" => "absint",
    ]);

    $wp_customize->add_control("about_cta_link_control", [
        "label" => __("CTA Link", "mytheme"),
        "section" => "about_cta_section",
        "settings" => "about_cta_link",
        "type" => "dropdown-pages",
    ]);

    $wp_customize->add_setting("about_cta_text", [
        "default" => "",
        "sanitize_callback" => "sanitize_text_field",
    ]);

    $wp_customize->add_control("about_cta_text", [
        "label" => __("CTA Text", "mytheme"),
        "section" => "about_cta_section",
        "type" => "text",
    ]);
}

add_action("customize_register", "add_about_customizer_settings");
