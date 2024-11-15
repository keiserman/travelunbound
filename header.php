<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?><?php wp_title('|'); ?></title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <header class="bg-transparent text-white py-2 absolute top-0 w-full">
        <div class="container flex gap-4 items-center justify-between">
            <h1 class="text-xl font-bold">
                <a href="<?php echo esc_url(home_url('/')); ?>">
                    <?php bloginfo('name'); ?>
                </a>
            </h1>
            <nav class="md:flex gap-4 items-center hidden">
                <?php
                wp_nav_menu([
                    'theme_location' => 'primary',
                    'menu_class' => 'flex flex-col items-end gap-1 lowercase',
                    'container' => false,
                ]);
                ?>
            </nav>
        </div>
    </header>