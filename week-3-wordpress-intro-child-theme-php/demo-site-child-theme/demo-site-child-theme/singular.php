<?php
// The singlular.php file is a central file for the twentytwenty theme.
// It is referenced when 'pages' are output/rendered by wordpress.

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
	<?php
		// If the page is 'about'
		if (is_page('about')) {
	?>
		<main id="site-content" role="main" class="about-page">
				<p>singular.php file in child theme</p>
	<?php
	} else {
	?>
		<main id="site-content" role="main">
			<p>singular.php file in child theme</p>
	<?php
	}
	?>
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
