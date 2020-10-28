<?php

// Adding the styles for the custom theme
// ** Notice the 'get_template_directory_uri()' = parent theme folder
function add_styles() {
  // Import bootstrap from child theme
  // Arguments explained at: https://developer.wordpress.org/reference/functions/wp_register_style/
   wp_register_style( 'boot-style', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all');
   wp_enqueue_style('boot-style');

   // All custom styles
   wp_register_style( 'custom-style', get_template_directory_uri() . '/css/custom.css', array(), false, 'all');
   wp_enqueue_style('custom-style');
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



// Menu menu support
// Menus will now appear in the wordpress admin
add_theme_support('menus');

// Registering a main upper menu and mobile menu with wordpress admin
register_nav_menus(
    array(
      // Id of the menu || The displayed name of the menu
      'upper-menu'=> 'Upper Menu',
      'upper-mobile-menu' => 'Upper Mobile Menu',
    )
);
