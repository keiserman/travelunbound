<?php
/*
Template Name: Home Page
*/
?>

<?php get_header(); ?>

<main class="text-primary">
    <section class="bg-black text-white relative">
        <div class="container h-screen flex gap-6 items-end py-6 relative z-10">
            <h1 class="md:text-6xl text-2xl">
                Enriching experiences for the <span class="font-sans">modern traveller.</span>
            </h1>
            <div class="flex gap-4 justify-end shrink-0">
                <a href="/" class="button ghost">Enquire</a>
                <a href="/" class="button">Learn more</a>
            </div>
        </div>
        <?php
        // Get the hero image for the home page
        $home_hero_image = get_theme_mod('home_hero_image');
        if ($home_hero_image) : ?>
            <img src="<?php echo esc_url($home_hero_image); ?>" alt="Hero Background" class="absolute w-full h-full z-0 top-0 object-cover">
        <?php endif; ?>
    </section>
    <section class="bg-white">
        <div class="container py-6">
            <div class="text-2xl max-w-xl">tailor-made luxury travel, crafted to match your lifestyle, perfectly attuned to your tastes and needs.</div>
            <h2 class="m-auto max-w-3xl text-8xl mt-44 mb-12">introducing travel/<span class="font-sans">unbound</span></h2>
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
        <div class="grid">
            <div class="border-b text-6xl py-10 bg-secondary text-white">
                <div class="m-auto max-w-3xl">
                    <span class="font-serif">individual</span>/bespoke
                </div>
            </div>
            <div class="border-b text-6xl py-10">
                <div class="m-auto max-w-3xl">
                    <span class="font-serif">insider</span>/insight
                </div>
            </div>
            <div class="border-b text-6xl py-10">
                <div class="m-auto max-w-3xl">
                    <span class="font-serif">exclusive</span>/access
                </div>
            </div>
            <div class="border-b text-6xl py-10">
                <div class="m-auto max-w-3xl">
                    <span class="font-serif">seamless</span>/journeys
                </div>
            </div>
            <div class="border-b text-6xl py-10">
                <div class="m-auto max-w-3xl">
                    <span class="font-serif">responsible</span>/tourism
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container py-40">
            <h2 class="m-auto max-w-4xl text-8xl mb-12">transformative<br><span class="font-sans">travel experiences</span></h2>
            <p class="m-auto max-w-4xl text-2xl">no matter where inspiration takes you, we will create a unique journey that immerses you in the genuine spirit of each destination.</p>
        </div>
    </section>
</main>

<?php get_footer(); ?>