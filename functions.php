<?php
// Enqueue style.css
function nova_enqueue_styles() {
    wp_enqueue_style('style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'nova_enqueue_styles');

// Register primary menu
function nova_register_menu() {
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'nova')
    ));
}
add_action('after_setup_theme', 'nova_register_menu');
?>