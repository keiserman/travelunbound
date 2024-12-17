<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?><?php wp_title('|'); ?></title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <header class="bg-transparent text-white py-4 absolute top-0 w-full z-40" data-navbar="navbar">
        <div class="padding-global flex gap-4 items-center lg:justify-center justify-between">
            <div class="text-xl">
                <a href="<?php echo esc_url(home_url('/')); ?>" class="flex items-center">
                    <?php
                    if (has_custom_logo()) {
                        the_custom_logo();
                    } else {
                        bloginfo('name');
                    }
                    ?>
                </a>
            </div>
            <div class="absolute right-0 top-0 py-4 px-6 ">
                <nav class="nav-menu" data-navbar="menu">
                    <?php
                    wp_nav_menu([
                        'theme_location' => 'primary',
                        'menu_class' => 'flex flex-col items-end gap-1 lowercase',
                        'container' => false,
                    ]);
                    ?>
                </nav>
                <div class="flex flex-col gap-1.5 relative z-50 cursor-pointer" data-navbar="button">
                    <div class="w-6 h-0.5 bg-white"></div>
                    <div class="w-6 h-0.5 bg-white"></div>
                    <div class="w-6 h-0.5 bg-white"></div>
                </div>
            </div>
        </div>
    </header>