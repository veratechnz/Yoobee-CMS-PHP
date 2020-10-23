<?php
// A query and loop format that will work on a wordpress page
// for looping through and outputting posts
  $args = array(
      'post_type' => 'post'
  );
  $post_query = new WP_Query($args);
  if($post_query->have_posts() ) {
      while($post_query->have_posts() ) {
          $post_query->the_post();
          ?>
          <!-- Rendering out different parts of a post -->
          <h2><?php the_title(); ?></h2>
          <p><?php the_content(); ?></p>
          <p><?php the_date(); ?></p>
          <p><?php the_time(); ?></p>
          <?php
          }
      }
