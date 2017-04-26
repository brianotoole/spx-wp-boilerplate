<?php
get_header();
?>
<section class="page-header">
  <div class="container-fluid">
    <div class="row center-xs">
      <div class="col-xs-12 hero-text">
        <h1 class="page-title"><?php the_title(); ?></h1>
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
