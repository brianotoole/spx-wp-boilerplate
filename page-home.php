<?php
/**
Template Name: Homepage
 */
get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php // start loop
      while ( have_posts() ) : the_post(); ?>

    <?php endwhile; // End loop ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
//get_sidebar();
get_footer();
?>
