<?php
$team_query = new WP_Query([
    'post_type' => 'travel-partner',
    'posts_per_page' => 3,
]);

if ($team_query->have_posts()) : ?>
    <?php while ($team_query->have_posts()) : $team_query->the_post(); ?>
        <?php if ($image_url = get_field('logo')): ?>
            <img class="w-full" src="<?php echo esc_url($image_url); ?>" alt="<?php esc_attr(get_the_title()); ?>">
        <?php endif; ?>
    <?php endwhile; ?>
<?php endif;

wp_reset_postdata();
?>