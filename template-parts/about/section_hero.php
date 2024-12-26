<?php
$about_hero_video = esc_url(wp_get_attachment_url(get_theme_mod("about_hero_video")));
$about_hero_video_poster = esc_url(get_theme_mod("about_hero_video_poster"));
?>

<section>
    <video autoplay muted loop class="w-full h-[90vh] object-cover bg-black" poster="<?php echo $about_hero_video_poster; ?>">
        <source src="<?php echo $about_hero_video; ?>" type="video/mp4">
    </video>
    <div class="padding-global">
        <div class="flex flex-wrap justify-between gap-2 lg:gap-6 py-6">
            <div class="text-2xl"><span class="font-serif">enriching experiences for the</span> modern traveller.</div>
            <div class="text-base">Aman Le Melezin, French Alps</div>
        </div>
    </div>
</section>