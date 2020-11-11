<!-- A post loop format for ***PAGES*** will identify what page is being used and display
the relevant content. -->
<?php if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : the_post(); ?>
	<!-- Do stuff ... -->
  <h1><?php the_title(); ?></h1>

   <?php the_content();  ?>
   <!-- Do stuff ENDS -->
	<?php endwhile; ?>
<?php endif; ?>
