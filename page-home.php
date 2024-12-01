<?php
/*
Template Name: Home Page
*/
?>

<?php get_header(); ?>

<main class="text-primary">
    <?php get_template_part('template-parts/home/hero-section'); ?>
    <?php get_template_part('template-parts/home/about-section'); ?>
    <?php get_template_part('template-parts/home/approach-section'); ?>
    <?php get_template_part('template-parts/home/experiences-section'); ?>
    <?php get_template_part('template-parts/home/journery-section'); ?>
    <?php get_template_part('template-parts/cta-section'); ?>
</main>

<?php get_footer(); ?>