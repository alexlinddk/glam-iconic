<?php
function your_theme_enqueue_styles() {
  wp_enqueue_style('style.css', get_stylesheet_uri());
  // Enqueue additional CSS files if needed
  // wp_enqueue_style('custom-styles', get_template_directory_uri() . '/css/custom-styles.css');
}
add_action('wp_enqueue_scripts', 'your_theme_enqueue_styles');

function your_theme_enqueue_scripts() {
  // Enqueue JavaScript files
  wp_enqueue_script('script', get_template_directory_uri() . '/js/script.js', array('jquery'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'your_theme_enqueue_scripts');
