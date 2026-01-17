<?php
function hm_enqueue_assets() {
    $uri = get_template_directory_uri();

    // CSS
    $styles = [
        'hm-cards'      => '/assets/css/components/cards.css',
        'hm-icons'      => '/assets/css/icons/icons.css',
        'hm-header'     => '/assets/css/layout/header.css',
        'hm-navigation' => '/assets/css/layout/navigation.css',
        'hm-footer'     => '/assets/css/layout/footer.css',
        'hm-single'     => '/assets/css/pages/single.css',
        'hm-priser'     => '/assets/css/pages/priser.css',
        'hm-style'      => '/style.css',
    ];

    foreach ($styles as $handle => $path) {
        wp_enqueue_style($handle, $uri . $path);
    }

    // Landing page CSS – kun for landing template
    if (is_page_template('page-landing.php')) {
        wp_enqueue_style(
            'hm-landing',
            $uri . '/assets/css/pages/landing.css',
            [],
            '1.0.0'
        );
    }

    // Font Awesome
    wp_enqueue_style(
        'font-awesome',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css'
    );

    // JS
    wp_enqueue_script('jquery');
    wp_enqueue_script(
        'menu-js',
        $uri . '/assets/js/menu.js',
        ['jquery'],
        null,
        true
    );

    wp_enqueue_script(
        'pricing-modal',
        $uri . '/assets/js/pricing-modal.js',
        [],
        null,
        true
    );

    // AJAX
    $localize = ['ajax_url' => admin_url('admin-ajax.php')];

    wp_localize_script('filter-js', 'hm_filter_data', $localize);
    wp_localize_script('filter-loadmore-js', 'hm_filter_data', $localize);
}
add_action('wp_enqueue_scripts', 'hm_enqueue_assets');
