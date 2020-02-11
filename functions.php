<?php

/*
 ====================================
            Scripts enqueue 
 ====================================
 */
function portfolioss_script_enqueue(){

    wp_enqueue_style('bootstrap-styles', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '4.3.1', 'all');
    wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/portfolioss.css', array(), '1.0.0', 'all');

    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/js/bootstrap.js', array(), '4.3.1', true);
    wp_enqueue_script('portfolio-js', get_template_directory_uri() . '/js/portfolioss.js', array(), '1.0.0', true);
    wp_enqueue_script('jquery');
    
}

add_action('wp_enqueue_scripts', 'portfolioss_script_enqueue');

/*
 ====================================
        Theme Support options 
 ====================================
 */

 function portfolioss_theme_setup(){
    add_theme_support('menus');
    register_nav_menu('primary', 'Primary Header Navigation');
 }

 add_action('init', 'portfolioss_theme_setup');

 //If i activate it inside funciton.php i dont need to add action and call it from function
 add_theme_support('custom-background');
 add_theme_support('custom-header');
 add_theme_support('post-thumbnails');

 