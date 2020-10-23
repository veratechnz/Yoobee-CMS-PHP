<?php
// Functions PHP

// Is adding **css** from the parent
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

function my_theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    // Pull in Bootstrap css
    // wp_enqueue_style( 'boot-style', get_stylesheet_directory_uri() . '/css/bootstrap.min.css' );
}

// Is adding in a **custom.js** file ***||Child Theme||***
function my_custom_scripts() {
    wp_enqueue_script( 'custom-js', get_stylesheet_directory_uri() . '/js/custom.js', array( 'jquery' ),'',true );
    // Pull in Bootstrap Javascript
    // wp_enqueue_script( 'boot-js', get_stylesheet_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ),'',true );
}

add_action( 'wp_enqueue_scripts', 'my_custom_scripts' );

// This function will create a custom post type of movies
function create_post_type () {

  // This is a wordpress function to register a custom post...
  register_post_type('movies',

    array(
    'labels' => array(
      'name' => __('Movies'),
      'singular_name' => __('Movie')
    ),
    // Various settings for your new post type
    'hierarchical' => true,
    'public' => true,
    'has_archive' => true,
    'menu_icon' => 'dashicons-video-alt2',
    'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
    ) // array ENDS

  ); // register_post_type ENDS

} // function ENDS

// A function for organising our movies
function movie_taxonomy () {

  $args = array(
    'labels' => array(
      // Name settings for the taxonomy
      'name' => 'Genres',
      'singular_name' => 'Genre'
    ),
    // Additional settings for the taxonomy
    'public' => true,
    'hierarchical' => true,
    'show_in_nav_menus' => true,
    'show_ui' => true,
    'show_tagcloud' => true,
    'rewrite' => array('slug' => 'videos', 'with_front' => true),
  ); // $args ENDS

  register_taxonomy('Genres', array('movies'), $args);

} // function ENDS

// Call new post type and apply new taxonomy...
add_action('init', 'create_post_type');
add_action('init', 'movie_taxonomy');

?>
