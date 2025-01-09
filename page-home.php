<?php
/*
Template Name: Home Page
*/
?>

<?php get_header(); ?>

<main>
    <?php get_template_part('template-parts/home/section_hero'); ?>
    <?php get_template_part('template-parts/home/section_about'); ?>
    <?php get_template_part('template-parts/home/section_pillars'); ?>
    <?php get_template_part('template-parts/home/section_experiences'); ?>
    <?php get_template_part('template-parts/home/section_journey'); ?>
    <?php get_template_part('template-parts/home/section_cta'); ?>
    <section>
        <div class="padding-global py-6"><?php the_content(); ?></div>
    </section>
</main>

<?php get_footer(); ?>