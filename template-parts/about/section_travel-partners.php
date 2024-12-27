<?php
$about_tp_paragraph = esc_html(get_theme_mod("about_tp_paragraph"));
?>

<section>
    <div class="padding-global py-6">
        <div class="text-xl">our travel partners</div>
        <div class="grid md:grid-cols-2 gap-20 pt-36 pb-56 items-center">
            <div class="grid grid-cols-3 gap-10 items-center">
                <?php get_template_part('template-parts/travel-partners'); ?>
            </div>
            <div class="flex justify-end w-full">
                <div class="flex flex-col gap-2 max-w-lg">
                    <p class="text-lg md:text-2xl"><?php echo $about_tp_paragraph ?></p>
                </div>
            </div>
        </div>
    </div>
</section>