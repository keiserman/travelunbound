<section class="bg-lightgray overflow-hidden">
    <div class="padding-global py-6">

        <div class="text-xl mb-32">our preferred hotel partners</div>
        <div data-marquee="marquee" class="flex mb-32">
            <div data-marquee="wrapper" class="flex grow-0 shrink-0">
                <?php
                $team_query = new WP_Query([
                    'post_type' => 'hotel-partner',
                    'posts_per_page' => -1,
                ]);

                if ($team_query->have_posts()) : ?>
                    <?php while ($team_query->have_posts()) : $team_query->the_post();
                        $thumbnail_url = get_the_post_thumbnail_url(get_the_ID(), 'large'); ?>
                        <?php if ($thumbnail_url) : ?>
                            <img class="aspect-video object-contain w-[20vw] mr-12" src="<?= esc_url($thumbnail_url); ?>" alt="<?= esc_attr(get_the_title()); ?>">
                        <?php endif; ?>
                    <?php endwhile; ?>
                <?php endif;

                wp_reset_postdata();
                ?>
            </div>
            <div data-marquee="wrapper" class="flex grow-0 shrink-0">
                <?php
                if ($team_query->have_posts()) : ?>
                    <?php while ($team_query->have_posts()) : $team_query->the_post();
                        $thumbnail_url = get_the_post_thumbnail_url(get_the_ID(), 'large'); ?>
                        <?php if ($thumbnail_url) : ?>
                            <img class="aspect-video object-contain w-[20vw] mr-12" src="<?= esc_url($thumbnail_url); ?>" alt="<?= esc_attr(get_the_title()); ?>">
                        <?php endif; ?>
                    <?php endwhile; ?>
                <?php endif;

                wp_reset_postdata();
                ?>
            </div>
        </div>
        <div class="flex justify-end w-full mb-44">
            <div class="flex flex-col gap-2 max-w-lg">
                <div class="text-lg md:text-2xl font-bold lowercase">The Worlds Best Hotels</div>
                <p class="text-lg md:text-2xl">elite partnerships with the world's leading luxury hotels groups provide privileged access to a wide range deals and experiences, exclusive benefits and vip status.</p>
            </div>
        </div>

    </div>
</section>