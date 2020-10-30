<!-- A post loop format for ***PAGES*** will identify what page is being used and display
the relevant content. -->
<?php if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : the_post(); ?>

		<div class="row">
				<div class="col-md-10">

					<!-- Do stuff LOOP -->
				  <h1><?php the_title(); ?></h1>
					<p><?php the_date(); ?></p>

					<!-- *** If a thumbnail exists..... -->
					<?php if ( the_post_thumbnail()) {
						// Render it on the single post page
						the_post_thumbnail();
					} ?>
					<!-- *** thumbnail image conditional ENDS -->

					<p><?php the_content();  ?></p>

			</div>
			<div class="col-md-2">
				  <!-- Single Post Display Sidebar -->
				  <?php if ( is_active_sidebar( 'right-sidebar' ) ) : ?>
				  	<div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
				  		<?php dynamic_sidebar( 'right-sidebar' ); ?>
				  	</div><!-- #primary-sidebar -->
				  <?php endif; ?>
				  <!-- Sidebar ENDS -->
			</div>
			<!-- col 10 ENDS -->
		</div>
		<!-- row ENDS -->
	<!-- For Each Loop For Tags -->
 	<?php

		// Function That makes tags for single posts
		function makeTags () {
			$post_tags = get_the_tags();
			foreach ($post_tags as $key => $value) {
			?>
			<a href="<?php echo get_tag_link($post_tags[$key]->term_id); ?>">
				<span class="btn btn-success"><?php echo $post_tags[$key]->name;  ?></span>
			</a>
			<?php
		  } // forEach ENDS
		} // function ENDS

		if (get_the_tags()) {
			// code...
			makeTags();
		}

	?>

   <!-- Do stuff LOOP ENDS -->
	<?php endwhile; ?>
<?php endif; ?>
