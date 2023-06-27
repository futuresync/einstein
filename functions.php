<?php

// Adicionar suporte ao logo personalizado
function custom_theme_logo()
{
    add_theme_support('custom-logo', array(
        'height' => 50,
        'width' => 200,
        'flex-height' => true,
        'flex-width' => true,
    )
    );
}
add_action('after_setup_theme', 'custom_theme_logo');

// Exibir o logo no cabeçalho do tema
function display_custom_logo()
{
    if (function_exists('the_custom_logo')) {
        the_custom_logo();
    }
}

function enqueue_custom_styles()
{
    wp_enqueue_style('custom-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'enqueue_custom_styles');

function show_admin_bar_logged_in()
{
    if (is_user_logged_in()) {
        show_admin_bar(true);
    }
}
add_action('after_setup_theme', 'show_admin_bar_logged_in');

?>