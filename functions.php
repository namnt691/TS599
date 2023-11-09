<?php
function add_css()
{
    wp_register_style('first', get_template_directory_uri() . '/assets/css/style.css', false, '1.1', 'all');
    wp_enqueue_style('first');
}
add_action('wp_enqueue_scripts', 'add_css');

function add_script()
{
    wp_register_script('main-js', get_template_directory_uri() . '/assets/js/main.js', false, '1.1', 'all');
    wp_enqueue_script('main-js');

    wp_register_script('gtag', 'https://www.googletagmanager.com/gtag/js?id=G-RD44Z26850', false, '1.1', 'all');
    wp_enqueue_script('gtag');
    
    wp_register_script('zalo-js', 'https://sp.zalo.me/plugins/sdk.js', false, '1.1', 'all');
    wp_enqueue_script('zalo-js');

    wp_register_script('pagead-conversion', 'https://www.googleadservices.com/pagead/conversion.js', false, '1.1', 'all');
    wp_enqueue_script('pagead-conversion');
    
    wp_register_script('zalo-js', 'https://sp.zalo.me/plugins/sdk.js', false, '1.1', 'all');
    wp_enqueue_script('zalo-js');

    wp_register_script('gtag', 'https://www.googletagmanager.com/gtag/js?id=G-RD44Z26850', false, '1.1', 'all');
    wp_enqueue_script('gtag');
    
    wp_register_script('zalo-js', 'https://sp.zalo.me/plugins/sdk.js', false, '1.1', 'all');
    wp_enqueue_script('zalo-js');
}
add_action('wp_enqueue_scripts', 'add_script');

add_theme_support('menus');