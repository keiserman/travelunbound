<?php
/*
Template Name: Home Page
*/
?>

<?php get_header(); ?>

<main>
    <?php get_template_part('template-parts/home/section_hero'); ?>
    <?php get_template_part('template-parts/home/section_about'); ?>
    <?php get_template_part('template-parts/home/section_approach'); ?>
    <?php get_template_part('template-parts/home/section_experiences'); ?>
    <?php get_template_part('template-parts/home/section_journey'); ?>
    <?php get_template_part('template-parts/home/section_cta'); ?>
</main>

<?php get_footer(); ?>