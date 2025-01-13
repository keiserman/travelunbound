<?php
$home_about_video = esc_url(wp_get_attachment_url(get_theme_mod('home_about_video')));
$home_about_video_poster = esc_url(get_theme_mod('home_about_video_poster'));
$home_about_image = esc_url(get_theme_mod('home_about_image'));
$home_about_subheading = esc_html(get_theme_mod('home_about_subheading'));
$home_about_paragraph = get_theme_mod('home_about_paragraph');
$home_about_paragraph2 = get_theme_mod('home_about_paragraph2');
$home_about_caption = get_theme_mod('home_about_caption');
$home_about_location = get_theme_mod('home_about_location');
?>

<section class="bg-white">
    <div class="padding-global py-6">
        <h2 class="heading-h1 m-auto max-w-3xl mt-44 mb-12">introducing<br> travel/<span class="font-sans">unbound</span>
        </h2>

        <div class="max-w-6xl m-auto mb-20">
            <div class="grid grid-cols-2 h-[50vw]">
                <div class="relative h-full clip-path-about-video -mr-[20%]">
                    <video autoplay muted loop playsinline class="h-full w-full top-0 absolute object-cover" poster="<?php echo $home_about_video_poster ?>">
                        <source src="<?php echo $home_about_video ?>" type="video/mp4">
                    </video>
                </div>

                <div class="relative h-full -ml-[20%] clip-path-about-image">
                    <img src="<?php echo $home_about_image ?>" alt="" class="h-full w-full object-cover absolute">
                </div>
            </div>
            <div class="flex md:gap-2 justify-between flex-wrap sm:flex-row flex-col py-2">
                <p class="text-base"><?php echo esc_html($home_about_caption); ?></p>
                <p class="text-base"><?php echo esc_html($home_about_location); ?></p>
            </div>
        </div>

        <div class="m-auto max-w-3xl grid gap-8">
            <h3 class="text-2xl md:text-5xl leading-tight font-serif"><?php echo $home_about_subheading ?></h3>
            <p class="text-lg md:text-2xl"><?php echo $home_about_paragraph ?></p>
            <p class="text-lg md:text-2xl mb-32"><?php echo $home_about_paragraph2 ?></p>
        </div>
    </div>
</section>