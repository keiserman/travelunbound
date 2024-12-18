<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?><?php wp_title('|'); ?></title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <?php
    $light_logo = get_theme_mod('custom_logo');
    $dark_logo = get_theme_mod('dark_logo');
    ?>

    <header class="fixed top-0 w-full z-40" data-navbar="navbar">
        <div data-navbar="content" class="bg-gradient-to-b from-black/60 to-transparent text-white py-4">
            <div class="padding-global flex gap-4 items-center lg:justify-normal justify-between">
                <div class="text-xl flex justify-center lg:grow lg:translate-x-6">
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="flex items-center">
                        <?php if ($light_logo): ?>
                            <img class="navbar-logo-light w-full max-w-56 hidden" src="<?php echo esc_url(wp_get_attachment_image_url($light_logo, 'full')); ?>" alt="<?php bloginfo('name'); ?>">
                        <?php endif; ?>

                        <?php if ($dark_logo): ?>
                            <img class="navbar-logo-dark w-full max-w-56" src="<?php echo esc_url($dark_logo); ?>" alt="<?php bloginfo('name'); ?>">
                        <?php endif; ?>
                    </a>
                </div>

                <div class="cursor-pointer w-8 h-8" data-navbar="open">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 256 256">
                        <path d="M224,128a8,8,0,0,1-8,8H40a8,8,0,0,1,0-16H216A8,8,0,0,1,224,128ZM40,72H216a8,8,0,0,0,0-16H40a8,8,0,0,0,0,16ZM216,184H40a8,8,0,0,0,0,16H216a8,8,0,0,0,0-16Z"></path>
                    </svg>
                </div>
            </div>
        </div>

        <nav class="nav-menu" data-navbar="menu">
            <div class="cursor-pointer h-8 w-8 text-white" data-navbar="close">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 256 256">
                    <path d="M205.66,194.34a8,8,0,0,1-11.32,11.32L128,139.31,61.66,205.66a8,8,0,0,1-11.32-11.32L116.69,128,50.34,61.66A8,8,0,0,1,61.66,50.34L128,116.69l66.34-66.35a8,8,0,0,1,11.32,11.32L139.31,128Z"></path>
                </svg>
            </div>
            <?php
            wp_nav_menu([
                'theme_location' => 'primary',
                'menu_class' => 'flex flex-col items-end gap-1 lowercase',
                'container' => false,
            ]);
            ?>
        </nav>
    </header>