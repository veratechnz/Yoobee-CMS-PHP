<?php

// Adding the styles for the custom theme
// ** Notice the 'get_template_directory_uri()' = parent theme folder
function add_styles() {
  // Import bootstrap from child theme
  // Arguments explained at: https://developer.wordpress.org/reference/functions/wp_register_style/
   wp_register_style( 'boot-style', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all');
   wp_enqueue_style('boot-style');
}

// Call the styles function
add_action( 'wp_enqueue_scripts', 'add_styles' );

// Adding javascript for the custom theme
// Adding a custom javascript into the child theme folder for use
// ** Notice the 'get_stylesheet_directory_uri()' = child theme folder
function add_scripts() {
  // Import child theme .js files...
  // Arguments explained at: https://developer.wordpress.org/reference/functions/wp_register_script/
    wp_register_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), false, false );
    wp_register_script( 'custom-js', get_template_directory_uri() . '/js/custom.js', array('jquery'), false, false );
    wp_enqueue_script('custom-js');
    wp_enqueue_script('bootstrap-js');
}

// Call the .js function
add_action( 'wp_enqueue_scripts', 'add_scripts' );
