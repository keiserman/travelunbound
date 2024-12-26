<?php
$home_about_video = esc_url(wp_get_attachment_url(get_theme_mod('home_about_video')));
$home_about_video_poster = esc_url(get_theme_mod('home_about_video_poster'));
$home_about_image = esc_url(get_theme_mod('home_about_image'));
?>

<section class="bg-white">
    <div class="padding-global py-6">
        <div class="text-lg md:text-2xl max-w-2xl">
            <span class="font-serif">tailor-made luxury travel, crafted to match your lifestyle,<br></span> perfectly attuned to your tastes and needs.
        </div>
        <h2 class="heading-h1 m-auto max-w-3xl mt-44 mb-12">introducing<br /> travel/<span class="font-sans">unbound</span>
        </h2>

        <div class="max-w-6xl m-auto mb-20">
            <div class="grid grid-cols-2 h-[50vw]">
                <div class="relative h-full clip-path-about-video -mr-[20%]">
                    <video autoplay muted loop class="h-full w-full top-0 absolute object-cover" poster="<?php echo $home_about_video_poster ?>">
                        <source src="<?php echo $home_about_video ?>" type="video/mp4">
                    </video>
                </div>

                <div class="relative h-full -ml-[20%] clip-path-about-image">
                    <img src="<?php echo $home_about_image ?>" alt="" class="h-full w-full object-cover absolute">
                </div>
            </div>
            <div class="text-base text-right py-2">One & Only, Mandarina Mexico</div>
        </div>

        <div class="m-auto max-w-3xl grid gap-8">
            <h3 class="text-2xl md:text-5xl leading-tight font-serif">a fresh take on luxury travel, unlocking a world of remarkable and memorable journeys.</h3>
            <p class="text-lg md:text-2xl">with over 40 years of industry experience, we combine connections, insight, and creativity to redefine travel design with a personal and modern touch.</p>
            <p class="text-lg md:text-2xl mb-32">we invite you to rediscover the joys and meaning of travel, free from the anxiety and hassle that often accompany it.</p>
        </div>
    </div>
</section>