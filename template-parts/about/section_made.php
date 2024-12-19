<section data-animate="scroll-bg">
    <div class="padding-global py-6">
        <div class="grid gap-2">
            <div class="text-lg mb-24 md:mb-60">made for you</div>
            <h2 class="text-[2rem] lg:text-[5rem] font-serif leading-none">Travel can enlighten, inspire, and heal, serving as a powerful transformative force in our lives. Yet, in today's fast-paced world, this ideal often feels out of reach.</h2>
            <div class="grid lg:grid-cols-2 gap-4 items-stretch">
                <div class="relative lg:order-none order-last">
                    <img src="<?php echo esc_url(get_theme_mod('about_made_image')); ?>" alt="" class="aspect-[4/5] h-full w-full object-cover">
                    <div class="text-sm lg:vertical-text lg:absolute bottom-0 -right-6"><?php echo esc_html(get_theme_mod('about_made_photo_credit')); ?></div>
                </div>
                <div class="flex flex-col justify-between">
                    <div class="w-[93%] flex flex-col justify-start gap-2 mb-8">
                        <h2 class="text-[2rem] lg:text-[4.5rem] leading-none">our mission is to help you rediscover the joys and meaning of travel, creating enriching experiences without the stress, uncertainty and friction that usually come with it.</h2>
                    </div>
                    <div class="flex gap-2 flex-col lg:pl-20 lg:pt-20">
                        <div class="font-semibold text-xl">Frequently Asked Questions</div>
                        <p class="text-lg md:text-xl mb-6">it's only natural to have some questions before you book your trip. we've answered the most commonly asked ones below. this way, you can understand more about who we are, what we do and what we stand for through the entire travel experience.</p>

                        <div class="mb-10">
                            <?php get_template_part('template-parts/faqs'); ?>
                        </div>
                        <div class="flex"><a href="" class="btn-outline-white">View all</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>