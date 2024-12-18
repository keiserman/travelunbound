<footer class="py-8 bg-white text-primary relative">
    <div class="padding-global">
        <div class="flex flex-col gap-24">
            <div class="flex flex-col sm:grid sm:grid-cols-2 md:grid-cols-[max-content_max-content_1fr] gap-10 md:gap-24">
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
                        <a href="" class="footer-link">whatsapp</a>
                        <a href="" class="footer-link">instagram</a>
                        <a href="" class="footer-link">email</a>
                        <a href="" class="footer-link">linkedin</a>
                    </div>
                </div>
                <div class="col-span-2 md:col-span-1 flex items-end justify-end grow"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/travel-unbound-footer-logo.png" alt="" class="w-full max-w-md pt-16 pr-6"></div>
            </div>
            <div class="flex flex-wrap gap-16 col-span-5 pr-8">
                <img class="footer-logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/360-private-travel.png" alt="">
                <img class="footer-logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/forbes-travel-guide.png" alt="">
                <img class="footer-logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/virtuoso-member.png" alt="">
            </div>
            <div class="flex flex-col text-right gap-2 pr-28">
                <p><?php bloginfo('name'); ?> is an independent affiliate of 360 Private Travel.</p>
                <p class="pr-6">terms careers sitemap © 2024 unbound limited | Travel Industry Authority License 354498, IATA 332213 </p>
            </div>
        </div>
    </div>
    <div class="absolute top-0 right-0 w-32 h-full clip-path-footer bg-primary"></div>
</footer>

<?php wp_footer(); ?>
</body>

</html>