<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?><?php wp_title('|'); ?></title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <header class="bg-transparent text-white py-4 fixed top-0 w-full z-40" data-navbar="navbar">
        <div class="padding-global flex gap-4 items-center lg:justify-normal justify-between">
            <div class="text-xl flex justify-center lg:grow lg:translate-x-6">
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
            <div class="">
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
                    <div data-navbar="line1" class="w-6 h-0.5 bg-white"></div>
                    <div data-navbar="line2" class="w-6 h-0.5 bg-white"></div>
                    <div data-navbar="line3" class="w-6 h-0.5 bg-white"></div>
                </div>
            </div>
        </div>
    </header>