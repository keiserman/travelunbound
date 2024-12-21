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
            <div class="grid grid-cols-3 lg:grid-cols-5 flex-wrap gap-6 lg:gap-16 col-span-5 pr-[15vw]">
                <?php get_template_part('template-parts/travel-partners'); ?>
            </div>
            <div class="flex flex-col text-right gap-2 pr-28">
                <p><?php bloginfo('name'); ?> is an independent affiliate of 360 Private Travel.</p>
                <p class="pr-6">© 2025 unbound limited. 19/f worldwide house, 19 des voeux road central, central, hong kong.</p>
            </div>
        </div>
    </div>
    <div class="absolute top-0 right-0 w-32 h-full clip-path-footer bg-primary"></div>
</footer>

<?php wp_footer(); ?>
</body>

</html>