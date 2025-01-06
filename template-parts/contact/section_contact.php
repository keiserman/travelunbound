<?php
$contact_contact_heading_main = esc_html(get_theme_mod("contact_contact_heading_main"));
$contact_contact_heading_span = esc_html(get_theme_mod("contact_contact_heading_span"));
$contact_contact_paragraph = esc_html(get_theme_mod("contact_contact_paragraph"));
?>

<section class="border-b border-lightgray">
    <div class="padding-global py-44">
        <div class="container-small grid gap-12">
            <h2 class="heading-h2"><?php echo $contact_contact_heading_main ?> <span class="font-sans"><?php echo $contact_contact_heading_span ?></span></h2>
            <div class="contact-content"><?php the_content(); ?></div>
        </div>
    </div>
</section>