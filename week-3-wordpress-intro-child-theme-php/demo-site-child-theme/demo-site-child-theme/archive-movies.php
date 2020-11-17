<?php
// A file for rendering out movie archives
// The wordpress custom post system will automatically pick this file if the
// index.php/yourcustompostnamehere.php path is used in the browser


/**
 * The template for displaying single posts and pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();
?>

<!-- Conditional Checking For About Page -->

		<main id="site-content" role="main" class="about-page">
				<p>archive-movies.php file in child theme</p>

<!-- Conditional ENDS -->

	<?php

  if ( have_posts() ) {

		while ( have_posts() ) {
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );
		}
	}

	?>

</main><!-- #site-content -->

<?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php get_footer(); ?>
