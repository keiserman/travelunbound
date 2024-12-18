<section>
    <div class="flex relative h-[90vh] items-center justify-center text-center text-white">
        <div class="padding-global">
            <h1 class="heading-h1 relative z-10">your journey starts <span class="font-sans">here.</span></h1>
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
            <div class="text-2xl"><span class="font-serif">contact</span> us</div>
            <div class="text-base">EXO Travel, Maldives</div>
        </div>
    </div>
    </div>
</section>