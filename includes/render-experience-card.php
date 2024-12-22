<?php
function render_experience_card($post_id, $index = 0)
{
    $location = get_post_meta($post_id, '_experience_location', true);
    $title = get_the_title($post_id);
    $image_url = esc_url(get_the_post_thumbnail_url($post_id, 'large'));
    $title_attr = esc_attr($title);
    $gallery = get_post_meta($post_id, '_experience_gallery', true);
    $content = apply_filters('the_content', get_post_field('post_content', $post_id));
?>

    <div data-gallery="card" class="experiences-card">
        <div data-gallery="open" class="overflow-hidden cursor-pointer">
            <img class="w-full" src="<?php echo $image_url; ?>" alt="<?php echo $title_attr; ?>">
        </div>
        <div class="flex md:gap-2 justify-between flex-wrap sm:flex-row flex-col">
            <h4 class="heading-h4"><?php echo esc_html($title); ?></h4>
            <?php if (!empty($location)): ?>
                <p class="text-sm"><?php echo esc_html($location); ?></p>
            <?php endif; ?>
        </div>

        <div data-gallery="modal" class="fixed inset-0 z-50 bg-primary hidden items-center justify-center">

            <div class="absolute z-20 top-0 w-full p-4 flex justify-end sm:bg-none bg-gradient-to-b from-black/60 to-transparent">
                <div data-gallery="close" class="w-8 h-8 text-white text-2xl">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 256 256">
                        <path d="M205.66,194.34a8,8,0,0,1-11.32,11.32L128,139.31,61.66,205.66a8,8,0,0,1-11.32-11.32L116.69,128,50.34,61.66A8,8,0,0,1,61.66,50.34L128,116.69l66.34-66.35a8,8,0,0,1,11.32,11.32L139.31,128Z"></path>
                    </svg>
                </div>
            </div>

            <div class="absolute bottom-0 left-0 z-20 p-4 w-full flex flex-col sm:flex-row gap-4 sm:items-end justify-between sm:bg-none bg-gradient-to-t from-black/60 to-transparent">
                <div class="text-white">
                    <h4 class="text-lg font-medium"><?php echo esc_html($title); ?></h4>
                    <div class="text-base max-w-md">
                        <?php echo $content; ?>
                    </div>
                </div>
                <?php if ($location): ?>
                    <div class="text-white text-sm opacity-80">
                        <?php echo esc_html($location); ?>
                    </div>
                <?php endif; ?>
            </div>

            <div data-gallery="swiper-prev" class="absolute w-8 h-8 left-4 top-1/2 z-10 text-white">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 256 256">
                    <path d="M224,128a8,8,0,0,1-8,8H59.31l58.35,58.34a8,8,0,0,1-11.32,11.32l-72-72a8,8,0,0,1,0-11.32l72-72a8,8,0,0,1,11.32,11.32L59.31,120H216A8,8,0,0,1,224,128Z"></path>
                </svg>
            </div>
            <div data-gallery="swiper-next" class="absolute w-8 h-8 right-4 top-1/2 z-10 text-white">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 256 256">
                    <path d="M221.66,133.66l-72,72a8,8,0,0,1-11.32-11.32L196.69,136H40a8,8,0,0,1,0-16H196.69L138.34,61.66a8,8,0,0,1,11.32-11.32l72,72A8,8,0,0,1,221.66,133.66Z"></path>
                </svg>
            </div>

            <div data-gallery="swiper" class="w-full h-full">
                <div class="swiper-wrapper">
                    <?php if (!empty($gallery) && is_array($gallery)): ?>
                        <?php foreach ($gallery as $img_id): ?>
                            <?php $img_url = wp_get_attachment_image_url($img_id, 'large'); ?>
                            <?php if ($img_url): ?>
                                <div class="swiper-slide w-full h-full">
                                    <img src="<?php echo esc_url($img_url); ?>" alt="<?php echo esc_attr($title); ?>" class="w-full h-full object-cover sm:object-contain">
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
    </div>

<?php
}
?>