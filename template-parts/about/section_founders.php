<?php
$about_founders_heading_main = esc_html(get_theme_mod("about_founders_heading_main"));
$about_founders_heading_span = esc_html(get_theme_mod("about_founders_heading_span"));
$about_founders_paragraph = esc_html(get_theme_mod("about_founders_paragraph"));
?>

<section class="bg-lightgray">
    <div class="padding-global py-24">
        <div class="container-small grid gap-6 mb-24">
            <h2 class="heading-h1"><?php echo $about_founders_heading_main ?> <span class="font-sans"><?php echo $about_founders_heading_span ?></span></h2>
            <p class="text-lg md:text-2xl"><?php echo $about_founders_paragraph ?></p>
        </div>
        <div class="container">
            <?php get_template_part('template-parts/founders'); ?>
        </div>
    </div>
</section>