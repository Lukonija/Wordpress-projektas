<?php
function lukas_register_styles()
{
    wp_enqueue_style('lukas-template-styles', get_template_directory_uri() . '/assets/css/styles.css?v=' . time(), array(), false, 'all');
}
add_action('wp_enqueue_scripts', 'lukas_register_styles');