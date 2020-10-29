<?php
// A page template for the front home page, only shows for the home page or front page for word press
// A wordpress function that will get the header and footer content
get_header();
?>

<!-- Renders the current post/page title -->
<!-- https://developer.wordpress.org/reference/functions/the_title/ -->

<!-- References includes folder section- then content () same file name -->
<!-- Loads a template part into a template. https://developer.wordpress.org/reference/functions/get_template_part/ -->
<?php echo 'This is archive.php'; ?>

<?php get_template_part('includes/section', 'archive'); ?>

<?php previous_posts_link(); ?>
<?php next_posts_link(); ?>

<?php
get_footer();
?>
