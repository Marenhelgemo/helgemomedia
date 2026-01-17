<?php
function hm_enqueue_google_fonts() {
    wp_enqueue_style('hm-google-fonts', 'https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap', false);
}
add_action('wp_enqueue_scripts', 'hm_enqueue_google_fonts');
