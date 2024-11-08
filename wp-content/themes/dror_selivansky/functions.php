<?php
function dror_selivansky_theme_setup() {
    // Add support for various WordPress features
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
}

add_action('after_setup_theme', 'dror_selivansky_theme_setup');

function dror_selivansky_enqueue_styles() {
    // Enqueue main stylesheet
    wp_enqueue_style('dror-selivansky-style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'dror_selivansky_enqueue_styles');
?>
