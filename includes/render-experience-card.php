<?php
function render_experience_card($post_id, $index = 0)
{
    $location = get_post_meta($post_id, '_experience_location', true);
    $title = get_the_title($post_id);
    $image_url = esc_url(get_the_post_thumbnail_url($post_id, 'large'));
    $title_attr = esc_attr($title);
    $gallery = get_post_meta($post_id, '_experience_gallery', true);
    $content = apply_filters('the_content', get_post_field('post_content', $post_id));

    $modal_id = 'lightboxModal-' . $post_id;
    $swiper_id = 'swiper-' . $post_id;
?>
    <div class="experiences-card">
        <a href="#"
            class="open-lightbox overflow-hidden"
            data-target="#<?php echo $modal_id; ?>"
            data-index="0">
            <img class="w-full" src="<?php echo $image_url; ?>" alt="<?php echo $title_attr; ?>">
        </a>
        <div class="flex md:gap-2 justify-between flex-wrap sm:flex-row flex-col">
            <h4 class="heading-h4"><?php echo esc_html($title); ?></h4>
            <?php if (!empty($location)): ?>
                <p class="text-sm"><?php echo esc_html($location); ?></p>
            <?php endif; ?>
        </div>
    </div>

    <div id="<?php echo $modal_id; ?>" class="lightbox-modal fixed inset-0 z-50 bg-primary hidden items-center justify-center" data-gallery-modal>
        <button id="closeLightboxBtn" class="close-lightbox absolute w-8 h-8 top-4 right-4 text-white text-2xl z-10">
            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 256 256">
                <path d="M205.66,194.34a8,8,0,0,1-11.32,11.32L128,139.31,61.66,205.66a8,8,0,0,1-11.32-11.32L116.69,128,50.34,61.66A8,8,0,0,1,61.66,50.34L128,116.69l66.34-66.35a8,8,0,0,1,11.32,11.32L139.31,128Z"></path>
            </svg>
        </button>

        <div class="absolute bottom-4 left-4 text-white space-y-2 z-10">
            <h4 class="text-lg font-bold"><?php echo esc_html($title); ?></h4>
            <div class="text-base max-w-md">
                <?php echo $content; ?>
            </div>
        </div>

        <?php if ($location): ?>
            <div class="absolute bottom-4 right-4 text-white text-sm opacity-80 z-10">
                <?php echo esc_html($location); ?>
            </div>
        <?php endif; ?>

        <div class="swiper w-full h-full">
            <div class="swiper-wrapper">
                <?php if (!empty($gallery) && is_array($gallery)): ?>
                    <?php foreach ($gallery as $img_id): ?>
                        <?php $img_url = wp_get_attachment_image_url($img_id, 'large'); ?>
                        <?php if ($img_url): ?>
                            <div class="swiper-slide w-full h-full">
                                <img src="<?php echo esc_url($img_url); ?>" alt="<?php echo esc_attr($title); ?>" class="w-full h-full object-contain">
                            </div>
                        <?php endif; ?>
                    <?php endforeach; ?>
                <?php else: ?>
                    <div class="swiper-slide">
                        <p>No images found in the gallery.</p>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
<?php
}
?>