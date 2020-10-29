<!-- A post loop format for ***PAGES*** will identify what page is being used and display
the relevant content. -->
<?php if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : the_post(); ?>
	<!-- Do stuff ... -->
  <h1><?php the_title(); ?></h1>

  <?php
		// Output the content of the php
		// the_content();

		the_excerpt();
	?>

	<a href="<?php the_permalink(); ?>">View Post</a>

   <!-- Do stuff ENDS -->
	<?php endwhile; ?>
<?php endif; ?>
