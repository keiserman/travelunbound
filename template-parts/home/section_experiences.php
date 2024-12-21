<section>
    <div class="container padding-global py-40">
        <h2 class="heading-h1 m-auto max-w-4xl mb-6 md:mb-12">
            transformative<br>
            <span class="font-sans">travel experiences</span>
        </h2>
        <p class="m-auto max-w-4xl text-lg md:text-2xl mb-28">
            no matter where inspiration takes you, we will create a unique journey that immerses you in the genuine spirit of each destination.
        </p>

        <?php
        $experience_query = new WP_Query([
            'post_type'      => 'experiences',
            'orderby'        => 'date',
            'order'          => 'ASC',
            'posts_per_page' => -1,
        ]);
        $posts = $experience_query->posts;
        wp_reset_postdata();

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
                            <?php foreach ($gallery as $img_id):
                            ?>
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
                    <div data-swiper="prev" class="absolute w-8 h-8 left-4 top-1/2 z-10 text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 256 256">
                            <path d="M224,128a8,8,0,0,1-8,8H59.31l58.35,58.34a8,8,0,0,1-11.32,11.32l-72-72a8,8,0,0,1,0-11.32l72-72a8,8,0,0,1,11.32,11.32L59.31,120H216A8,8,0,0,1,224,128Z"></path>
                        </svg>
                    </div>
                    <div data-swiper="next" class="absolute w-8 h-8 right-4 top-1/2 z-10 text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 256 256">
                            <path d="M221.66,133.66l-72,72a8,8,0,0,1-11.32-11.32L196.69,136H40a8,8,0,0,1,0-16H196.69L138.34,61.66a8,8,0,0,1,11.32-11.32l72,72A8,8,0,0,1,221.66,133.66Z"></path>
                        </svg>
                    </div>
                </div>
            </div>

        <?php
        }

        ?>

        <div class="md:grid flex flex-col grid-cols-2 justify-items-center items-center gap-12 lg:gap-40 md:gap-24">
            <?php
            foreach ($posts as $index => $post) {
                setup_postdata($post);

                if ($index === 0) {
                    echo '<div class="col-span-2">';
                    render_experience_card($post->ID, $index);
                    echo '</div>';
                } elseif ($index === 1) {
                    echo '<div class="col-span-1">';
                    render_experience_card($post->ID, $index);
                    echo '</div>';
                } elseif ($index === 2) {
                    echo '<div class="col-span-1">';
                    render_experience_card($post->ID, $index);
                    echo '</div>';

                    if (count($posts) > 3) {
                        echo '<div class="text-lg md:text-xl col-span-2 max-w-3xl py-14 md:py-18">';
                        echo '<p>our in-the-know global network provides invaluable on-the-ground knowledge, insider insight, and exclusive access, connecting you to the local culture authentically and meaningfully.</p>';
                        echo '</div>';
                    }
                } elseif ($index === 3) {
                    echo '<div class="col-span-2">';
                    render_experience_card($post->ID, $index);
                    echo '</div>';
                } elseif ($index === 4) {
                    echo '<div class="flex flex-col items-end col-span-1">
                            <p class="text-lg md:text-xl pb-20 md:pb-52 max-w-md">
                                We give you the inside track on the hottest openings, latest happenings and the under-the-radar hidden gems from around the globe.
                            </p>';
                    render_experience_card($post->ID, $index);
                    echo '</div>';
                } elseif ($index === 5) {
                    echo '<div class="col-span-1">';
                    render_experience_card($post->ID, $index);
                    echo '</div>';
                } elseif ($index === 6) {
                    echo '<div class="flex flex-col items-end col-span-1">
                            <div class="flex flex-col items-start gap-8 pb-20 md:pb-52">
                                <p class="text-lg md:text-xl max-w-lg">
                                    Experience destinations in a new light as we take you far from the tourist traps and show you the buzziest neighbourhoods, top tables, and best shops.
                                </p>
                                <a href="/" class="btn is-text">view experiences
                                    <svg class="w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 54.5 36.8">
                                        <path fill="currentColor" d="M53.8 16.6 37.9.7c-1-1-2.6-1-3.5 0-1 1-1 2.6 0 3.5L46 15.8H0v5h46L34.4 32.4c-1 1-1 2.6 0 3.5 1 1 2.6 1 3.5 0L53.8 20c1-1 1-2.6 0-3.5Z"/>
                                    </svg>
                                </a>
                            </div>';
                    render_experience_card($post->ID, $index);
                    echo '</div>';
                } elseif ($index === 7) {
                    echo '<div class="col-span-1">';
                    render_experience_card($post->ID, $index);
                    echo '</div>';
                }
            }

            wp_reset_postdata();
            ?>
        </div>
    </div>
</section>