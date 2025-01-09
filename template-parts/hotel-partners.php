<?php
$query = new WP_Query([
    'post_type' => 'hotel-partner',
    'posts_per_page' => -1,
]);

if ($query->have_posts()) : ?>

    <?php while ($query->have_posts()) : $query->the_post(); ?>
        <?php if ($image_url = get_field('logo')): ?>
            <img class="hotel-partner-image" src="<?php echo esc_url($image_url); ?>" alt="<?php esc_attr(get_the_title()); ?>">
        <?php endif; ?>
    <?php endwhile; ?>

<?php endif;

wp_reset_postdata();
?>