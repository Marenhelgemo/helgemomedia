<?php
function hm_theme_setup() {
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo', [
        'height'      => 60,
        'width'       => 200,
        'flex-height' => true,
        'flex-width'  => true,
    ]);
    add_theme_support('title-tag');

    register_nav_menus(array(
        'navbar' => 'Navbar',
        'footer' => 'Footer Menu',
    ));
}
add_action('after_setup_theme', 'hm_theme_setup');