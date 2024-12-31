<?php

function experiences_add_gallery_meta_box()
{
    add_meta_box(
        'experience_gallery',
        'Gallery',
        'experiences_gallery_meta_box_callback',
        'experience',
        'normal',
        'default'
    );
}
add_action('add_meta_boxes', 'experiences_add_gallery_meta_box');

function experiences_gallery_meta_box_callback($post)
{
    wp_enqueue_media();
    wp_enqueue_script('jquery-ui-sortable');

    $gallery_ids = get_post_meta($post->ID, '_experience_gallery', true);
    $gallery_ids = is_array($gallery_ids) ? $gallery_ids : [];
?>
    <div id="gallery-images-container">
        <ul>
            <?php
            foreach ($gallery_ids as $image_id) {
                $img_url = wp_get_attachment_image_url($image_id, 'thumbnail');
                echo '<li style="display:inline-block; margin:5px;">
                        <img src="' . esc_url($img_url) . '" style="width:100px; height:100px;">
                        <input type="hidden" name="experience_gallery_ids[]" value="' . esc_attr($image_id) . '">
                        <button type="button" class="remove-image" style="display:block;">Remove</button>
                      </li>';
            }
            ?>
        </ul>
    </div>

    <button type="button" id="add-gallery-images" class="button">Add Gallery Images</button>

    <script>
        jQuery(document).ready(function($) {
            let galleryUploader;
            const $container = $('#gallery-images-container ul');

            $container.sortable({
                update: function(event, ui) {
                    $container.find('li').each(function(index) {
                        $(this)
                            .find('input[type="hidden"]')
                            .attr('name', 'experience_gallery_ids[' + index + ']');
                    });
                }
            });

            $('#add-gallery-images').on('click', function(e) {
                e.preventDefault();

                if (!galleryUploader) {
                    galleryUploader = wp.media({
                        title: 'Select Gallery Images',
                        button: {
                            text: 'Add to Gallery'
                        },
                        multiple: true
                    });
                }

                galleryUploader.open();

                galleryUploader.on('select', function() {
                    let selection = galleryUploader.state().get('selection');

                    $container.empty();

                    selection.map(function(attachment) {
                        attachment = attachment.toJSON();
                        let thumbUrl = attachment.sizes && attachment.sizes.thumbnail ?
                            attachment.sizes.thumbnail.url :
                            attachment.url;

                        $container.append(`
                            <li style="display:inline-block; margin:5px;">
                                <img src="${thumbUrl}" style="width:100px; height:100px;">
                                <input type="hidden" name="experience_gallery_ids[]" value="${attachment.id}">
                                <button type="button" class="remove-image" style="display:block;">Remove</button>
                            </li>
                        `);
                    });

                    $container.sortable('refresh');

                    $container.find('li').each(function(index) {
                        $(this)
                            .find('input[type="hidden"]')
                            .attr('name', 'experience_gallery_ids[' + index + ']');
                    });
                });
            });

            $(document).on('click', '.remove-image', function() {
                $(this).closest('li').remove();

                $container.find('li').each(function(index) {
                    $(this)
                        .find('input[type="hidden"]')
                        .attr('name', 'experience_gallery_ids[' + index + ']');
                });
            });
        });
    </script>
<?php
}

function experiences_save_gallery_meta_box($post_id)
{
    if (isset($_POST['experience_gallery_ids'])) {
        $gallery_ids = array_map('intval', $_POST['experience_gallery_ids']);
        update_post_meta($post_id, '_experience_gallery', $gallery_ids);
    } else {
        delete_post_meta($post_id, '_experience_gallery');
    }
}
add_action('save_post', 'experiences_save_gallery_meta_box');
