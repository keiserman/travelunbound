<?php
/*
Template Name: About Page
*/
?>

<?php get_header(); ?>

<main>
    <?php get_template_part('template-parts/about/hero-section'); ?>
    <?php get_template_part('template-parts/about/about-section'); ?>
    <?php get_template_part('template-parts/about/founders-section'); ?>
    <?php get_template_part('template-parts/about/travel-partners-section'); ?>
    <?php get_template_part('template-parts/about/hotel-partners-section'); ?>
    <?php get_template_part('template-parts/about/made-section'); ?>
</main>

<?php get_footer(); ?>