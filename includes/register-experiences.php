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
    $object_fit_values = get_post_meta($post->ID, '_experience_gallery_object_fit', true);
    $object_fit_values = is_array($object_fit_values) ? $object_fit_values : [];
?>
    <style>
        #gallery-images-container ul {
            display: grid;
            grid-template-columns: repeat(5, 1fr);
            gap: 1rem;
            padding: 0;
        }

        .gallery-image-wrapper {
            list-style: none;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 0.5rem;
        }

        .gallery-img {
            width: 100%;
        }

        #gallery-images-container ul li select,
        #gallery-images-container ul li button {
            width: 100%;
        }
    </style>

    <div id="gallery-images-container">
        <ul>
            <?php
            foreach ($gallery_ids as $index => $image_id) {
                $img_url = wp_get_attachment_image_url($image_id, 'thumbnail');
                $object_fit = isset($object_fit_values[$index]) ? esc_attr($object_fit_values[$index]) : 'contain';
                echo '<li class="gallery-image-wrapper">
                        <img class="gallery-img" src="' . esc_url($img_url) . '">
                        <select name="experience_gallery_object_fit[]">
                            <option value="contain" ' . selected($object_fit, 'contain', false) . '>Contain</option>
                            <option value="cover" ' . selected($object_fit, 'cover', false) . '>Cover</option>
                        </select>
                        <button type="button" class="remove-image button">Remove</button>
                        <input type="hidden" name="experience_gallery_ids[]" value="' . esc_attr($image_id) . '">
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
                        $(this)
                            .find('select')
                            .attr('name', 'experience_gallery_object_fit[' + index + ']');
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

                    selection.map(function(attachment) {
                        attachment = attachment.toJSON();
                        let thumbUrl = attachment.sizes && attachment.sizes.thumbnail ?
                            attachment.sizes.thumbnail.url :
                            attachment.url;

                        $container.append(`
                            <li class="gallery-image-wrapper">
                                <img class="gallery-img" src="${thumbUrl}">
                                <select name="experience_gallery_object_fit[]">
                                    <option value="contain">Contain</option>
                                    <option value="cover">Cover</option>
                                </select>
                                <button type="button" class="remove-image button">Remove</button>
                                <input type="hidden" name="experience_gallery_ids[]" value="${attachment.id}">
                            </li>
                        `);
                    });

                    $container.sortable('refresh');
                });
            });

            $(document).on('click', '.remove-image', function() {
                $(this).closest('li').remove();
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

        $object_fit_values = isset($_POST['experience_gallery_object_fit']) ? $_POST['experience_gallery_object_fit'] : [];
        update_post_meta($post_id, '_experience_gallery_object_fit', $object_fit_values);
    } else {
        delete_post_meta($post_id, '_experience_gallery');
        delete_post_meta($post_id, '_experience_gallery_object_fit');
    }
}
add_action('save_post', 'experiences_save_gallery_meta_box');
