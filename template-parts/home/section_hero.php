<section class="bg-black text-white relative">
    <div class="padding-global h-[85vh] flex lg:flex-row flex-col gap-6 justify-end lg:items-end py-6 relative z-10">
        <h1 data-animate="fade" class="heading-h1">
            <?php echo esc_html(get_theme_mod('home_heading_main', 'Enriching experiences for the')); ?>
            <span class="font-sans">
                <?php echo esc_html(get_theme_mod('home_heading_span', 'modern traveller.')); ?>
            </span>
        </h1>
        <div class="flex gap-4 lg:justify-end shrink-0">
            <a href="/" class="btn-outline-white" data-button="button">Enquire
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="currentColor" viewBox="0 0 256 256" data-button="icon">
                    <path d="M221.66,133.66l-72,72a8,8,0,0,1-11.32-11.32L196.69,136H40a8,8,0,0,1,0-16H196.69L138.34,61.66a8,8,0,0,1,11.32-11.32l72,72A8,8,0,0,1,221.66,133.66Z"></path>
                </svg>
            </a>
            <a href="/" class="btn-white rounded-full">Learn more</a>
        </div>
    </div>
    <?php
    $hero_video_id = get_theme_mod('hero_video');
    $hero_video_url = $hero_video_id ? wp_get_attachment_url($hero_video_id) : '';
    $hero_image = get_theme_mod('hero_image');

    if ($hero_video_url) : ?>
        <video autoplay muted loop class="absolute w-full h-full z-0 top-0 object-cover">
            <source src="<?php echo esc_url($hero_video_url); ?>" type="video/mp4">
            <?php if ($hero_image) : ?>
                <img src="<?php echo esc_url($hero_image); ?>" alt="Fallback Hero Background">
            <?php endif; ?>
        </video>
    <?php elseif ($hero_image) : ?>
        <img src="<?php echo esc_url($hero_image); ?>" alt="Hero Background" class="absolute w-full h-full z-0 top-0 object-cover">
    <?php endif; ?>

</section>