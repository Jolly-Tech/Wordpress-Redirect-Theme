<?php

if (!function_exists('redirect_theme_customize_register')) {
    function redirect_theme_customize_register($wp_customize)
    {
        $wp_customize->add_section('redirect_theme_redirect', array(
            'title' => __('Redirect', 'redirect-theme'),
            'priority' => 30,
        ));

        redirect_theme_redirect_enabled($wp_customize);

        redirect_theme_redirect_url($wp_customize);

        redirect_theme_status_code($wp_customize);
    }
};

if (!function_exists('redirect_theme_redirect_enabled')) {
    function redirect_theme_redirect_enabled($wp_customize)
    {
        $wp_customize->add_setting('redirect_theme_redirect_enabled', array(
            'default' => false,
            'transport' => 'refresh',
        ));

        $wp_customize->add_control('redirect_theme_redirect_enabled', array(
            'label' => __('Enable Redirect', 'redirect-theme'),
            'section' => 'redirect_theme_redirect',
            'type' => 'checkbox',
        ));
    }
}

if (!function_exists('redirect_theme_redirect_url')) {
    function redirect_theme_redirect_url($wp_customize)
    {
        $wp_customize->add_setting('redirect_theme_redirect_url', array(
            'default' => 'https://example.com',
            'transport' => 'refresh',
        ));

        $wp_customize->add_control('redirect_theme_redirect_url', array(
            'label' => __('Redirect URL', 'redirect-theme'),
            'section' => 'redirect_theme_redirect',
            'type' => 'text',
        ));
    }
}

if (!function_exists('redirect_theme_status_code')) {
    function redirect_theme_status_code($wp_customize)
    {
        $wp_customize->add_setting('redirect_theme_redirect_status_code', array(
            'default' => 301,
            'transport' => 'refresh',
        ));

        $wp_customize->add_control('redirect_theme_redirect_status_code', array(
            'label' => __('Status Code', 'redirect-theme'),
            'section' => 'redirect_theme_redirect',
            'type' => 'select',
            'choices' => [
                301 => '301 Moved Permanently',
                302 => '302 Found',
                303 => '303 See Other',
                307 => '307 Temporary Redirect',
                308 => '308 Permanent Redirect',
            ],
        ));
    }
}

if (!function_exists('redirect_theme_redirect_delay')) {
    function redirect_theme_redirect_delay($wp_customize)
    {
        $wp_customize->add_setting('redirect_theme_redirect_delay', array(
            'default' => 0,
            'transport' => 'refresh',
        ));

        $wp_customize->add_control('redirect_theme_redirect_delay', array(
            'label' => __('Delay (seconds)', 'redirect-theme'),
            'section' => 'redirect_theme_redirect',
            'type' => 'number',
        ));
    }
}

if (!function_exists('redirect_theme_redirect_message')) {
    function redirect_theme_redirect_message($wp_customize)
    {
        $wp_customize->add_setting('redirect_theme_redirect_message', array(
            'default' => '',
            'transport' => 'refresh',
        ));

        $wp_customize->add_control('redirect_theme_redirect_message', array(
            'label' => __('Message', 'redirect-theme'),
            'section' => 'redirect_theme_redirect',
            'type' => 'textarea',
        ));

        $wp_customize->add_setting('redirect_theme_redirect_message_enabled', array(
            'default' => false,
            'transport' => 'refresh',
        ));

        $wp_customize->add_control('redirect_theme_redirect_message_enabled', array(
            'label' => __('Enable Message', 'redirect-theme'),
            'section' => 'redirect_theme_redirect',
            'type' => 'checkbox',
        ));

        $wp_customize->add_setting('redirect_theme_redirect_message_type', array(
            'default' => 'notice',
            'transport' => 'refresh',
        ));

        $wp_customize->add_control('redirect_theme_redirect_message_type', array(
            'label' => __('Message Type', 'redirect-theme'),
            'section' => 'redirect_theme_redirect',
            'type' => 'select',
            'choices' => [
                'notice' => 'Notice',
                'warning' => 'Warning',
                'error' => 'Error',
            ],
        ));

        $wp_customize->add_setting('redirect_theme_redirect_message_position', array(
            'default' => 'top',
            'transport' => 'refresh',
        ));

        $wp_customize->add_control('redirect_theme_redirect_message_position', array(
            'label' => __('Message Position', 'redirect-theme'),
            'section' => 'redirect_theme_redirect',
            'type' => 'select',
            'choices' => [
                'top' => 'Top',
                'bottom' => 'Bottom',
            ],
        ));

        $wp_customize->add_setting('redirect_theme_redirect_message_delay', array(
            'default' => 0,
            'transport' => 'refresh',
        ));

        $wp_customize->add_control('redirect_theme_redirect_message_delay', array(
            'label' => __('Message Delay (seconds)', 'redirect-theme'),
            'section' => 'redirect_theme_redirect',
            'type' => 'number',
        ));

        $wp_customize->add_setting('redirect_theme_redirect_message_dismissable', array(
            'default' => false,
            'transport' => 'refresh',
        ));

        $wp_customize->add_control('redirect_theme_redirect_message_dismissable', array(
            'label' => __('Message Dismissable', 'redirect-theme'),
            'section' => 'redirect_theme_redirect',
            'type' => 'checkbox',
        ));
    }
};
