<section class="bg-white">
    <div class="padding-global border-b">
        <div class="m-auto max-w-3xl text-lg mb-4">Our approach</div>
    </div>

    <?php
    $approach_query = new WP_Query(array(
        'post_type' => 'approach',
        'posts_per_page' => -1,
    ));

    if ($approach_query->have_posts()) {
        echo '<div class="grid">';
        while ($approach_query->have_posts()) {
            $approach_query->the_post();
            echo '<div data-faq="faq" class="padding-global border-b  py-6 md:py-12 relative cursor-pointer overflow-hidden">';
            echo '<h3 data-faq="title" class="text-3xl sm:text-4xl md:text-[3.375rem] leading-none font-serif m-auto max-w-3xl z-10 relative">' . get_the_title() . '</h3>';
            echo '<div data-faq="content" class="m-auto max-w-3xl h-0 flex items-end z-10 opacity-0 relative">' . get_the_content() . '</div>';
            $thumbnail_url = get_the_post_thumbnail_url(get_the_ID(), 'large');
            if ($thumbnail_url) {
                echo '<img data-faq="image" class="w-full h-full object-cover absolute top-0 left-0 opacity-0 pointer-events-none" src="' . esc_url($thumbnail_url) . '" alt="' . esc_attr(get_the_title()) . '">';
            }
            echo '</div>';
        }
        echo '</div>';
    }
    wp_reset_postdata();
    ?>
</section>