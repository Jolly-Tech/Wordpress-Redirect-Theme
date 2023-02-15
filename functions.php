<?php

if (!function_exists('redirect_theme_register_nav_menus')) {
    function redirect_theme_register_nav_menus()
    {
        register_nav_menus([
            'primary' => __('Primary Menu', 'redirect-theme'),
            'footer' => __('Footer Menu', 'redirect-theme'),
        ]);
    }
}
add_action('init', 'redirect_theme_register_nav_menus');

add_theme_support('post-thumbnails');
