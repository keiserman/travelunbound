<?php
// Register Hotel Partner Post Type
function travel_unbound_register_hotel_partners_cpt()
{
    $labels = array(
        'name' => _x('Hotel Partners', 'Post type general name', 'travel-unbound'),
        'singular_name' => _x('Hotel Partner', 'Post type singular name', 'travel-unbound'),
        'menu_name' => _x('Hotel Partners', 'Admin Menu text', 'travel-unbound'),
        'name_admin_bar' => _x('Hotel Partner', 'Add New on Toolbar', 'travel-unbound'),
        'add_new' => __('Add New Hotel Partner', 'travel-unbound'),
        'add_new_item' => __('Add New Hotel Partner', 'travel-unbound'),
        'edit_item' => __('Edit Hotel Partner', 'travel-unbound'),
        'new_item' => __('New Hotel Partner', 'travel-unbound'),
        'view_item' => __('View Hotel Partner', 'travel-unbound'),
        'all_items' => __('All Hotel Partners', 'travel-unbound'),
        'search_items' => __('Search Hotel Partners', 'travel-unbound'),
        'parent_item_colon' => __('Parent Hotel Partners:', 'travel-unbound'),
        'not_found' => __('No Hotel Partners found.', 'travel-unbound'),
        'not_found_in_trash' => __('No Hotel Partners found in Trash.', 'travel-unbound'),
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'hotel-partners'),
        'capability_type' => 'post',
        'has_archive' => false,
        'hierarchical' => false,
        'menu_position' => 40,
        'menu_icon' => 'dashicons-admin-multisite',
        'supports' => array('title', 'thumbnail'),
    );

    register_post_type('hotel-partner', $args);
}

add_action('init', 'travel_unbound_register_hotel_partners_cpt');
