<?php
/*
Template Name: Base Page
*/
?>

<?php get_header(); ?>

<main>
    <section>
        <div class="px-4 sm:px-8 flex relative h-screen items-center justify-center text-center text-white">
            <div class="padding-global">
                <h1 class="heading-h1 relative z-10">base <span class="font-sans">/page</span></h1>
            </div>
            <?php
            $hero_video_id = get_theme_mod("contact_hero_video");
            $hero_video_url = $hero_video_id
                ? wp_get_attachment_url($hero_video_id)
                : "";
            $hero_image = get_theme_mod("contact_hero_image");

            if ($hero_video_url): ?>
                <video class="absolute w-full h-full object-cover bg-black" autoplay muted loop>
                    <source src="<?php echo esc_url(
                                        $hero_video_url
                                    ); ?>" type="video/mp4">
                    <?php if ($hero_image): ?>
                        <img src="<?php echo esc_url(
                                        $hero_image
                                    ); ?>" alt="Fallback Hero Background">
                    <?php endif; ?>
                </video>
            <?php elseif ($hero_image): ?>
                <img src="<?php echo esc_url(
                                $hero_image
                            ); ?>" alt="Hero Background" class="absolute w-full h-full z-0 top-0 object-cover">
            <?php endif;
            ?>
        </div>
        <div class="padding-global">
            <div class="flex justify-between gap-6 py-6">
                <div class="text-2xl"><span class="font-serif">secondary</span> page title</div>
                <div class="text-base">Image or video caption goes here</div>
            </div>
        </div>
        </div>
    </section>
    <section>
        <div class="padding-global py-44">
            <div class="container-small">
                <div class="grid gap-10">
                    <h1 class="heading-h1">first thing is first h1.</h1>
                    <h2 class="heading-h2">first thing is first h2.</h2>
                    <h3 class="heading-h3">a fresh take on luxury travel, unlocking a world of remarkable and memorable journeys h3.</h3>
                    <h4 class="heading-h4">Crafted for the modern traveller h4</h4>
                    <p class="text-2xl">with over 40 years of industry experience, we combine connections, insight, and creativity to redefine travel design with a personal and modern touch</p>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>