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
            <div class="lg:absolute right-0 top-0 lg:py-4 lg:px-6">
                <nav class="nav-menu" data-navbar="menu">
                    <?php
                    wp_nav_menu([
                        'theme_location' => 'primary',
                        'menu_class' => 'flex flex-col items-end gap-1 lowercase',
                        'container' => false,
                    ]);
                    ?>
                </nav>
                <div class="w-8 h-8 relative lg:hidden z-50 cursor-pointer" data-navbar="button">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 256 256">
                        <path d="M224,128a8,8,0,0,1-8,8H40a8,8,0,0,1,0-16H216A8,8,0,0,1,224,128ZM40,72H216a8,8,0,0,0,0-16H40a8,8,0,0,0,0,16ZM216,184H40a8,8,0,0,0,0,16H216a8,8,0,0,0,0-16Z"></path>
                    </svg>
                </div>
            </div>
        </div>
    </header>