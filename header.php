<?php ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

	<header class="header" role="banner">
    <div class="container">
		<nav class="nav" role="navigation">
      <div class="row">
        <div class="col-xs-2">
          <span class="logo">Logo</span>
        </div><!--/.col-->
        <div class="col-xs-10">
          <?php wp_nav_menu( array( 'menu_name' => 'primary', 'menu_class' => 'nav-primary') ); ?>
          <div class="row end-xs">
            <span class="nav-toggle col-xs-10">Menu</span>
          </div><!--/.row-->
        </div><!--/.col-->
      </div><!--/.row-->
		</nav><!--/.nav-->
  </div>
	</header><!--/.header-->

  <div class="nav-mobile row">
    <div class="col-xs-12">
    </div><!--/.col-->
  </div><!--/.nav-mobile-->

  <div class="site-content">
