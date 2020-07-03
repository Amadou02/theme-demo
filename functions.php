<?php

// fonction pour lier les scripts style parent et bootstrap

function demo_enqueue_script(){
    wp_enqueue_style('parent-style', get_template_directory_uri(). '/style.css');
    wp_enqueue_style('bootswatch', get_stylesheet_directory_uri() . '/assets/libs/css/bootstrap.min.css');
    wp_enqueue_script('bootstrap-js', get_stylesheet_directory_uri() . '/assets/libs/js/bootstrap.bundle.min.js', array('jquery'), null, true);
}

add_action('wp_enqueue_scripts', 'demo_enqueue_script');

/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
	require_once get_stylesheet_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );

register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'demo' ),
) );
