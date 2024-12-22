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

        <div class="md:grid flex flex-col grid-cols-2 justify-items-center gap-12 lg:gap-40 md:gap-24">
            <?php foreach ($posts as $index => $post): ?>
                <?php setup_postdata($post); ?>

                <?php if ($index === 0): ?>
                    <div class="col-span-2">
                        <?php render_experience_card($post->ID, $index); ?>
                    </div>
                <?php elseif ($index === 1): ?>
                    <div class="col-span-1 w-4/5 md:w-11/12 place-self-end md:place-self-start">
                        <?php render_experience_card($post->ID, $index); ?>
                    </div>
                <?php elseif ($index === 2): ?>
                    <div class="col-span-1 w-4/5 md:w-full">
                        <?php render_experience_card($post->ID, $index); ?>
                    </div>
                    <?php if ($index === 2 && count($posts) > 3): ?>
                        <div class="text-lg md:text-xl col-span-2 max-w-3xl py-10 md:py-18">
                            <p>Our in-the-know global network provides invaluable on-the-ground knowledge, insider insight, and exclusive access, connecting you to the local culture authentically and meaningfully.</p>
                        </div>
                    <?php endif; ?>
                <?php elseif ($index === 3): ?>
                    <div class="col-span-2">
                        <?php render_experience_card($post->ID, $index); ?>
                    </div>
                <?php elseif ($index === 4): ?>
                    <div class="flex flex-col justify-between col-span-1 self-stretch">
                        <p class="text-lg md:text-xl pb-20 md:pb-52 max-w-md">
                            We give you the inside track on the hottest openings, latest happenings, and the under-the-radar hidden gems from around the globe.
                        </p>
                        <?php render_experience_card($post->ID, $index); ?>
                    </div>
                <?php elseif ($index === 5): ?>
                    <div class="col-span-1 w-4/5 md:w-full">
                        <?php render_experience_card($post->ID, $index); ?>
                    </div>
                <?php elseif ($index === 6): ?>
                    <div class="flex flex-col items-end col-span-1">
                        <div class="flex flex-col items-start gap-4 md:gap-8 pb-16 md:pb-52">
                            <p class="text-lg md:text-xl max-w-lg">
                                Experience destinations in a new light as we take you far from the tourist traps and show you the buzziest neighborhoods, top tables, and best shops.
                            </p>

                            <?php
                            $button_link = get_theme_mod('experiences_button_link', '');
                            $button_text = get_theme_mod('experiences_button_text', '');

                            if (!empty($button_link) && !empty($button_text)) : ?>
                                <a href="<?php echo esc_url($button_link); ?>" class="btn is-text">
                                    <?php echo esc_html($button_text); ?>
                                    <svg class="w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 54.5 36.8">
                                        <path fill="currentColor" d="M53.8 16.6 37.9.7c-1-1-2.6-1-3.5 0-1 1-1 2.6 0 3.5L46 15.8H0v5h46L34.4 32.4c-1 1-1 2.6 0 3.5 1 1 2.6 1 3.5 0L53.8 20c1-1 1-2.6 0-3.5Z" />
                                    </svg>
                                </a>
                            <?php endif; ?>
                        </div>
                        <div class="w-4/5 md:w-full">
                            <?php render_experience_card($post->ID, $index); ?>
                        </div>
                    </div>
                <?php elseif ($index === 7): ?>
                    <div class="col-span-1 w-4/5 md:w-full">
                        <?php render_experience_card($post->ID, $index); ?>
                    </div>
                <?php endif; ?>
            <?php endforeach; ?>

            <?php wp_reset_postdata(); ?>
        </div>


    </div>
</section>