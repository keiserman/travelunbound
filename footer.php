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
                        <a href="" class="footer-link">whatsapp</a>
                        <a href="" class="footer-link">instagram</a>
                        <a href="" class="footer-link">email</a>
                        <a href="" class="footer-link">linkedin</a>
                    </div>
                </div>
                <div class="flex items-end justify-end grow order-first sm:order-last col-span-2 md:col-span-1">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/travel-unbound-footer-logo.png" alt="" class="w-full max-w-sm sm:max-w-md md:pt-16 sm:pr-6">
                </div>
            </div>
            <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-5 flex-wrap gap-10 lg:gap-16 col-span-5 sm:pr-[15vw]">
                <?php get_template_part('template-parts/travel-partners'); ?>
            </div>
            <div class="flex flex-col sm:text-right gap-2 sm:pr-28">
                <p><?php bloginfo('name'); ?> is an independent affiliate of 360 Private Travel.</p>
                <p class="sm:pr-6">© 2025 unbound limited. 19/f worldwide house, 19 des voeux road central, central, hong kong.</p>
            </div>
        </div>
    </div>
    <div class="absolute top-0 right-0 w-32 h-full clip-path-footer bg-primary hidden sm:block"></div>
</footer>

<?php wp_footer(); ?>
</body>

</html>