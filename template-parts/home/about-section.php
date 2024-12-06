<section class="bg-white">
    <div class="padding-global py-6">
        <div class="text-2xl max-w-xl">tailor-made luxury travel, crafted to match your lifestyle, perfectly attuned to your tastes and needs.</div>
        <h2 class="heading-h2 m-auto max-w-3xl mt-44 mb-12">introducing travel/<span class="font-sans">unbound</span></h2>

        <div class="container mb-20">
            <div class="relative">

                <?php
                $about_video_id = get_theme_mod('about_video');
                $about_video_url = $about_video_id ? wp_get_attachment_url($about_video_id) : '';
                ?>

                <video autoplay muted loop class="aspect-video w-full">
                    <source src="<?php echo esc_url($about_video_url); ?>" type="video/mp4">
                </video>

                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/mandarina-mexico.jpeg" alt="" class="absolute top-0 right-0 h-full w-2/3 object-cover clip-path-custom">
            </div>
            <div class="text-base text-right py-2">One & Only, Mandarina Mexico</div>
        </div>

        <div class="m-auto max-w-3xl grid gap-8">
            <h3 class="text-4xl">a fresh take on luxury travel, unlocking a world of remarkable and memorable journeys.</h3>
            <p class="text-2xl">with over 40 years of industry experience, we combine connections, insight, and creativity to redefine travel design with a personal and modern touch.</p>
            <p class="text-2xl mb-32">we invite you to rediscover the joys and meaning of travel, free from the anxiety and hassle that often accompany it.</p>
        </div>
    </div>
</section>