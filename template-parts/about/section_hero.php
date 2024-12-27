<?php
$about_hero_video = esc_url(wp_get_attachment_url(get_theme_mod("about_hero_video")));
$about_hero_video_poster = esc_url(get_theme_mod("about_hero_video_poster"));
$about_hero_subtitle_main = esc_html(get_theme_mod("about_hero_subtitle_main"));
$about_hero_subtitle_span = esc_html(get_theme_mod("about_hero_subtitle_span"));
$about_hero_caption = esc_html(get_theme_mod("about_hero_caption"));
?>

<section>
    <video autoplay muted loop class="w-full h-[90vh] object-cover bg-black" poster="<?php echo $about_hero_video_poster; ?>">
        <source src="<?php echo $about_hero_video; ?>" type="video/mp4">
    </video>
    <div class="padding-global">
        <div class="flex flex-wrap justify-between gap-2 lg:gap-6 py-6">
            <div class="text-2xl"><span class="font-serif"><?php echo $about_hero_subtitle_main ?></span> <?php echo $about_hero_subtitle_span ?></div>
            <div class="text-base"><?php echo $about_hero_caption ?></div>
        </div>
    </div>
</section>