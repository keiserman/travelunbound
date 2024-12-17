<section>
    <div class="padding-global py-6">
        <div class="m-auto max-w-screen-2xl grid gap-2">
            <div class="text-lg mb-60">made for you</div>
            <h2 class="font-serif text-[40px] md:text-[49px] lg:text-[54px] xl:text-[55px] 2xl:text-[65px] leading-none">With its ability to enlighten, inspire, and heal, travel can be a powerful transformative force in our lives; however, this ideal proves increasingly elusive in today's fast-paced world. Our mission is simple: to enable you to rediscover the joys and meaning of travel. We navigate</h2>
            <div class="grid lg:grid-cols-2 gap-4 items-stretch">
                <div class="relative md:order-none order-last">
                    <img src="<?php echo esc_url(get_theme_mod('about_made_image')); ?>" alt="" class="aspect-[4/5] h-full object-cover">
                    <div class="text-sm lg:vertical-text lg:absolute bottom-0 -right-6"><?php echo esc_html(get_theme_mod('about_made_photo_credit')); ?></div>
                </div>
                <div class="flex flex-col justify-between">
                    <div class="flex flex-col justify-start gap-2">
                        <h2 class="text-[38px] md:text-[49px] lg:text-[51px] xl:text-[54px] 2xl:text-[63px] leading-none">the fast-changing landscape, cut through the noise and remove stress, uncertainty, and friction from the entire process.</h2>
                    </div>
                    <div class="flex gap-2 flex-col lg:pl-20">
                        <div class="font-semibold">Frequently Asked Questions</div>
                        <p class="text-base mb-6">it's only natural to have some questions before you book your trip. we've answered the most commonly asked ones below. this way, you can understand more about who we are, what we do and what we stand for through the entire travel experience.</p>

                        <div class="mb-10">
                            <?php
                            $faq_query = new WP_Query(array(
                                'post_type' => 'faq',
                                'posts_per_page' => -1,
                            ));

                            if ($faq_query->have_posts()) :
                                while ($faq_query->have_posts()) :
                                    $faq_query->the_post();
                            ?>
                                    <div faq class="border-b border-primary overflow-hidden">
                                        <div faq-trigger class="text-xl py-2 flex gap-4 justify-between items-center cursor-pointer">
                                            <?php the_title(); ?>
                                            <div class="relative w-4 h-4 flex items-center">
                                                <div class="w-4 h-0.5 bg-primary"></div>
                                                <div faq-icon-line class="absolute rotate-90 w-4 h-0.5 bg-primary"></div>
                                            </div>
                                        </div>
                                        <div faq-content class="text-xl h-0 opacity-0">
                                            <p class="pb-4"><?php echo wp_strip_all_tags(get_the_content()); ?></p>
                                        </div>
                                    </div>
                            <?php
                                endwhile;
                            endif;

                            wp_reset_postdata();
                            ?>
                        </div>
                        <div class="flex"><a href="" class="btn-outline">View all</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>