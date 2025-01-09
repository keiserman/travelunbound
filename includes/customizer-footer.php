<?php
function add_footer_customizer_settings($wp_customize)
{

    $wp_customize->add_section("footer_section", [
        "title" => __("Footer", "mytheme"),
    ]);

    $wp_customize->add_setting("footer_logo", [
        "default" => "",
        "sanitize_callback" => "esc_url_raw",
    ]);

    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            "footer_logo",
            [
                "label" => __("Footer Logo", "mytheme"),
                "section" => "footer_section",
            ]
        )
    );

    $wp_customize->add_setting("footer_text", [
        "default" => "",
        "sanitize_callback" => "sanitize_text_field",
    ]);

    $wp_customize->add_control("footer_text", [
        "label" => __("Footer Text", "mytheme"),
        "section" => "footer_section",
        "type" => "text",
    ]);

    $wp_customize->add_setting("footer_subtext", [
        "default" => "",
        "sanitize_callback" => "sanitize_text_field",
    ]);

    $wp_customize->add_control("footer_subtext", [
        "label" => __("Footer Subtext", "mytheme"),
        "section" => "footer_section",
        "type" => "text",
    ]);
}

add_action("customize_register", "add_footer_customizer_settings");
