<section class="bg-lightgray">
    <div class="padding-global py-24">
        <div class="container-small grid gap-6 mb-24">
            <h2 class="heading-h1">our founders</h2>
            <p class="text-lg md:text-2xl">combining deep & broad industry expertise, a creative & personal approach, meticulous attention to detail, and a passion for discovery to create enriching & memorable experiences for the modern traveller.</p>
        </div>
        <div class="container grid md:grid-cols-2 gap-24">

            <?php
            $team_query = new WP_Query([
                'post_type' => 'team-members',
                'orderby' => 'date',
                'order' => 'ASC',
                'posts_per_page' => -1,
            ]);

            if ($team_query->have_posts()) : ?>

                <?php while ($team_query->have_posts()) : $team_query->the_post();
                    $thumbnail_url = get_the_post_thumbnail_url(get_the_ID(), 'large'); ?>
                    <div class="flex flex-col items-start">
                        <?php if ($thumbnail_url) : ?>
                            <img
                                class="aspect-[4/5] object-cover grayscale mb-2"
                                src="<?= esc_url($thumbnail_url); ?>"
                                alt="<?= esc_attr(get_the_title()); ?>">
                        <?php endif; ?>
                        <div class="flex justify-between gap-6 w-full mb-9">
                            <h3 class="heading-h3"><?= esc_html(get_the_title()); ?></h3>
                            <div class="text-base">co/founder</div>
                        </div>
                        <div data-bio="bio" class="w-full">
                            <p data-bio="text" class="text-ellipsis overflow-hidden whitespace-normal text-lg md:text-xl mb-4 line-clamp-2">
                                <?= esc_html(get_the_content()); ?>
                            </p>
                            <button data-bio="button" class="text-secondary text-lg md:text-xl">read more</button>
                        </div>
                    </div>

                <?php endwhile; ?>

            <?php endif;

            wp_reset_postdata();
            ?>

        </div>
    </div>
</section>