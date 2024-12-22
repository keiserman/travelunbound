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
        ?>

        <?php
        $button_link = get_theme_mod('experiences_button_link', '');
        $button_text = get_theme_mod('experiences_button_text', '');

        if (!empty($button_link) && !empty($button_text)) : ?>
            <a href="<?php echo esc_url($button_link); ?>" class="btn">
                <?php echo esc_html($button_text); ?>
            </a>
        <?php endif; ?>


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