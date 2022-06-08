<?php
function projektas_theme_support()
{
    add_theme_support('title-tag');
}
add_action('after_theme_setup', 'projektas_theme_support');

function projektas_menus()
{
    $locations = array(
        'primary' => 'Desktop Primary Top',
        'secondary' => 'Desktop Secondary Top Right'
    );
    register_nav_menus($locations);
}
add_action('init', 'projektas_menus');

function lukas_register_styles()
{
    wp_enqueue_style('lukas-template-styles', get_template_directory_uri() . '/assets/css/laikasdirbti.css?v=' . time(), array(), false, 'all');
}
add_action('wp_enqueue_scripts', 'lukas_register_styles');
