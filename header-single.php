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
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              APIE
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">RENGINIAI</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">GALERIJA</a>
          </li>
          <li class="nav-item d-none d-lg-block">
            <a class="nav-link logo-link" href="#">
              <div class="logo-holder">
                <img src='<?php echo get_template_directory_uri();?>/assets/img/logo.png' alt="">
              </div>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="study.html">STUDIJOS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">BLOGAS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">ATSILIEPIMAI</a>
          </li>
      </div>
      <div class="registration-block hidden-dm-down d-none d-lg-block">
        <a href="#">REGISTRUOKIS</a>
      </div>
    </ul>
    </nav>
