<!-- Header section -->
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Custom Theme With Wordpress</title>
    <!-- This call injects wordpresses functions.php enqueue into the header -->
    <?php wp_head(); ?>
  </head>
  <body>
    <header>
      
      <!-- Custom Logo Begins -->
      <a href="<?php echo home_url(); ?>">
        <?php
          $custom_logo_id = get_theme_mod( 'custom_logo' );
          $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
        ?>
        <img src="<?php echo $image[0]; ?>" alt="">
      </a>
      <!-- Custom Logo ENDS -->

      <!-- Including the wordpress menu -->
      <?php
        wp_nav_menu(
          array(
            'theme_location' => 'upper-menu',
          )
        );
       ?>
       <!-- Menu Code ENDS -->

    </header>
