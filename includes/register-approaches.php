<?php
// Register Approach Post Type
function travel_unbound_register_approaches_cpt()
{
    $labels = array(
        'name' => _x('Approaches', 'Post type general name', 'travel-unbound'),
        'singular_name' => _x('Approach', 'Post type singular name', 'travel-unbound'),
        'menu_name' => _x('Approaches', 'Admin Menu text', 'travel-unbound'),
        'name_admin_bar' => _x('Approach', 'Add New on Toolbar', 'travel-unbound'),
        'add_new' => __('Add New Approach', 'travel-unbound'),
        'add_new_item' => __('Add New Approach', 'travel-unbound'),
        'edit_item' => __('Edit Approach', 'travel-unbound'),
        'new_item' => __('New Approach', 'travel-unbound'),
        'view_item' => __('View Approach', 'travel-unbound'),
        'all_items' => __('All Approaches', 'travel-unbound'),
        'search_items' => __('Search Approaches', 'travel-unbound'),
        'parent_item_colon' => __('Parent Approaches:', 'travel-unbound'),
        'not_found' => __('No Approaches found.', 'travel-unbound'),
        'not_found_in_trash' => __('No Approaches found in Trash.', 'travel-unbound'),
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'Approaches'),
        'capability_type' => 'post',
        'has_archive' => false,
        'hierarchical' => false,
        'menu_position' => 30,
        'menu_icon' => 'dashicons-format-gallery',
        'supports' => array('title', 'editor', 'thumbnail'),
    );

    register_post_type('approach', $args);
}

add_action('init', 'travel_unbound_register_approaches_cpt');
