<?php
function bpc_quality_pro_scripts() {
    // Enqueue main stylesheet
    wp_enqueue_style('bpc-quality-pro-style', get_stylesheet_uri());

    // Enqueue main JavaScript file
    wp_enqueue_script('bpc-quality-script', get_template_directory_uri() . '/main.js', array('jquery'), wp_get_theme()->get('Version'), true);

    // Enqueue mobile navigation JavaScript
    wp_enqueue_script('bpc-mobile-nav', get_template_directory_uri() . '/menu.js', array('jquery'), wp_get_theme()->get('Version'), true);

    // Enqueue FontAwesome Stylesheet
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css');
}
add_action('wp_enqueue_scripts', 'bpc_quality_pro_scripts');

// Register Menus in functions.php
function bpc_quality_pro_menus() {
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'bpc-quality-pro'),
    ));
}
add_action('init', 'bpc_quality_pro_menus');
?>