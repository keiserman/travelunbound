<footer class="p-4 bg-white text-primary">
    <div class="container mx-auto">
        <div class="grid grid-cols-5 gap-24">
            <div class="flex flex-col gap-4">
                <div class="text-xl font-serif">find out more</div>
                <div class="flex flex-col gap-1">
                    <a href="" class="text-md">about</a>
                    <a href="" class="text-md">experiences</a>
                    <a href="" class="text-md">contact</a>
                </div>
            </div>
            <div class="flex flex-col gap-4">
                <div class="text-xl font-serif">stay in touch</div>
                <div class="flex flex-col gap-1">
                    <a href="" class="text-md">whatsapp</a>
                    <a href="" class="text-md">instagram</a>
                    <a href="" class="text-md">email</a>
                    <a href="" class="text-md">linkedin</a>
                </div>
            </div>
            <div class="flex gap-16 col-span-5">
                <img class="footer-logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/footer-logos/360-private-travel.png" alt="">
                <img class="footer-logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/footer-logos/forbes-travel-guide.png" alt="">
                <img class="footer-logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/footer-logos/virtuoso-member.png" alt="">
            </div>
        </div>
        <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All rights reserved.</p>
    </div>
</footer>

<?php wp_footer(); ?>
</body>

</html>