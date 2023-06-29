<?php

function exrworld_register_styles(){
    wp_enqueue_style('main', get_template_directory_uri().'/main.css',array(), '1.0','all');
    // Google Fonts
    wp_enqueue_style('exrworld-googlefonts', "https://fonts.googleapis.com/css2?family=Sigmar+One&display=swap", array(), '1.0', 'all');
    wp_enqueue_style('exrworld-googlefonts2', "https://fonts.googleapis.com/css2?family=Open+Sans&family=Sigmar+One&display=swap", array(), '1.0', 'all');
    
    // Font Awesome
    wp_enqueue_style('font_awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css',false,'4.7','all');
};
add_action('wp_enqueue_scripts', 'exrworld_register_styles');

function exrworld_register_scripts(){
    wp_enqueue_script('main', get_template_directory_uri().'/main.js',array(), 'all', true);
};
add_action('wp_enqueue_scripts', 'exrworld_register_scripts');

function exrworld_menus(){
    $locations = array(
        'primary' => 'Primary Menu',
        'footer' => 'Footer Menu'
    );
    register_nav_menus($locations);
};
add_action('init', 'exrworld_menus');

function exrworld_theme_support() {
    //Allow post featured images
    add_theme_support('post-thumbnails');
};
add_action('after_setup_theme', 'exrworld_theme_support');

?>