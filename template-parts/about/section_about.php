<?php
$about_about_image = esc_url(get_theme_mod("about_about_image"));
$about_about_photo_credit = esc_html(get_theme_mod("about_about_photo_credit"));
$about_about_heading_main = esc_html(get_theme_mod("about_about_heading_main"));
$about_about_heading_span = esc_html(get_theme_mod("about_about_heading_span"));
$about_about_paragraph = esc_html(get_theme_mod("about_about_paragraph"));
$about_about_subheading_main = esc_html(get_theme_mod("about_about_subheading_main"));
$about_about_subheading_span = esc_html(get_theme_mod("about_about_subheading_span"));
?>

<section>
    <div class="padding-global py-24 lg:py-36">
        <div class="m-auto max-w-screen-xl grid gap-36">
            <div class="m-auto max-w-3xl">
                <h2 class="heading-h1 mb-6 lg:mb-12"><?php echo $about_about_heading_main ?>/<span class="font-sans"><?php echo $about_about_heading_span ?></span></h2>
                <div class="text-lg md:text-xl"><?php echo $about_about_paragraph ?></div>
            </div>
            <div class="grid md:grid-cols-2 gap-24 items-center">
                <div class="md:flex gap-2">
                    <img class="w-full aspect-[5/7] object-cover bg-gray-100" src="<?php echo $about_about_image; ?>" alt="<?php echo $about_about_photo_credit; ?>">
                    <div class="md:vertical-text md:text-right"><?php echo $about_about_photo_credit; ?></div>
                </div>
                <div class="flex flex-col gap-8">
                    <h2 class="heading-h2"><?php echo $about_about_subheading_main ?><br><span class="font-sans"><?php echo $about_about_subheading_span ?></span></h2>
                    <div class="bespoke-content"><?php echo get_field("bespoke_content"); ?></div>
                </div>
            </div>
        </div>
    </div>
</section>