<!-- A page template format that can be copied and then assigned within the wordpress
GUI -->
<?php /* Template Name: All Movies */ ?>

<?php
get_header();
?>

<main id="site-content" role="main">
<p>all-movies.php file in child-theme/templates dir</p>

	<?php
		$loop = new WP_Query( array( 'post_type' => 'movies', 'posts_per_page' => 10 ) );
		while ( $loop->have_posts() ) : $loop->the_post();

		the_title( '<h2 class="entry-title"><a href="' . get_permalink() . '" title="' . the_title_attribute( 'echo=0' ) . '" rel="bookmark">', '</a></h2>' );
		?>

    <div class="entry-content">
        <?php the_content(); ?>
    </div>
	<?php endwhile; ?>


</main><!-- #site-content -->

<?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php get_footer(); ?>
