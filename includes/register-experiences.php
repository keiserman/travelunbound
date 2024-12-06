<?php

function register_experiences_cpt()
{
    $args = array(
        'label' => 'Experiences',
        'public' => true,
        'menu_icon' => 'dashicons-location-alt', // Optional: Icon for the admin menu
        'supports' => array('title', 'editor', 'thumbnail'), // Supports title and featured image
    );
    register_post_type('experiences', $args);
}
add_action('init', 'register_experiences_cpt');

// Add meta box for location
function experiences_add_meta_boxes()
{
    add_meta_box(
        'experience_location', // ID of the meta box
        'Location', // Title of the meta box
        'experiences_location_meta_box_callback', // Callback to display the field
        'experiences', // Post type where it will appear
        'normal', // Context (side, normal, advanced)
        'default' // Priority
    );
}
add_action('add_meta_boxes', 'experiences_add_meta_boxes');

// Callback function for the meta box
function experiences_location_meta_box_callback($post)
{
    // Get the current value of the meta field
    $value = get_post_meta($post->ID, '_experience_location', true);
?>
    <label for="experience_location_field">Enter Location:</label>
    <input type="text" name="experience_location_field" id="experience_location_field" value="<?php echo esc_attr($value); ?>" style="width:100%;">
<?php
}

// Save the location meta field
function experiences_save_meta_box_data($post_id)
{
    // Check if the location field is set
    if (isset($_POST['experience_location_field'])) {
        // Sanitize the input and save it to the database
        $location = sanitize_text_field($_POST['experience_location_field']);
        update_post_meta($post_id, '_experience_location', $location);
    }
}
add_action('save_post', 'experiences_save_meta_box_data');
