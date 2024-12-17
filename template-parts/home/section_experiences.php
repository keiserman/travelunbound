<section>
    <div class="container padding-global py-40">
        <h2 class="heading-h2 m-auto max-w-4xl text-8xl mb-12">
            transformative<br>
            <span class="font-sans">travel experiences</span>
        </h2>
        <p class="m-auto max-w-4xl text-2xl mb-28">
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
        ?>
            <div class="experiences-card">
                <a href="#" class="open-lightbox overflow-hidden" data-index="<?php echo (int) $index; ?>">
                    <img class="w-full" src="<?php echo $image_url; ?>" alt="<?php echo $title_attr; ?>">
                </a>
                <div class="flex justify-between flex-wrap">
                    <h4 class="heading-h4"><?php echo esc_html($title); ?></h4>
                    <?php if (!empty($location)): ?>
                        <p class="text-sm"><?php echo esc_html($location); ?></p>
                    <?php endif; ?>
                </div>
            </div>
        <?php
        }
        ?>

        <div class="md:grid flex flex-col grid-cols-2 justify-items-center items-center lg:gap-40 gap-24">
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
                        echo '<div class="text-xl col-span-2 max-w-3xl py-32">';
                        echo '<p>our in-the-know global network provides invaluable on-the-ground knowledge...</p>';
                        echo '</div>';
                    }
                } elseif ($index === 3) {
                    echo '<div class="col-span-2">';
                    render_experience_card($post->ID, $index);
                    echo '</div>';
                } elseif ($index === 4) {
                    echo '<div class="flex flex-col items-end col-span-1">
                            <p class="text-xl pb-52 max-w-md">
                                We give you the inside track on the hottest openings...
                            </p>';
                    render_experience_card($post->ID, $index);
                    echo '</div>';
                } elseif ($index === 5) {
                    echo '<div class="col-span-1">';
                    render_experience_card($post->ID, $index);
                    echo '</div>';
                } elseif ($index === 6) {
                    echo '<div class="flex flex-col items-end col-span-1">
                            <div class="flex flex-col items-start gap-8 pb-52">
                                <p class="text-xl max-w-lg">
                                    Experience destinations in a new light...
                                </p>
                                <a href="/" class="button is-text">view experiences
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

<div id="lightboxModal" class="fixed inset-0 z-50 hidden bg-primary items-center justify-center">
    <div class="relative w-full h-full">

        <button id="closeLightboxBtn" class="absolute w-8 h-8 top-4 right-4 text-white text-2xl z-10">
            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 256 256">
                <path d="M205.66,194.34a8,8,0,0,1-11.32,11.32L128,139.31,61.66,205.66a8,8,0,0,1-11.32-11.32L116.69,128,50.34,61.66A8,8,0,0,1,61.66,50.34L128,116.69l66.34-66.35a8,8,0,0,1,11.32,11.32L139.31,128Z"></path>
            </svg>
        </button>

        <div class="swiper w-full h-full">
            <div class="swiper-wrapper">
                <?php foreach ($posts as $i => $post) : ?>
                    <?php
                    $slide_title      = get_the_title($post->ID);
                    $slide_image_url  = esc_url(get_the_post_thumbnail_url($post->ID, 'large'));
                    $slide_location   = get_post_meta($post->ID, '_experience_location', true);
                    $slide_content    = apply_filters('the_content', get_post_field('post_content', $post->ID));
                    ?>
                    <div class="swiper-slide relative w-full h-full">
                        <img src="<?php echo $slide_image_url; ?>" alt="<?php echo esc_attr($slide_title); ?>" class="w-full h-full object-contain">

                        <div class="absolute bottom-4 left-4 text-white space-y-2">
                            <h4 class="text-lg font-bold"><?php echo esc_html($slide_title); ?></h4>
                            <div class="text-base max-w-md">
                                <?php echo $slide_content;
                                ?>
                            </div>
                        </div>

                        <?php if ($slide_location): ?>
                            <div class="absolute bottom-4 right-4 text-white text-sm opacity-80">
                                <?php echo esc_html($slide_location); ?>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>
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
</div>