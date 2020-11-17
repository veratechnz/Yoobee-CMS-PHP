<!-- A page template format that can be copied and then assigned within the wordpress
GUI -->
<?php /* Template Name: Food Page Template */ ?>

<!-- This is a page template. Them comment within the php code above will set a page template within the cms
The code below was taken from singular.php in order to support the display of page templates. 
 -->

<?php
get_header();
?>

<main id="site-content" role="main">
<p>Food Page Template Is Working....</p>

	<?php
  // Including a file within wordpress
  include get_stylesheet_directory().'/post-loop-for-pages-inc.php';

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
