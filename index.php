<?php
if (get_theme_mod('redirect_theme_redirect_enabled')) {
    header("Location:" . get_theme_mod('redirect_theme_redirect_url'), true, get_theme_mod('redirect_theme_redirect_status_code'));
}
