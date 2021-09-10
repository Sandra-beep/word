
<?php

function enque_styles_custom() {
    
    wp_enqueue_style('style', get_template_directory_uri() . '/css/custom.css', false, '1.1', 'all');

    wp_enqueue_style('custom', get_template_directory_uri() . '/css/bootstrap.css', array(), '0.1.0', 'all');
 
   wp_enqueue_style('fonts', get_template_directory_uri() . '/css/font-awesome.css', array(), '0.1.0', 'all');

    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery.js', array(), '1.0.0', true );
 
   wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js', array(), '1.0.0', true );
}

add_action('wp_enqueue_scripts', 'enque_styles_custom');



function register_menus() {
    register_nav_menus( array(
        'general' => 'General'
    ) );
}

add_action('after_setup_theme', 'register_menus');


add_theme_support( 'post-thumbnails' ); //så att feature image kommer upp i wordpress


