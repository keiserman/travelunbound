<?php
$home_hero_heading_main = esc_html(get_theme_mod('home_hero_heading_main'));
$home_hero_heading_span = esc_html(get_theme_mod('home_hero_heading_span'));
$home_hero_subheading_main = esc_html(get_theme_mod('home_hero_subheading_main'));
$home_hero_subheading_span = esc_html(get_theme_mod('home_hero_subheading_span'));
$home_hero_video = wp_get_attachment_url(get_theme_mod('home_hero_video'));
$home_hero_video_poster = esc_url(get_theme_mod('home_hero_video_poster'));
$home_hero_button_text = get_theme_mod("home_hero_button_text");
$home_hero_button_link = esc_url(get_permalink(get_theme_mod("home_hero_button_link")));
$home_hero_button2_text = get_theme_mod("home_hero_button2_text");
$home_hero_button2_link = esc_url(get_permalink(get_theme_mod("home_hero_button2_link")));
?>

<section>
    <div class="padding-global h-screen bg-black text-white flex lg:justify-between lg:flex-row flex-col gap-6 justify-end lg:items-end py-6 relative z-10">
        <h1 data-animate="fade" class="heading-h1 z-20">
            <div><?php echo $home_hero_heading_main ?></div>
            <div class="font-sans"><?php echo $home_hero_heading_span ?></div>
        </h1>
        <div class="flex flex-wrap gap-4 lg:justify-end shrink-0 z-20">
            <?php if (
                !empty($home_hero_button_link) &&
                !empty($home_hero_button_text)
            ): ?>
                <a href="<?php echo $home_hero_button_link; ?>" class="btn-outline-white sm:grow-0 grow" data-button="button">
                    <?php echo esc_html($home_hero_button_text); ?>
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="currentColor" viewBox="0 0 256 256" data-button="icon">
                        <path d="M221.66,133.66l-72,72a8,8,0,0,1-11.32-11.32L196.69,136H40a8,8,0,0,1,0-16H196.69L138.34,61.66a8,8,0,0,1,11.32-11.32l72,72A8,8,0,0,1,221.66,133.66Z"></path>
                    </svg>
                </a>
            <?php endif; ?>
            <?php if (
                !empty($home_hero_button2_link) &&
                !empty($home_hero_button2_text)
            ): ?>
                <a href="<?php echo $home_hero_button2_link; ?>" class="btn-white rounded-full sm:grow-0 grow">
                    <?php echo esc_html($home_hero_button2_text); ?>
                </a>
            <?php endif; ?>
        </div>

        <video autoplay muted loop playsinline class="absolute w-full h-full z-0 top-0 left-0 object-cover" poster="<?php echo $home_hero_video_poster ?>">
            <source src="<?php echo $home_hero_video ?>" type="video/mp4">
        </video>
    </div>
    <div class="padding-global py-6">
        <div class="text-lg md:text-2xl max-w-2xl">
            <span class="font-serif"><?php echo $home_hero_subheading_main ?><br></span> <?php echo $home_hero_subheading_span ?>
        </div>
    </div>
</section>