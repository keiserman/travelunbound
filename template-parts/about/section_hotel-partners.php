<?php
$about_hp_heading = esc_html(get_theme_mod("about_hp_heading"));
$about_hp_paragraph = esc_html(get_theme_mod("about_hp_paragraph"));
?>

<section class="bg-lightgray overflow-hidden">
    <div class="padding-global py-6">
        <div class="text-xl mb-24">our preferred hotel partners</div>
        <div data-marquee="marquee" class="flex mb-24">
            <div data-marquee="wrapper" class="flex grow-0 shrink-0">
                <?php get_template_part('template-parts/hotel-partners'); ?>
            </div>
            <div data-marquee="wrapper" class="flex grow-0 shrink-0">
                <?php get_template_part('template-parts/hotel-partners'); ?>
            </div>
        </div>
        <div class="flex justify-end w-full mb-24">
            <div class="flex flex-col gap-2 max-w-lg">
                <div class="text-lg md:text-2xl font-medium lowercase"><?php echo $about_hp_heading ?></div>
                <p class="text-lg md:text-2xl"><?php echo $about_hp_paragraph ?></p>
            </div>
        </div>
    </div>
</section>