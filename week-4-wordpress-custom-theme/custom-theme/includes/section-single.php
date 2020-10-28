<!-- A post loop format for ***PAGES*** will identify what page is being used and display
the relevant content. -->
<?php if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : the_post(); ?>
	<!-- Do stuff ... -->
  <h1><?php the_title(); ?></h1>
	<p><?php the_date(); ?></p>

  <?php the_content();  ?>

	<!-- For Each Loop For Tags -->
 	<?php
		$post_tags = get_the_tags();
		foreach ($post_tags as $key => $value) {
	?>
	<a href="<?php echo get_tag_link($post_tags[$key]->term_id); ?>">
		<span class="btn btn-primary"><?php echo $post_tags[$key]->name;  ?></span>
	</a>
	<?php
		}
	?>
	<!-- For Each Loop ENDS -->

	<?php
		var_dump(get_the_category());
	?>

   <!-- Do stuff ENDS -->
	<?php endwhile; ?>
<?php endif; ?>
