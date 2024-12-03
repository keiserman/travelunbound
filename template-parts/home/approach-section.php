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
            echo '<div class="faq-item">';
            echo '<h3 class="heading-h3 faq-title">' . get_the_title() . '</h3>';
            echo '<div class="faq-content">' . get_the_content() . '</div>';
            $thumbnail_url = get_the_post_thumbnail_url(get_the_ID(), 'large');
            if ($thumbnail_url) {
                echo '<img class="faq-image hidden" src="' . esc_url($thumbnail_url) . '" alt="' . esc_attr(get_the_title()) . '">';
            }
            echo '</div>';
        }
        echo '</div>';
    }
    wp_reset_postdata();
    ?>
</section>