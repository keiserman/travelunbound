<section class="bg-black text-white relative">
    <div class="container h-screen flex md:flex-row flex-col gap-6 items-end py-6 relative z-10">
        <h1 data-animate="fade" class="heading-h1">
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
    $hero_video_id = get_theme_mod('hero_video'); // Get the attachment ID for the video
    $hero_video_url = $hero_video_id ? wp_get_attachment_url($hero_video_id) : ''; // Convert ID to URL
    $hero_image = get_theme_mod('hero_image'); // Get the fallback image URL

    if ($hero_video_url) : ?>
        <video autoplay muted loop class="absolute w-full h-full z-0 top-0 object-cover">
            <source src="<?php echo esc_url($hero_video_url); ?>" type="video/mp4">
            <!-- Fallback image for browsers that don't support videos -->
            <?php if ($hero_image) : ?>
                <img src="<?php echo esc_url($hero_image); ?>" alt="Fallback Hero Background">
            <?php endif; ?>
        </video>
    <?php elseif ($hero_image) : ?>
        <img src="<?php echo esc_url($hero_image); ?>" alt="Hero Background" class="absolute w-full h-full z-0 top-0 object-cover">
    <?php endif; ?>

</section>