<?php
$home_journey_image = esc_url(get_theme_mod('home_journey_image'));
$home_journey_photo_credit = esc_html(get_theme_mod('home_journey_photo_credit'));
$home_journey_button_text = get_theme_mod("home_journey_button_text");
$home_journey_button_link = esc_url(get_permalink(get_theme_mod("home_journey_button_link")));
$home_journey_heading = get_theme_mod("home_journey_heading");
$home_journey_paragraph = get_theme_mod("home_journey_paragraph");
?>

<section data-animate="scroll-bg">
    <div class="padding-global py-6">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-5">
            <h2 class="lg:col-span-2 text-3xl sm:text-[3.06rem] md:text-[4.4rem] font-serif leading-none">in today's connected world, the endless online chatter and constant state of flux can make planning your holiday feel overwhelming.</h2>
            <div class="lg:row-span-3 relative lg:order-none order-last">
                <img src="<?php echo $home_journey_image ?>" alt="<?php echo $home_journey_photo_credit ?>" class="aspect-[4/5] lg:h-full w-full object-cover">
                <div class="text-sm lg:vertical-text lg:absolute lg:bottom-0 lg:-right-6"><?php echo $home_journey_photo_credit ?></div>
            </div>
            <h2 class="-mt-5 font-sans text-3xl sm:text-[3.06rem] md:text-[4.25rem] leading-none">we navigate the fast-changing landscape, cut through the chaos and remove stress and uncertainty from the process, so you can fully immerse yourself in the joy and excitement of your travel experience.</h2>
            <?php if (
                !empty($home_journey_button_link) &&
                !empty($home_journey_button_text)
            ): ?>
                <div class="flex">
                    <a href="<?php echo $home_journey_button_link; ?>" class="btn-outline-white hover:text-secondary self-start">
                        <?php echo esc_html($home_journey_button_text); ?>
                    </a>
                </div>
            <?php endif; ?>
            <?php if (
                !empty($home_journey_heading) &&
                !empty($home_journey_paragraph)
            ): ?>
                <div class="flex justify-end gap-2 flex-col lg:pl-20 lg:pt-20 order-last lg:order-none">
                    <p class="text-lg md:text-xl font-medium"><?php echo esc_html($home_journey_heading); ?></p>
                    <p class="text-lg md:text-xl"><?php echo esc_html($home_journey_paragraph); ?></p>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>