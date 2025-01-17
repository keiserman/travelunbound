<?php
$about_mission_image = esc_url(get_theme_mod("about_mission_image"));
$about_mission_photo_credit = get_theme_mod("about_mission_photo_credit");
$about_mission_button_text = get_theme_mod("about_mission_button_text");
$about_mission_button_link = esc_url(get_permalink(get_theme_mod("about_mission_button_link")));
$about_mission_faq_title = get_theme_mod("about_mission_faq_title");
$about_mission_faq_text = get_theme_mod("about_mission_faq_text");
?>

<section data-animate="scroll-bg">
    <div class="padding-global py-6">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-5">
            <div class="lg:col-span-2 text-lg mb-24 md:mb-60">our mission</div>
            <h2 class="lg:col-span-2 text-[2rem] lg:text-[4.35rem] font-serif leading-none">Travel can enlighten, inspire, and heal, serving as a transformative force in our lives. Yet, in today's fast-paced world, this ideal often feels out of reach.</h2>

            <div class="lg:row-span-3 relative lg:order-none order-last">
                <img src="<?php echo $about_mission_image; ?>" alt="<?php echo $about_mission_photo_credit; ?>" class="aspect-[4/5] lg:h-full w-full object-cover">
                <div class="text-sm lg:vertical-text lg:absolute lg:bottom-0 lg:-right-6"><?php echo esc_html($about_mission_photo_credit); ?></div>
            </div>
            <div class="w-[93%] flex flex-col justify-start gap-2 lg:mb-8">
                <h2 class="-mt-5 font-sans text-[2rem] lg:text-[4.25rem] leading-none">Our mission is to help you rediscover the joys and meaning of travel, creating enriching experiences without the stress, uncertainty and friction that usually come with it.</h2>
            </div>
            <div class="flex gap-2 flex-col lg:pl-20 lg:pt-20 order-last lg:order-none">
                <?php if (!empty($about_mission_faq_title)): ?>
                    <div class="font-semibold text-xl"><?php echo esc_html($about_mission_faq_title); ?></div>
                <?php endif; ?>
                <?php if (!empty($about_mission_faq_text)): ?>
                    <p class="text-lg md:text-xl mb-6"><?php echo esc_html($about_mission_faq_text); ?></p>
                <?php endif; ?>
                <div class="mb-10">
                    <?php
                    $faq_query = new WP_Query([
                        "post_type" => "faq",
                        "posts_per_page" => 3,
                    ]);

                    if ($faq_query->have_posts()):
                        while ($faq_query->have_posts()):
                            $faq_query->the_post(); ?>
                            <div faq class="border-b border-white overflow-hidden">
                                <div faq-trigger class="text-xl py-4 flex gap-4 justify-between items-center cursor-pointer">
                                    <?php the_title(); ?>
                                    <div class="relative w-4 h-4 flex items-center">
                                        <div class="w-4 h-0.5 bg-white"></div>
                                        <div faq-icon-line class="absolute rotate-90 w-4 h-0.5 bg-white"></div>
                                    </div>
                                </div>
                                <div faq-content class="text-xl h-0 opacity-0">
                                    <div class="pb-8">
                                        <?php echo apply_filters(
                                            "the_content",
                                            get_the_content()
                                        ); ?>
                                    </div>
                                </div>
                            </div>
                    <?php
                        endwhile;
                    endif;

                    wp_reset_postdata();
                    ?>
                </div>
                <div class="flex">
                    <?php if (
                        !empty($about_mission_button_link) &&
                        !empty($about_mission_button_text)
                    ): ?>
                        <a href="<?php echo $about_mission_button_link; ?>" class="btn-outline-white">
                            <?php echo esc_html($about_mission_button_text); ?>
                        </a>
                    <?php endif; ?>
                </div>
            </div>

        </div>
    </div>
</section>