<?php
$home_journey_image = esc_url(get_theme_mod('home_journey_image'));
$home_journey_photo_credit = esc_html(get_theme_mod('home_journey_photo_credit'));
$home_journey_button_text = get_theme_mod("home_journey_button_text");
$home_journey_button_link = esc_url(get_permalink(get_theme_mod("home_journey_button_link")));
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
            <div class="flex justify-end gap-2 flex-col lg:pl-20 lg:pt-20 order-last lg:order-none">
                <p class="text-lg md:text-xl font-medium">Crafted for the modern traveller</p>
                <p class="text-lg md:text-xl">we understand the hectic nature of modern life where multitasking is almost second mature; constant demands on our time and attention, the relentless struggle for work/life balance, competing priorities and an ever-growing to-do list. we save you time and work to your pace.</p>
            </div>

        </div>
    </div>
</section>