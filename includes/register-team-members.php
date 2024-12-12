<?php
// Register Team Members Post Type
function travel_unbound_register_team_members_cpt()
{
    $labels = array(
        'name' => _x('Team Members', 'Post type general name', 'travel-unbound'),
        'singular_name' => _x('Team Member', 'Post type singular name', 'travel-unbound'),
        'menu_name' => _x('Team Members', 'Admin Menu text', 'travel-unbound'),
        'name_admin_bar' => _x('Team Member', 'Add New on Toolbar', 'travel-unbound'),
        'add_new' => __('Add New Team Member', 'travel-unbound'),
        'add_new_item' => __('Add New Team Member', 'travel-unbound'),
        'edit_item' => __('Edit Team Member', 'travel-unbound'),
        'new_item' => __('New Team Member', 'travel-unbound'),
        'view_item' => __('View Team Member', 'travel-unbound'),
        'all_items' => __('All Team Members', 'travel-unbound'),
        'search_items' => __('Search Team Members', 'travel-unbound'),
        'parent_item_colon' => __('Parent Team Members:', 'travel-unbound'),
        'not_found' => __('No Team Members found.', 'travel-unbound'),
        'not_found_in_trash' => __('No Team Members found in Trash.', 'travel-unbound'),
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'team-members'),
        'capability_type' => 'post',
        'has_archive' => false,
        'hierarchical' => false,
        'menu_position' => 30,
        'menu_icon' => 'dashicons-admin-users',
        'supports' => array('title', 'editor', 'thumbnail'),
    );

    register_post_type('team-members', $args);
}

add_action('init', 'travel_unbound_register_team_members_cpt');
