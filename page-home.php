<?php
/*
Template Name: Home Page
*/
?>

<?php get_header(); ?>

<main class="text-primary">
    <section class="bg-black text-white relative">
        <div class="container h-screen flex gap-6 items-end py-6 relative z-10">
            <h1>
                <?php echo esc_html(get_theme_mod('home_heading_main', 'Enriching experiences for the')); ?>
                <span class="font-sans">
                    <?php echo esc_html(get_theme_mod('home_heading_span', 'modern traveller.')); ?>
                </span>
            </h1>
            <div class="flex gap-4 justify-end shrink-0">
                <a href="/" class="button ghost">Enquire</a>
                <a href="/" class="button">Learn more</a>
            </div>
        </div>
        <?php
        // Get the hero image for the home page

        $hero_image = get_theme_mod('hero_image');
        if ($hero_image) : ?>
            <img src="<?php echo esc_url($hero_image); ?>" alt="Hero Background" class="absolute w-full h-full z-0 top-0 object-cover">
        <?php endif; ?>
    </section>
    <section class="bg-white">
        <div class="container py-6">
            <div class="text-2xl max-w-xl">tailor-made luxury travel, crafted to match your lifestyle, perfectly attuned to your tastes and needs.</div>
            <h2 class="m-auto max-w-3xl mt-44 mb-12">introducing travel/<span class="font-sans">unbound</span></h2>
            <img src="#" alt="" class="m-auto max-w-5xl w-full aspect-video bg-gray-200 mb-20">
            <div class="m-auto max-w-3xl grid gap-8">
                <h3 class="text-4xl">a fresh take on luxury travel, unlocking a world of remarkable and memorable journeys.</h3>
                <p class="text-2xl">with over 40 years of industry experience, we combine connections, insight, and creativity to redefine travel design with a personal and modern touch.</p>
                <p class="text-2xl mb-32">we invite you to rediscover the joys and meaning of travel, free from the anxiety and hassle that often accompany it.</p>
            </div>
        </div>
    </section>
    <section class="bg-white">
        <div class="m-auto max-w-3xl text-lg mb-4">Our approach</div>
        <?php get_template_part('template-parts/faq'); ?>
    </section>
    <section>
        <div class="container py-40">
            <h2 class="m-auto max-w-4xl text-8xl mb-12">transformative<br><span class="font-sans">travel experiences</span></h2>
            <p class="m-auto max-w-4xl text-2xl mb-28">no matter where inspiration takes you, we will create a unique journey that immerses you in the genuine spirit of each destination.</p>

            <?php get_template_part('template-parts/experiences'); ?>
        </div>
    </section>
</main>

<?php get_footer(); ?>