<?php
/**
Template Name: Homepage
 */
get_header();
?>
<section class="hero">
  <div class="container-fluid">
    <div class="row center-xs">
      <div class="col-xs-12 hero-text">
        <h1 class="page-title">Hero Title.</h1>
        <h3 class="sub-title">hero subtitle here.</h3>
        <a href="#" class="btn primary">Button Primary</a>
      </div><!--/.col-->
    </div><!--/.row-->
  </div><!--/.container-->
</section><!--/.hero-->

<?php // start loop
  while ( have_posts() ) : the_post(); ?>
  <!--get posts-->
<?php endwhile; // End loop ?>


<?php
//get_sidebar();
get_footer();
?>
