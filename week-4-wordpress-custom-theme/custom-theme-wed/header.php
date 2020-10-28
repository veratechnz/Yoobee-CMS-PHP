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
