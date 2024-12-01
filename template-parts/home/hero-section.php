<section class="bg-black text-white relative">
    <div class="container h-screen flex md:flex-row flex-col gap-6 items-end py-6 relative z-10">
        <h1 data-animate="fade">
            <?php echo esc_html(get_theme_mod('home_heading_main', 'Enriching experiences for the')); ?>
            <span class="font-sans">
                <?php echo esc_html(get_theme_mod('home_heading_span', 'modern traveller.')); ?>
            </span>
        </h1>
        <div class="flex gap-4 justify-end shrink-0">
            <a href="/" class="button ghost">Enquire</a>
            <a href="/" class="button">Learn more</a>
        </div>
    </div>
    <?php
    $hero_image = get_theme_mod('hero_image');
    if ($hero_image) : ?>
        <img src="<?php echo esc_url($hero_image); ?>" alt="Hero Background" class="absolute w-full h-full z-0 top-0 object-cover">
    <?php endif; ?>
</section>