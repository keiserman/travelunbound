<?php
/*
Template Name: Home Page
*/
?>

<?php get_header(); ?>

<main class="text-primary">
    <?php get_template_part('template-parts/home/hero'); ?>
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