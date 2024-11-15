<?php
/*
Template Name: Home Page
*/
?>

<?php get_header(); ?>

<main>
    <section class="bg-black text-white">
        <div class="container h-screen flex gap-6 items-end py-6">
            <h1 class="md:text-6xl text-2xl">
                Enriching experiences for the modern traveller.
            </h1>
            <div class="flex gap-4 justify-end shrink-0">
                <a href="/" class="button ghost">Enquire</a>
                <a href="/" class="button">Learn more</a>
            </div>
        </div>
    </section>
    <section class="bg-white text-primary">
        <div class="container py-6 grid grid-cols-12">
            <div class="col-span-5 text-2xl">tailor-made luxury travel, crafted to match your lifestyle, perfectly attuned to your tastes and needs.</div>
        </div>
    </section>
</main>

<?php get_footer(); ?>