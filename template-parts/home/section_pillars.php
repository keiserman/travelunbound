<section class="bg-white">
    <div class="padding-global border-b">
        <div class="m-auto max-w-3xl text-lg mb-4">Our approach</div>
    </div>

    <?php
    $query = new WP_Query([
        'post_type' => 'pillar',
        'posts_per_page' => -1,
    ]);

    if ($query->have_posts()) : ?>
        <div class="grid">
            <?php while ($query->have_posts()) : $query->the_post(); ?>
                <div data-pillar="pillar" class="padding-global border-b  py-6 md:py-12 relative cursor-pointer overflow-hidden">
                    <h3 data-pillar="title" class="text-3xl sm:text-4xl md:text-[3.375rem] leading-none font-serif m-auto max-w-3xl z-10 relative"><?php echo esc_html(get_the_title()); ?>/<span class="font-sans"><?php echo get_field("sans"); ?></span></h3>
                    <div data-pillar="content" class="m-auto max-w-3xl h-0 flex items-end z-10 opacity-0 relative"><?php echo get_field("content"); ?></div>
                    <?php if ($image_url = get_field('image')): ?>
                        <img data-faq="image" class="w-full h-full object-cover absolute top-0 left-0 opacity-0 pointer-events-none" src="<?php echo esc_url($image_url); ?>" alt="<?php esc_attr(get_the_title()); ?>">
                    <?php endif; ?>
                </div>
            <?php endwhile; ?>
        </div>
    <?php endif;

    wp_reset_postdata();
    ?>
</section>