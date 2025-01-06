<?php
$whatsapp_link = esc_url(get_theme_mod("whatsapp_link"));
$instagram_link = esc_url(get_theme_mod("instagram_link"));
$email_link = esc_url(get_theme_mod("email_link"));
?>

<section class="bg-[#E5E7EB]">
    <div class="padding-global py-44">
        <div class="container-small">
            <div class="text-xl mb-2">Or, you can contact us directly</div>
            <div class="text-xl mb-10">we will get back to you as soon as we can.</div>
            <div class="flex flex-col gap-4 pb-14">

                <?php
                if (!empty($whatsapp_link)) : ?>
                    <a href="<?php echo $whatsapp_link ?>" class="social-buttons">
                        <div class="flex flex-wrap items-center gap-2">
                            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 256 256">
                                <path d="M152.58,145.23l23,11.48A24,24,0,0,1,152,176a72.08,72.08,0,0,1-72-72A24,24,0,0,1,99.29,80.46l11.48,23L101,118a8,8,0,0,0-.73,7.51,56.47,56.47,0,0,0,30.15,30.15A8,8,0,0,0,138,155ZM232,128A104,104,0,0,1,79.12,219.82L45.07,231.17a16,16,0,0,1-20.24-20.24l11.35-34.05A104,104,0,1,1,232,128Zm-40,24a8,8,0,0,0-4.42-7.16l-32-16a8,8,0,0,0-8,.5l-14.69,9.8a40.55,40.55,0,0,1-16-16l9.8-14.69a8,8,0,0,0,.5-8l-16-32A8,8,0,0,0,104,64a40,40,0,0,0-40,40,88.1,88.1,0,0,0,88,88A40,40,0,0,0,192,152Z"></path>
                            </svg>
                            +852 9021 7600
                        </div>
                        <div class="flex flex-wrap items-center gap-2">
                            send us a message
                            <svg class="w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 54.5 36.8">
                                <path fill="currentColor" d="M53.8 16.6 37.9.7c-1-1-2.6-1-3.5 0-1 1-1 2.6 0 3.5L46 15.8H0v5h46L34.4 32.4c-1 1-1 2.6 0 3.5 1 1 2.6 1 3.5 0L53.8 20c1-1 1-2.6 0-3.5Z" />
                            </svg>
                        </div>
                    </a>
                <?php endif; ?>

                <?php
                if (!empty($instagram_link)) : ?>
                    <a href="<?php echo $instagram_link ?>" class="social-buttons">
                        <div class="flex flex-wrap items-center gap-2">
                            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 256 256">
                                <path d="M128,80a48,48,0,1,0,48,48A48.05,48.05,0,0,0,128,80Zm0,80a32,32,0,1,1,32-32A32,32,0,0,1,128,160ZM176,24H80A56.06,56.06,0,0,0,24,80v96a56.06,56.06,0,0,0,56,56h96a56.06,56.06,0,0,0,56-56V80A56.06,56.06,0,0,0,176,24Zm40,152a40,40,0,0,1-40,40H80a40,40,0,0,1-40-40V80A40,40,0,0,1,80,40h96a40,40,0,0,1,40,40ZM192,76a12,12,0,1,1-12-12A12,12,0,0,1,192,76Z"></path>
                            </svg>
                            @travel.unbound
                        </div>
                        <div class="flex flex-wrap items-center gap-2">
                            send us a message
                            <svg class="w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 54.5 36.8">
                                <path fill="currentColor" d="M53.8 16.6 37.9.7c-1-1-2.6-1-3.5 0-1 1-1 2.6 0 3.5L46 15.8H0v5h46L34.4 32.4c-1 1-1 2.6 0 3.5 1 1 2.6 1 3.5 0L53.8 20c1-1 1-2.6 0-3.5Z" />
                            </svg>
                        </div>
                    </a>
                <?php endif; ?>

                <?php
                if (!empty($email_link)) : ?>
                    <a href="<?php echo $email_link ?>" class="social-buttons">
                        <div class="flex flex-wrap items-center gap-2">
                            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 256 256">
                                <path d="M224,48H32a8,8,0,0,0-8,8V192a16,16,0,0,0,16,16H216a16,16,0,0,0,16-16V56A8,8,0,0,0,224,48ZM203.43,64,128,133.15,52.57,64ZM216,192H40V74.19l82.59,75.71a8,8,0,0,0,10.82,0L216,74.19V192Z"></path>
                            </svg>
                            travel@unbound.ltd
                        </div>
                        <div class="flex flex-wrap items-center gap-2">
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