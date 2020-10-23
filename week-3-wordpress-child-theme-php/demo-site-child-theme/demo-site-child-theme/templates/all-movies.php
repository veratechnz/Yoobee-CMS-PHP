<!-- A page template format that can be copied and then assigned within the wordpress
GUI -->
<?php /* Template Name: All Movies */ ?>
<!-- This template has been created for the sole purpose of displaying all posts from a custom type on one page.
The loop below *** will make a query to the specific post type, in this case 'movies'.
The loop then outputs all of the custom post info as per Wordpress loop syntax.
-->
<?php
get_header();
?>

<main id="site-content" role="main">
<p>all-movies.php file in child-theme/templates dir</p>

	<?php
	// Query to correct CPT
		$loop = new WP_Query( array( 'post_type' => 'movies', 'posts_per_page' => 10 ) );
		while ( $loop->have_posts() ) : $loop->the_post();
		// Outputting various aspects of the custom post type
		the_title( '<h2 class="entry-title"><a href="' . get_permalink() . '" title="' . the_title_attribute( 'echo=0' ) . '" rel="bookmark">', '</a></h2>' );
		?>
		<!-- Outputting the content of the custom post type -->
    <div class="entry-content">
        <?php the_content(); ?>
    </div>
	<?php endwhile; ?>


</main><!-- #site-content -->

<?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php get_footer(); ?>
