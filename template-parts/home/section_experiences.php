<section>
    <div class="container padding-global py-40">
        <h2 class="heading-h2 m-auto max-w-4xl text-8xl mb-12">transformative<br><span class="font-sans">travel experiences</span></h2>
        <p class="m-auto max-w-4xl text-2xl mb-28">no matter where inspiration takes you, we will create a unique journey that immerses you in the genuine spirit of each destination.</p>


        <div class="md:grid flex flex-col grid-cols-2 justify-items-center items-center lg:gap-40 gap-24">

            <?php
            $experience_query = new WP_Query(array(
                'post_type' => 'experiences',
                'orderby' => 'date',
                'order' => 'ASC',
                'posts_per_page' => -1,
            ));

            $posts = $experience_query->posts;
            wp_reset_postdata();
            ?>

            <?php
            if (!empty($posts[0])) {
                $post = $posts[0];
                setup_postdata($post);

                $location = get_post_meta($post->ID, '_experience_location', true);
            ?>
                <div data-animate="fade" class="col-span-2">
                    <div class="experiences-card">
                        <a class="overflow-hidden" href="<?php echo esc_url(get_the_post_thumbnail_url($post->ID, 'large')); ?>"
                            data-glightbox="title: <?php echo esc_html(get_the_title($post)); ?>; description: this is the slide description">
                            <img class="w-full" src="<?php echo esc_url(get_the_post_thumbnail_url($post->ID, 'large')); ?>"
                                alt="<?php echo esc_attr(get_the_title($post)); ?>">
                        </a>
                        <div class="flex justify-between">
                            <h4 class="heading-h4">√√</h4>
                            <?php if (!empty($location)): ?>
                                <p class="text-sm"><?php echo esc_html($location); ?></p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>

            <?php
                wp_reset_postdata();
            }

            if (!empty($posts[1])) {
                $post = $posts[1];
                setup_postdata($post);

                $location = get_post_meta($post->ID, '_experience_location', true);
            ?>
                <div data-animate="fade" class="col-span-1">
                    <div class="experiences-card">
                        <a class="overflow-hidden" href="<?php echo esc_url(get_the_post_thumbnail_url($post->ID, 'large')); ?>"
                            data-glightbox="title: <?php echo esc_html(get_the_title($post)); ?>; description: this is the slide description">
                            <img class="w-full" src="<?php echo esc_url(get_the_post_thumbnail_url($post->ID, 'large')); ?>"
                                alt="<?php echo esc_attr(get_the_title($post)); ?>">
                        </a>
                        <div class="flex justify-between">
                            <h4 class="heading-h4"><?php echo esc_html(get_the_title($post)); ?></h4>
                            <?php if (!empty($location)): ?>
                                <p class="text-sm"><?php echo esc_html($location); ?></p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            <?php
                wp_reset_postdata();
            }

            if (!empty($posts[2])) {
                $post = $posts[2];
                setup_postdata($post);

                $location = get_post_meta($post->ID, '_experience_location', true);
            ?>
                <div data-animate="fade" class="col-span-1">
                    <div class="experiences-card">
                        <a class="overflow-hidden" href="<?php echo esc_url(get_the_post_thumbnail_url($post->ID, 'large')); ?>"
                            data-glightbox="title: <?php echo esc_html(get_the_title($post)); ?>; description: this is the slide description">
                            <img class="w-full" src="<?php echo esc_url(get_the_post_thumbnail_url($post->ID, 'large')); ?>"
                                alt="<?php echo esc_attr(get_the_title($post)); ?>">
                        </a>
                        <div class="flex justify-between">
                            <h4 class="heading-h4"><?php echo esc_html(get_the_title($post)); ?></h4>
                            <?php if (!empty($location)): ?>
                                <p class="text-sm"><?php echo esc_html($location); ?></p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            <?php
                wp_reset_postdata();
            }

            ?>
            <div class="text-xl col-span-2 max-w-3xl py-32">
                <p>our in-the-know global network provides invaluable on-the-ground knowledge, insider insight, and exclusive access, connecting you to the local culture authentically and meaningfully.</p>
            </div>
            <?php

            if (!empty($posts[3])) {
                $post = $posts[3];
                setup_postdata($post);

                $location = get_post_meta($post->ID, '_experience_location', true);
            ?>
                <div data-animate="fade" class="col-span-2">
                    <div class="experiences-card">
                        <a class="overflow-hidden" href="<?php echo esc_url(get_the_post_thumbnail_url($post->ID, 'large')); ?>"
                            data-glightbox="title: <?php echo esc_html(get_the_title($post)); ?>; description: this is the slide description">
                            <img class="w-full" src="<?php echo esc_url(get_the_post_thumbnail_url($post->ID, 'large')); ?>"
                                alt="<?php echo esc_attr(get_the_title($post)); ?>">
                        </a>
                        <div class="flex justify-between">
                            <h4 class="heading-h4"><?php echo esc_html(get_the_title($post)); ?></h4>
                            <?php if (!empty($location)): ?>
                                <p class="text-sm"><?php echo esc_html($location); ?></p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            <?php
                wp_reset_postdata();
            }

            if (!empty($posts[4])) {
                $post = $posts[4];
                setup_postdata($post);

                $location = get_post_meta($post->ID, '_experience_location', true);
            ?>
                <div class="flex flex-col items-end col-span-1">
                    <p class="text-xl pb-52 max-w-md">We give you the inside track on the hottest openings, latest happenings and the under-the-radar hidden gems from around the globe.</p>
                    <div data-animate="fade" class="experiences-card">
                        <a class="overflow-hidden" href="<?php echo esc_url(get_the_post_thumbnail_url($post->ID, 'large')); ?>"
                            data-glightbox="title: <?php echo esc_html(get_the_title($post)); ?>; description: this is the slide description">
                            <img class="w-full" src="<?php echo esc_url(get_the_post_thumbnail_url($post->ID, 'large')); ?>"
                                alt="<?php echo esc_attr(get_the_title($post)); ?>">
                        </a>
                        <div class="flex justify-between">
                            <h4 class="heading-h4"><?php echo esc_html(get_the_title($post)); ?></h4>
                            <?php if (!empty($location)): ?>
                                <p class="text-sm"><?php echo esc_html($location); ?></p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            <?php
                wp_reset_postdata();
            }

            if (!empty($posts[5])) {
                $post = $posts[5];
                setup_postdata($post);

                $location = get_post_meta($post->ID, '_experience_location', true);
            ?>
                <div data-animate="fade" class="col-span-1">
                    <div class="experiences-card">
                        <a class="overflow-hidden" href="<?php echo esc_url(get_the_post_thumbnail_url($post->ID, 'large')); ?>"
                            data-glightbox="title: <?php echo esc_html(get_the_title($post)); ?>; description: this is the slide description">
                            <img class="w-full" src="<?php echo esc_url(get_the_post_thumbnail_url($post->ID, 'large')); ?>"
                                alt="<?php echo esc_attr(get_the_title($post)); ?>">
                        </a>
                        <div class="flex justify-between">
                            <h4 class="heading-h4"><?php echo esc_html(get_the_title($post)); ?></h4>
                            <?php if (!empty($location)): ?>
                                <p class="text-sm"><?php echo esc_html($location); ?></p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>

            <?php
                wp_reset_postdata();
            }

            if (!empty($posts[6])) {
                $post = $posts[6];
                setup_postdata($post);

                $location = get_post_meta($post->ID, '_experience_location', true);
            ?>
                <div class="flex flex-col items-end col-span-1">
                    <div class="flex flex-col items-start gap-8 pb-52">
                        <p class="text-xl max-w-lg">Experience destinations in a new light as we take you far from the tourist traps and show you the buzziest neighbourhoods, top tables, and best shops.</p>
                        <a href="/" class="button is-text">view experiences
                            <svg class="w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 54.5 36.8">
                                <path fill="currentColor" d="M53.8 16.6 37.9.7c-1-1-2.6-1-3.5 0-1 1-1 2.6 0 3.5L46 15.8H0v5h46L34.4 32.4c-1 1-1 2.6 0 3.5 1 1 2.6 1 3.5 0L53.8 20c1-1 1-2.6 0-3.5Z" />
                            </svg>
                        </a>
                    </div>

                    <div data-animate="fade" class="experiences-card">
                        <a class="overflow-hidden" href="<?php echo esc_url(get_the_post_thumbnail_url($post->ID, 'large')); ?>"
                            data-glightbox="title: <?php echo esc_html(get_the_title($post)); ?>; description: this is the slide description">
                            <img class="w-full" src="<?php echo esc_url(get_the_post_thumbnail_url($post->ID, 'large')); ?>"
                                alt="<?php echo esc_attr(get_the_title($post)); ?>">
                        </a>
                        <div class="flex justify-between">
                            <h4 class="heading-h4"><?php echo esc_html(get_the_title($post)); ?></h4>
                            <?php if (!empty($location)): ?>
                                <p class="text-sm"><?php echo esc_html($location); ?></p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            <?php
                wp_reset_postdata();
            }

            if (!empty($posts[7])) {
                $post = $posts[7];
                setup_postdata($post);

                $location = get_post_meta($post->ID, '_experience_location', true);
            ?>
                <div class="col-span-1">
                    <div data-animate="fade" class="experiences-card">
                        <a class="overflow-hidden" href="<?php echo esc_url(get_the_post_thumbnail_url($post->ID, 'large')); ?>"
                            data-glightbox="title: <?php echo esc_html(get_the_title($post)); ?>; description: this is the slide description">
                            <img class="w-full" src="<?php echo esc_url(get_the_post_thumbnail_url($post->ID, 'large')); ?>"
                                alt="<?php echo esc_attr(get_the_title($post)); ?>">
                        </a>
                        <div class="flex justify-between">
                            <h4 class="heading-h4"><?php echo esc_html(get_the_title($post)); ?></h4>
                            <?php if (!empty($location)): ?>
                                <p class="text-sm"><?php echo esc_html($location); ?></p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            <?php
                wp_reset_postdata();
            }

            ?>

        </div>

    </div>
</section>