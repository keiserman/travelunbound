<?php
$about_cta_text = get_theme_mod("about_cta_text");
$about_cta_link = get_theme_mod("about_cta_link");
?>

<?php if (
    !empty($about_cta_link) &&
    !empty($about_cta_text)
): ?>
    <section>
        <div class="padding-global container py-44 md:py-72">
            <a href="<?php echo esc_url(get_permalink($about_cta_link)); ?>" class="flex gap-4 items-center justify-center">
                <h2 class="heading-h1 text-center flex gap-10 items-center place-content-center"><?php echo esc_html($about_cta_text); ?></h2>
                <svg class="w-8 md:w-14" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 54.5 36.8">
                    <path fill="currentColor" d="M53.8 16.6 37.9.7c-1-1-2.6-1-3.5 0-1 1-1 2.6 0 3.5L46 15.8H0v5h46L34.4 32.4c-1 1-1 2.6 0 3.5 1 1 2.6 1 3.5 0L53.8 20c1-1 1-2.6 0-3.5Z" />
                </svg>
            </a>
        </div>
    </section>
<?php endif; ?>