<?php
/*
Template Name: About Page
*/
?>

<?php get_header(); ?>

<main>
    <?php get_template_part('template-parts/about/section_hero'); ?>
    <?php get_template_part('template-parts/about/section_about'); ?>
    <?php get_template_part('template-parts/about/section_founders'); ?>
    <?php get_template_part('template-parts/about/section_travel-partners'); ?>
    <?php get_template_part('template-parts/about/section_hotel-partners'); ?>
    <?php get_template_part('template-parts/about/section_mission'); ?>
    <?php get_template_part('template-parts/about/section_cta'); ?>
</main>

<?php get_footer(); ?>