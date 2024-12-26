<?php
$contact_contact_heading_main = esc_html(get_theme_mod("contact_contact_heading_main"));
$contact_contact_heading_span = esc_html(get_theme_mod("contact_contact_heading_span"));
$contact_contact_paragraph = esc_html(get_theme_mod("contact_contact_paragraph"));
?>

<section class="border-b border-lightgray">
    <div class="padding-global py-44">
        <div class="container-small grid gap-12">
            <h2 class="heading-h2"><?php echo $contact_contact_heading_main ?> <span class="font-sans"><?php echo $contact_contact_heading_span ?></span></h2>
            <p class="text-xl"><?php echo $contact_contact_paragraph ?></p>
            <ol class="pl-8 border-l-8 border-secondary list-decimal list-inside text-xl flex flex-col gap-2">
                <li>fill out enquiry or message us below</li>
                <li>we'll get back to you with xyz</li>
            </ol>
            <?php the_content(); ?>
        </div>
    </div>
</section>