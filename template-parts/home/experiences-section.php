<section>
    <div class="container padding-global py-40">
        <h2 class="heading-h2 m-auto max-w-4xl text-8xl mb-12">transformative<br><span class="font-sans">travel experiences</span></h2>
        <p class="m-auto max-w-4xl text-2xl mb-28">no matter where inspiration takes you, we will create a unique journey that immerses you in the genuine spirit of each destination.</p>


        <div class="grid grid-cols-2 justify-items-center items-center gap-x-40 gap-y-24">

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
            // Position 0 (First Post)
            if (!empty($posts[0])) {
                $post = $posts[0];
                setup_postdata($post);

                $location = get_post_meta($post->ID, '_experience_location', true);
            ?>
                <div data-animate="fade" class="experiences-card col-span-2">
                    <img class="w-full" src="<?php echo esc_url(get_the_post_thumbnail_url($post->ID, 'large')); ?>" alt="<?php echo esc_attr(get_the_title($post)); ?>">
                    <div class="flex justify-between">
                        <h4 class="heading-h4"><?php echo esc_html(get_the_title($post)); ?></h4>
                        <?php if (!empty($location)): ?>
                            <p class="text-sm"><?php echo esc_html($location); ?></p>
                        <?php endif; ?>
                    </div>
                </div>
            <?php
                wp_reset_postdata();
            }

            // Position 1 (Second Post)
            if (!empty($posts[1])) {
                $post = $posts[1];
                setup_postdata($post);

                $location = get_post_meta($post->ID, '_experience_location', true);
            ?>
                <div data-animate="fade" class="experiences-card col-span-1">
                    <img class="w-full" src="<?php echo esc_url(get_the_post_thumbnail_url($post->ID, 'large')); ?>" alt="<?php echo esc_attr(get_the_title($post)); ?>">
                    <div class="flex justify-between">
                        <h4 class="heading-h4"><?php echo esc_html(get_the_title($post)); ?></h4>
                        <?php if (!empty($location)): ?>
                            <p class="text-sm"><?php echo esc_html($location); ?></p>
                        <?php endif; ?>
                    </div>
                </div>
            <?php
                wp_reset_postdata();
            }

            // Position 2 (Third Post)
            if (!empty($posts[2])) {
                $post = $posts[2];
                setup_postdata($post);

                $location = get_post_meta($post->ID, '_experience_location', true);
            ?>
                <div data-animate="fade" class="experiences-card col-span-1">
                    <img class="w-full" src="<?php echo esc_url(get_the_post_thumbnail_url($post->ID, 'large')); ?>" alt="<?php echo esc_attr(get_the_title($post)); ?>">
                    <div class="flex justify-between">
                        <h4 class="heading-h4"><?php echo esc_html(get_the_title($post)); ?></h4>
                        <?php if (!empty($location)): ?>
                            <p class="text-sm"><?php echo esc_html($location); ?></p>
                        <?php endif; ?>
                    </div>
                </div>
            <?php
                wp_reset_postdata();
            }

            // Custom HTML or elements between posts
            ?>
            <div class="text-xl col-span-2 max-w-3xl py-44">
                <p>our in-the-know global network provides invaluable on-the-ground knowledge, insider insight, and exclusive access, connecting you to the local culture authentically and meaningfully.</p>
            </div>
            <?php

            // Position 3 (Fourth Post)
            if (!empty($posts[3])) {
                $post = $posts[3];
                setup_postdata($post);

                $location = get_post_meta($post->ID, '_experience_location', true);
            ?>
                <div data-animate="fade" class="experiences-card col-span-2">
                    <img class="w-full" src="<?php echo esc_url(get_the_post_thumbnail_url($post->ID, 'large')); ?>" alt="<?php echo esc_attr(get_the_title($post)); ?>">
                    <div class="flex justify-between">
                        <h4 class="heading-h4"><?php echo esc_html(get_the_title($post)); ?></h4>
                        <?php if (!empty($location)): ?>
                            <p class="text-sm"><?php echo esc_html($location); ?></p>
                        <?php endif; ?>
                    </div>
                </div>
            <?php
                wp_reset_postdata();
            }
            ?>

            <div class="text-xl col-span-1">
                <p>We give you the inside track on the hottest openings, latest happenings and the under-the-radar hidden gems from around the globe.</p>
            </div>

        </div>

    </div>
</section>