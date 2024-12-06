<?php
// Register FAQ Post Type
function travel_unbound_register_faqs_cpt()
{
    $labels = array(
        'name'                  => _x('FAQs', 'Post type general name', 'travel-unbound'),
        'singular_name'         => _x('FAQ', 'Post type singular name', 'travel-unbound'),
        'menu_name'             => _x('FAQs', 'Admin Menu text', 'travel-unbound'),
        'name_admin_bar'        => _x('FAQ', 'Add New on Toolbar', 'travel-unbound'),
        'add_new'               => __('Add New FAQ', 'travel-unbound'),
        'add_new_item'          => __('Add New FAQ', 'travel-unbound'),
        'edit_item'             => __('Edit FAQ', 'travel-unbound'),
        'new_item'              => __('New FAQ', 'travel-unbound'),
        'view_item'             => __('View FAQ', 'travel-unbound'),
        'all_items'             => __('All FAQs', 'travel-unbound'),
        'search_items'          => __('Search FAQs', 'travel-unbound'),
        'parent_item_colon'     => __('Parent FAQs:', 'travel-unbound'),
        'not_found'             => __('No FAQs found.', 'travel-unbound'),
        'not_found_in_trash'    => __('No FAQs found in Trash.', 'travel-unbound'),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'faqs'),
        'capability_type'    => 'post',
        'has_archive'        => false,
        'hierarchical'       => false,
        'menu_position'      => 20,
        'menu_icon'          => 'dashicons-editor-help', // Icon for the CPT in the admin menu
        'supports'           => array('title', 'editor', 'thumbnail'), // Features to enable
    );

    register_post_type('faq', $args);
}

add_action('init', 'travel_unbound_register_faqs_cpt');
