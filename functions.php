<?php

function nova_enqueue_styles() {
    wp_enqueue_style('style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'nova_enqueue_styles');

function nova_register_menu() {
    register_nav_menu('primary', 'Primary Menu');
}
add_action('after_setup_theme', 'nova_register_menu');

?>