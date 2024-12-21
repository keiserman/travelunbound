<?php
$team_query = new WP_Query([
    'post_type' => 'founder',
    'posts_per_page' => -1,
]);

if ($team_query->have_posts()) : ?>

    <div class="grid md:grid-cols-2 gap-24">
        <?php while ($team_query->have_posts()) : $team_query->the_post(); ?>
            <div class="flex flex-col items-start">
                <?php
                $image = get_field('image');
                if (!empty($image)): ?>
                    <img class="aspect-[4/5] object-cover grayscale mb-2" src="<?php echo esc_url($image['url']); ?>" alt="<?php esc_attr(get_the_title()); ?>" />
                <?php endif; ?>
                <div class="flex justify-between gap-6 w-full mb-9">
                    <h3 class="heading-h3 pl-6">
                        <?php echo esc_html(get_the_title()); ?>
                        <span class="font-sans"><?php echo get_field("last_name"); ?></span>
                    </h3>
                    <div class="text-base">co/founder</div>
                </div>
                <div data-bio="wrapper" class="w-full">
                    <p data-bio="intro" class="text-lg md:text-xl mb-4">
                        <?php echo get_field("intro"); ?>
                    </p>
                    <p data-bio="bio" class="text-lg md:text-xl mb-4 hidden">
                        <?php echo get_field("bio"); ?>
                    </p>
                    <button data-bio="button" class="text-secondary text-lg md:text-xl">read more</button>
                </div>
            </div>
        <?php endwhile; ?>
    </div>


<?php endif;

wp_reset_postdata();
?>