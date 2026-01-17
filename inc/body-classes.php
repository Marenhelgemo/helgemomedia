<?php

function hm_add_theme_body_class($classes) {
    if (is_front_page()) {
        $classes[] = 'dark-theme';
    } else {
        $classes[] = 'light-page';
    }
    return $classes;
}
add_filter('body_class', 'hm_add_theme_body_class');
