<?php
function render_experience_card($post_id, $index = 0)
{
    $sans = get_field('sans', $post_id);
    $content = get_field('content', $post_id);
    $image = get_field('image', $post_id);
    $location = get_field('location', $post_id);
    $title = get_the_title($post_id);
    $gallery_title = get_field('gallery_title', $post_id);
    $gallery = get_post_meta($post_id, '_experience_gallery', true);

?>

    <div data-gallery="card" class="experiences-card">
        <div data-gallery="open" class="overflow-hidden cursor-pointer">
            <img class="w-full" src="<?php echo $image; ?>" alt="<?php echo $title; ?>">
        </div>
        <div class="flex md:gap-2 justify-between flex-wrap sm:flex-row flex-col pl-6">
            <h4 class="heading-h4 font-serif"><?php echo esc_html($title); ?>/<span class="font-sans"><?php echo esc_html($sans); ?></span></h4>
            <?php if (!empty($location)): ?>
                <p class="text-sm"><?php echo esc_html($location); ?></p>
            <?php endif; ?>
        </div>

        <div data-gallery="modal" class="fixed inset-0 z-50 bg-primary hidden items-center justify-center">

            <div class="absolute z-20 top-0 w-full p-4 flex justify-end sm:bg-none bg-gradient-to-b from-black/60 to-transparent">
                <div data-gallery="close" class="w-8 h-8 text-white text-2xl cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 256 256">
                        <path d="M205.66,194.34a8,8,0,0,1-11.32,11.32L128,139.31,61.66,205.66a8,8,0,0,1-11.32-11.32L116.69,128,50.34,61.66A8,8,0,0,1,61.66,50.34L128,116.69l66.34-66.35a8,8,0,0,1,11.32,11.32L139.31,128Z"></path>
                    </svg>
                </div>
            </div>

            <div class="absolute bottom-0 left-0 z-20 p-4 w-full flex flex-col sm:flex-row gap-4 sm:items-end justify-between sm:bg-none bg-gradient-to-t from-black/60 to-transparent">
                <div class="text-white">
                    <h4 class="text-lg font-serif mb-2"><?php echo esc_html($gallery_title); ?></span></h4>
                    <div class="text-base max-w-md">
                        <?php echo $content; ?>
                    </div>
                </div>
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
                            <?php
                            $img_url = wp_get_attachment_image_url($img_id, 'large');
                            $img_caption = get_post($img_id)->post_excerpt;
                            $img_description = get_post($img_id)->post_content;
                            ?>
                            <?php if ($img_url): ?>
                                <div class="swiper-slide w-full h-full">
                                    <img src="<?php echo esc_url($img_url); ?>" alt="<?php echo esc_attr($title); ?>" class="w-full h-full object-cover sm:object-contain">
                                    <div class="absolute p-4 text-white top-0 sm:top-auto  sm:bottom-0 sm:right-0 z-50 flex flex-col sm:items-end">
                                        <?php if (!empty($img_caption)): ?>
                                            <div class="sm:vertical-text text-sm">
                                                <?php echo esc_html($img_caption); ?>
                                            </div>
                                        <?php endif; ?>
                                        <?php if (!empty($img_description)): ?>
                                            <div class="text-sm">
                                                <?php echo esc_html($img_description); ?>
                                            </div>
                                        <?php endif; ?>
                                    </div>
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