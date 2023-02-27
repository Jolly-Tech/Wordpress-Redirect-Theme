<?php

if (!function_exists('redirect_theme_customize_register')) {
    function redirect_theme_customize_register($wp_customize)
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

        $wp_customize->add_section('redirect_theme_redirect', array(
            'title' => __('Redirect', 'redirect-theme'),
            'priority' => 30,
        ));

        $wp_customize->add_setting('redirect_theme_redirect_enabled', array(
            'default' => false,
            'transport' => 'refresh',
        ));

        $wp_customize->add_control('redirect_theme_redirect_enabled', array(
            'label' => __('Enable Redirect', 'redirect-theme'),
            'section' => 'redirect_theme_redirect',
            'type' => 'checkbox',
        ));

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
};
