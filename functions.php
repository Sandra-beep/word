
<?php

function enque_styles_custom() { //köa alla styles och javascript filer
    //för att den vanliga style-sheeten ska fungera
    // wp_register_style('style', $uri . '/css/custom.css', false, '1.1', 'all');

    wp_enqueue_style('custom', get_template_directory_uri() . '/css/bootstrap.css', array(), '0.1.0', 'all');

    wp_enqueue_style('style', get_template_directory_uri() . '/css/custom.css', false, '1.1', 'all');
 
    wp_enqueue_style('fonts', get_template_directory_uri() . '/css/font-awesome.css', array(), '0.1.0', 'all');

    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery.js', array(), '1.0.0', true );
 
    wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js', array(), '1.0.0', true );
}


add_action('wp_enqueue_scripts', 'enque_styles_custom'); //kalla på funktionerna



function register_menus() { //registrera menyer i wp
    register_nav_menus( array( //registrera vanliga menun top nav
        'general' => 'General'
    ) );
    register_nav_menu('side_nav_menu', 'Side Nav Menu'); //registrera på sidomeny
}

add_action('after_setup_theme', 'register_menus'); //kalla på menyerna


add_theme_support( 'post-thumbnails' ); //så att feature image kommer upp i wordpress


