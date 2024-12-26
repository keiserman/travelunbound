<?php
$home_hero_heading_main = esc_html(get_theme_mod('home_hero_heading_main'));
$home_hero_heading_span = esc_html(get_theme_mod('home_hero_heading_span'));
$home_hero_video = wp_get_attachment_url(get_theme_mod('home_hero_video'));
$home_hero_video_poster = esc_url(get_theme_mod('home_hero_video_poster'));
?>

<section class="bg-black text-white relative">
    <div class="padding-global h-screen flex lg:justify-between lg:flex-row flex-col gap-6 justify-end lg:items-end py-6 relative z-10">
        <h1 data-animate="fade" class="heading-h1">
            <div><?php echo $home_hero_heading_main ?></div>
            <div class="font-sans"><?php echo $home_hero_heading_span ?></div>
        </h1>
        <div class="flex flex-wrap gap-4 lg:justify-end shrink-0">
            <a href="/" class="btn-outline-white sm:grow-0 grow" data-button="button">Enquire
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="currentColor" viewBox="0 0 256 256" data-button="icon">
                    <path d="M221.66,133.66l-72,72a8,8,0,0,1-11.32-11.32L196.69,136H40a8,8,0,0,1,0-16H196.69L138.34,61.66a8,8,0,0,1,11.32-11.32l72,72A8,8,0,0,1,221.66,133.66Z"></path>
                </svg>
            </a>
            <a href="/" class="btn-white rounded-full sm:grow-0 grow">Learn more</a>
        </div>
    </div>
    <video autoplay muted loop class="absolute w-full h-full z-0 top-0 object-cover" poster="<?php echo $home_hero_video_poster ?>">
        <source src="<?php echo $home_hero_video ?>" type="video/mp4">
    </video>
</section>