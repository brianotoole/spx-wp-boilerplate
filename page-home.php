<?php
/**
Template Name: Homepage
 */
get_header();
?>
<section class="hero full-height vertical-center">
  <div class="container-fluid">
    <div class="row center-xs">
      <div class="col-xs-12 hero-text">
        <h1 class="page-title" id="js-header-scroll-to">Hero Title.</h1>
        <h3 class="sub-title">hero subtitle here.</h3>
        <a href="#" class="btn white rounded">Button White</a>
      </div><!--/.col-->
    </div><!--/.row-->
  </div><!--/.container-->
</section><!--/.hero-->

<section class="home-intro half-height">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-6">
        hi
      </div><!--/.col-->
      <div class="col-xs-12 col-sm-6">
        hello
      </div><!--/.col-->
    </div><!--/.row-->
  </div><!--/.container-->
</section><!--/.hero-->

<section class="home-intro half-height">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-6">
        hi
      </div><!--/.col-->
      <div class="col-xs-12 col-sm-6">
        hello
      </div><!--/.col-->
    </div><!--/.row-->
  </div><!--/.container-->
</section><!--/.hero-->

<section class="home-intro full-height">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-6">
        hi
      </div><!--/.col-->
      <div class="col-xs-12 col-sm-6">
        hello
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
