<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php wp_title(); ?></title>
  <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700" rel="stylesheet">
  <?php wp_head(); ?>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-yellow">
    <!-- <a class="navbar-brand" href="#">Navbar</a> -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav m-md-auto mr-auto">
        <?php $args = array(
          'theme_location'  => 'left-menu',
          'container' => null,
          'items_wrap' => '%3$s',
        );
        wp_nav_menu( $args );?>
        <a class="nav-link logo-link" href="#">
          <div class="logo-holder">
            <img src='<?php echo get_template_directory_uri();?>/assets/img/logo.png' alt="">
          </div>
        </a>
        <?php $args = array(
          'theme_location'  => 'right-menu',
          'container' => null,
          'items_wrap' => '%3$s',
        );
        wp_nav_menu( $args );?>
        
        
      </ul>
    </div>
    <div class="registration-block hidden-dm-down d-none d-lg-block">
      <a href="#">REGISTRUOKIS</a>
    </div>
  </nav>