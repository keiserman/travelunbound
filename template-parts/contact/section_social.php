<?php
$whatsapp_link = esc_url(get_theme_mod("whatsapp_link"));
$instagram_link = esc_url(get_theme_mod("instagram_link"));
$email_link = esc_url(get_theme_mod("email_link"));
?>

<section>
    <div class="padding-global py-44">
        <div class="container-small">
            <div class="text-xl mb-2">Or, you can contact us directly</div>
            <div class="text-xl mb-10">we will get back to you as soon as we can.</div>
            <div class="flex flex-col gap-4 pb-14 border-b border-lightgray">

                <?php
                if (!empty($whatsapp_link)) : ?>
                    <a href="<?php echo $whatsapp_link ?>" class="flex items-center gap-2 justify-between w-full bg-lightgray px-8 py-4 rounded-full hover:bg-primary hover:text-white transition">
                        whatsapp
                        <div class="flex items-center gap-2">
                            send us a text
                            <svg class="w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 54.5 36.8">
                                <path fill="currentColor" d="M53.8 16.6 37.9.7c-1-1-2.6-1-3.5 0-1 1-1 2.6 0 3.5L46 15.8H0v5h46L34.4 32.4c-1 1-1 2.6 0 3.5 1 1 2.6 1 3.5 0L53.8 20c1-1 1-2.6 0-3.5Z" />
                            </svg>
                        </div>
                    </a>
                <?php endif; ?>

                <?php
                if (!empty($instagram_link)) : ?>
                    <a href="<?php echo $instagram_link ?>" class="flex items-center gap-2 justify-between w-full bg-lightgray px-8 py-4 rounded-full hover:bg-primary hover:text-white transition">
                        instagram
                        <div class="flex items-center gap-2">
                            send us a message
                            <svg class="w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 54.5 36.8">
                                <path fill="currentColor" d="M53.8 16.6 37.9.7c-1-1-2.6-1-3.5 0-1 1-1 2.6 0 3.5L46 15.8H0v5h46L34.4 32.4c-1 1-1 2.6 0 3.5 1 1 2.6 1 3.5 0L53.8 20c1-1 1-2.6 0-3.5Z" />
                            </svg>
                        </div>
                    </a>
                <?php endif; ?>

                <?php
                if (!empty($email_link)) : ?>
                    <a href="<?php echo $email_link ?>" class="flex items-center gap-2 justify-between w-full bg-lightgray px-8 py-4 rounded-full hover:bg-primary hover:text-white transition">
                        email
                        <div class="flex items-center gap-2">
                            send us an email
                            <svg class="w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 54.5 36.8">
                                <path fill="currentColor" d="M53.8 16.6 37.9.7c-1-1-2.6-1-3.5 0-1 1-1 2.6 0 3.5L46 15.8H0v5h46L34.4 32.4c-1 1-1 2.6 0 3.5 1 1 2.6 1 3.5 0L53.8 20c1-1 1-2.6 0-3.5Z" />
                            </svg>
                        </div>
                    </a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>