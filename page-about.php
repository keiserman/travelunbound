<section class="relative">
    <div class="container py-6">
        <h1>About Us</h1>
    </div>
    <?php
    // Get the background image for the about page
    $about_background_image = get_theme_mod('about_background_image');
    if ($about_background_image) : ?>
        <img src="<?php echo esc_url($about_background_image); ?>" alt="About Background" class="absolute w-full h-full z-0 top-0">
    <?php endif; ?>
</section>