<section class="bg-white">
    <div class="m-auto max-w-3xl text-lg mb-4">Our approach</div>

    <?php
    $faq_query = new WP_Query(array(
        'post_type' => 'faq',
        'posts_per_page' => -1, // Show all FAQs
    ));

    if ($faq_query->have_posts()) {
        echo '<div class="faq-list grid">';
        while ($faq_query->have_posts()) {
            $faq_query->the_post();
            echo '<div data-faq="faq" class="border-b py-10 relative cursor-pointer overflow-hidden">';
            echo '<h3 data-faq="title" class="heading-h3 m-auto max-w-3xl z-10 relative">' . get_the_title() . '</h3>';
            echo '<div data-faq="content" class="m-auto max-w-3xl h-0 flex items-end z-10 opacity-0 relative">' . get_the_content() . '</div>';
            $thumbnail_url = get_the_post_thumbnail_url(get_the_ID(), 'large');
            if ($thumbnail_url) {
                echo '<img data-faq="image" class="w-full h-full object-cover absolute top-0 opacity-0" src="' . esc_url($thumbnail_url) . '" alt="' . esc_attr(get_the_title()) . '">';
            }
            echo '</div>';
        }
        echo '</div>';
    }
    wp_reset_postdata();
    ?>
</section>