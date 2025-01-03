<?php
$contact_hero_video = esc_url(wp_get_attachment_url(get_theme_mod("contact_hero_video")));
$contact_hero_video_poster = esc_url(get_theme_mod("contact_hero_video_poster"));
$contact_hero_heading_main = esc_html(get_theme_mod("contact_hero_heading_main"));
$contact_hero_heading_span = esc_html(get_theme_mod("contact_hero_heading_span"));
$contact_hero_subtitle_main = esc_html(get_theme_mod("contact_hero_subtitle_main"));
$contact_hero_subtitle_span = esc_html(get_theme_mod("contact_hero_subtitle_span"));
$contact_hero_caption = esc_html(get_theme_mod("contact_hero_caption"));
?>

<section>
    <div class="flex relative h-[90vh] items-center justify-center text-center text-white">
        <div class="padding-global">
            <h1 class="heading-h1 relative z-10"><?php echo $contact_hero_heading_main ?> <span class="font-sans"><?php echo $contact_hero_heading_span ?></span></h1>
        </div>
        <video class="absolute w-full h-full object-cover bg-black" poster="<?php echo $contact_hero_video_poster; ?>" autoplay playsinline muted loop>
            <source src="<?php echo $contact_hero_video; ?>" type="video/mp4">
        </video>
    </div>
    <div class="padding-global">
        <div class="flex justify-between gap-6 py-6">
            <div class="text-2xl"><span class="font-serif"><?php echo $contact_hero_subtitle_main ?></span> <?php echo $contact_hero_subtitle_span ?></div>
            <div class="text-base"><?php echo $contact_hero_caption ?></div>
        </div>
    </div>
    </div>
</section>