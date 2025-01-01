<?php
$whatsapp_link = esc_url(get_theme_mod("whatsapp_link"));
$instagram_link = esc_url(get_theme_mod("instagram_link"));
$linkedin_link = esc_url(get_theme_mod("linkedin_link"));
$email_link = esc_url(get_theme_mod("email_link"));
?>

<footer class="py-8 bg-white text-primary relative">
    <div class="padding-global">
        <div class="flex flex-col gap-16 md:gap-24">
            <div class="grid grid-cols-2 md:grid-cols-[max-content_max-content_1fr] gap-10 md:gap-24">
                <div class="flex flex-col gap-4">
                    <div class="text-xl font-serif">find out more</div>
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'footer',
                        'container' => 'nav',
                        'menu_class' => 'footer-menu',
                        'fallback_cb' => false,
                    ));
                    ?>
                </div>
                <div class="flex flex-col gap-4">
                    <div class="text-xl font-serif">stay in touch</div>
                    <div class="flex flex-col items-start gap-1">
                        <?php
                        if (!empty($whatsapp_link)) : ?>
                            <a href="<?php echo $whatsapp_link ?>" class="footer-link">whatsapp</a>
                        <?php endif; ?>
                        <?php
                        if (!empty($instagram_link)) : ?>
                            <a href="<?php echo $instagram_link ?>" class="footer-link">instagram</a>
                        <?php endif; ?>

                        <?php
                        if (!empty($email_link)) : ?>
                            <a href="<?php echo $email_link ?>" class="footer-link">email</a>
                        <?php endif; ?>

                        <?php
                        if (!empty($linkedin_link)) : ?>
                            <a href="<?php echo $linkedin_link ?>" class="footer-link">linkedin</a>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="flex items-end justify-end grow order-first sm:order-last col-span-2 md:col-span-1">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/travel-unbound-footer-logo.png" alt="" class="w-full max-w-sm sm:max-w-md md:pt-16 sm:pr-6">
                </div>
            </div>
            <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-5 flex-wrap gap-10 lg:gap-16 col-span-5 sm:pr-[15vw]">
                <?php get_template_part('template-parts/travel-partners'); ?>
            </div>
            <div class="flex flex-col gap-6 sm:gap-2 sm:pr-28">
                <p><?php bloginfo('name'); ?> is an independent affiliate of 360 Private Travel.</p>
                <div class="flex flex-row flex-wrap gap-6 sm:gap-2 justify-between">
                    <p>iata 96090400 / virtuoso 3736 / travel industry authority license 354498</p>
                    <div class="sm:pr-6 flex flex-wrap gap-4">
                        <?php
                        wp_nav_menu(array(
                            'theme_location' => 'footer-links',
                            'container' => 'nav',
                            'menu_class' => 'footer-sub',
                            'fallback_cb' => false,
                        ));
                        ?>© 2025 unbound limited.</div>
                </div>
            </div>
        </div>
    </div>
    <div class="absolute top-0 right-0 w-32 h-full clip-path-footer bg-primary hidden sm:block"></div>
</footer>

<?php wp_footer(); ?>
</body>

</html>