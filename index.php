<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Sociology
 * @since Sociology 0.1
 */
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sociologija</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700" rel="stylesheet">
    <script src="https://use.fontawesome.com/da7d68fc96.js"></script>
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
<section class="hero">
  <div class="hero-text">
    <h1>SOCIOLOGIJOS AKADEMIJA</h1>
  </div>
  <div class="hero-line">

  </div>
</section>
<section class="about">
  <div class="header-mobile">
    <img class="dot" src="assets/img/yDot.png" alt="">
    <!-- <i class="fa fa-circle fa-3x costum-circle" aria-hidden="true"></i> -->
    <h1>APIE</h1>
  </div>
  <div class="container video-mobile">
    <div class="row">
      <div class="col-lg-6 col-md-12">
        <div class="rotated-about">
          <h1>APIE<i class="fa fa-circle" aria-hidden="true"></i></h1>
        </div>
        <div class="video-holder">
          <img class="img-fluid" src="assets/img/team_img.png"  alt="" data-toggle="modal" data-target=".video-modal">
        </div>
        </div>
      <div class="col-lg-6 col-md-12">
        <div class="about-text">
          Sociologijos akademija - Neformali
          organizacija, siekianti parodyti moksleiviams
          kasdienio gyvenimo aspektus iš sociologijos
          mokslo perspektyvos.
        </div>
        <div class="about-more">
          <a href="#">Skaityti daugiau <span>>></span></a>
        </div>
      </div>

    </div>

  </div>

</section>
<section class="team">
  <div class="team-line">

  </div>
<div class="container">

  <div class="row justify-content-end">
    <div class="col-lg-6 col-md-12 team-header">
      <div class="bDot">      </div>
      <h1><i class="fa fa-circle costum-circle" aria-hidden="true"></i>KOMANDA</h1>
    </div>
    <div class="col-lg-6 col-md-12 team-text">
      <div class="team-line2">

      </div>
      <h4><span>”</span>Aistė</h4>
      <hr>
      <p>Studijuoju Vilniaus universitete sociologiją - labai
      įdomu, nesigailiu. Laivalaikiu mėgstu žiūrėti ﬁlmus,
      gaminti ir fotografuoti. Džiaugiuosi galėdama
      derinti ir mokslus, ir pomėgius, viskam skirdama
      laiko, kartais net juos jungdama“</p>
    </div>
  </div>
</div>
<div class="container img-mobile">
  <div class="row">
    <div class="col-lg-1 col-3">
      <div class="icon-holder-left">
        <i class="fa fa-4x fa-angle-left" aria-hidden="true"></i>
      </div>
    </div>
    <div class="col-lg-2 col-md-12 d-none d-lg-block">
      <div class="img-holder">
        <img class="img-fluid" src="assets/img/team_img3.png" alt="">
      </div>
    </div>
    <div class="col-lg-2 col-md-12 d-none d-lg-block">
      <div class="img-holder">
        <img class="img-fluid " src="assets/img/team_img2.png" alt="">
      </div>
    </div>
    <div class="col-lg-2 col-6">
      <div id="img-active" class="img-holder">
        <img class="img-fluid" src="assets/img/team_img.png" alt="">
      </div>
      <div class="team-name img-fluid">
        AISTE
      </div>
    </div>
    <div class="col-lg-1 col-3">
      <div class="icon-holder">
        <i class="fa fa-4x fa-angle-right" aria-hidden="true"></i>
      </div>
    </div>

  </div>
  <div class="team-more">

    <a href="team.html">Skaityti daugiau</a>

  </div>
</div>
<div class="team-line-bottom">

</div>
<div class="team-line-bottom2">

</div>
</section>
<section class="events">
  <div class="events-header">
    <div class="yDot">

    </div>
    <h1><i class="fa fa-circle costum-circle" aria-hidden="true"></i>Renginiai</h1>
  </div>
<div class="container">
  <div class="row">
    <div class="col-xl-4 col-md-12">
      <div class="img-holder">
        <img class="img-fluid" src="assets/img/event1.png" alt="">
      </div>
      <div class="events-text img-fluid">
        <div class="img-header">
          <h2>Skulbturos:<br>
          mada ar pasipriesimas?</h2>
        </div>
        <div class="img-date">
          <span class="date">04 01</span>
          <hr>
          <span class="time">10:45 - 17:00</span>
        </div>
        <div class="img-adress">
          VU Filosofijos fakultetas (Universiteto g. 9/1, 301 aud.)
        </div>
      </div>
    </div>
    <div class="col-xl-4 col-md-12">
      <div class="img-holder">
        <img class="img-fluid" src="assets/img/event2.png" alt="">
      </div>
      <div class="events-text img-fluid">
        <div class="img-header">
          <h2>Skulbturos:<br>
          mada ar pasipriesimas?</h2>
        </div>
        <div class="img-date">
          <span class="date">04 01</span>
          <hr>
          <span class="time">10:45 - 17:00</span>
        </div>
        <div class="img-adress">
          VU Filosofijos fakultetas(Universiteto g. 9/1, 301 aud.)
        </div>
      </div>
    </div>
    <div class="col-xl-4 col-md-12">
      <div class="img-holder">
        <img class="img-fluid" src="assets/img/event3.png" alt="">
      </div>
      <div class="events-text img-fluid">
        <div class="img-header">
          <h2>Skulbturos:<br>
          mada ar pasipriesimas?</h2>
        </div>
        <div class="img-date">
          <span class="date">04 01</span>
          <hr>
          <span class="time">10:45 - 17:00</span>
        </div>
        <div class="img-adress">
          VU Filosofijos fakultetas(Universiteto g. 9/1, 301 aud.)
        </div>
      </div>
    </div>
    </div>
    <div class="events-more">
      <a href="#">Skaityti daugiau <span>>></span></a>
    </div>
  </div>
</div>
</section>
<section class="gallery">
  <div class="gallery-line-top">

  </div>
  <div class="gallery-line">

  </div>
<div class="container">
  <div class="row">
    <div class="col-md-4 col-12">
      <div class="gallery-header">
        <div class="yDot">      </div>

        <h1><i class="fa fa-circle costum-circle" aria-hidden="true"></i>Galerija</h1>
      </div>
    </div>
  </div>
  <div class="row justify-content-center">
    <div class="col-6 ">
      <div class="gallery-img">
        <img src="assets/img/gallery1.png" alt="">
      </div>
      <div class="gallery-img">
        <img src="assets/img/gallery2.png" alt="">
      </div>
    </div>
    <div class="col-6">
      <div class="gallery-img gallery-img-long">
        <img src="assets/img/gallery3.png" alt="">
      </div>
    </div>
  </div>
  <div class="gallery-more">
    <a href="#">Skaityti daugiau <span>>></span></a>
  </div>
</div>
</section>

<section class="study">
  <div class="container">
    <div class="study-circle">
      <img src="assets/img/bDot.png" alt="">
      <!-- <i class="fa fa-circle fa-3x costum-circle" aria-hidden="true"></i> -->
      <h1>STUDIJOS</h1>
      <!-- <i class="fa fa-circle fa-3x costum-circle" aria-hidden="true"></i> -->
    </div>
    <div class="row">

        <div class="col-lg-4 col-md-12">
          <div class="rotated-study">
            <h1>STUDIJOS<i class="fa fa-circle" aria-hidden="true"></i></h1>
          </div>
          <div class="icon-holder">
            <img src="assets/img/study_icon1.png" alt="">
          </div>
          <div class="icon-text">
            <h3>Stojimu balai</h3>
            <h5>Konkursinio balo sandara</h5>
            <h5>Mokslinio projekto vertinimas</h5>
            <h5>Mokslo darbu vertinimas</h5>
          </div>
        </div>
      <div class="col-lg-4 col-md-12">
        <div class="icon-holder">
          <img src="assets/img/study_icon2.png" alt="">
        </div>
        <div class="icon-text">
          <h3>Stojimu balai</h3>
          <h5>Konkursinio balo sandara</h5>
          <h5>Mokslinio projekto vertinimas</h5>
          <h5>Mokslo darbu vertinimas</h5>
        </div>
      </div>
      <div class="col-lg-4 col-md-12">
        <div class="icon-holder">
          <img src="assets/img/study_icon3.png" alt="">
        </div>
        <div class="icon-text">
          <h3>Stojimu balai</h3>
          <h5>Konkursinio balo sandara</h5>
          <h5>Mokslinio projekto vertinimas</h5>
          <h5>Mokslo darbu vertinimas</h5>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="blog">
  <div class="blog-line-top">
  </div>
  <div class="blog-line">
  </div>
  <div class="img" style='background-image: url("assets/img/blog.png");'>

  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="blog-header">
          <div class="yDot">      </div>
          <i style="padding-right: 5px;" class="fa fa-circle fa-3x costum-circle" aria-hidden="true"></i>
          <h1>BLOGAS</h1>
        </div>
      </div>
      <div class="col-lg-4 col-md-12">
        <div class="img-holder">
          <img class="img-fluid" src="assets/img/blog1.png" alt="">
        </div>
        <div class="text img-fluid">
          <h2>Prisimenant neabejingumo Mokytoją</h2>
          <h6>2017 Kovo 14</h6>
          <p>Lygiai prieš metus mus paliko talentingas
          sociologas, mūsų mylimas bičiulis prof.
          Algimantas Valantiejus. Paliko ﬁziškai, bet
          jo darbai ir bičiulystės šviesa pasiliko...</p>
        </div>
      </div>
      <div class="col-lg-4 col-md-12">
        <div class="img-holder">
          <img class="img-fluid" src="assets/img/blog2.png" alt="">
        </div>
        <div class="text img-fluid">
          <h2>„Vatniko“ nuotykiai Lietuvoje: kaip
ginklas prieš...</h2>
          <h6>2017 Vasario 21</h6>
          <p>2012 m. gegužę internete pasirodė „Raška –
kvadratinis vatinukas“– pirmasis „vatniko“
memas, o nuo 2013 m. lapkričio pabaigos
(prasidėjus neramumais Ukrainoje)...</p>
        </div>
      </div>
      <div class="col-lg-4 col-md-12">
        <div class="img-holder">
          <img class="img-fluid" src="assets/img/blog3.png" alt="">
        </div>
        <div class="text img-fluid">
          <h2>Kodėl mes, Homo sapiens,
dominuojame...</h2>
          <h6>2017 Sausio 30</h6>
          <p>„Mes laikome akivaizdžiomis šias tiesas: visi
žmonės išsivystė skirtingi ir yra gimę su tam
tikromis kintamomis savybėmis, yra gyvi ir
siekia malonumų...</p>
        </div>
      </div>
      <div class="col-md-12">
        <div class="blog-more float-right">
          <a href="#">Skaityti daugiau <span>>></span></a>
        </div>
      </div>

    </div>

  </div>
</div>
</section>
<section class="feedback">
  <div class="feed-line-top">

  </div>
  <div class="feed-line">

  </div>
<div class="container">
  <div class="row align-items-center">
    <div class="col-md-2">
      <div class="icon-holder-left d-none d-lg-block">
        <i class="fa fa-4x fa-angle-left" aria-hidden="true"></i>
      </div>
    </div>
    <div class="col-md-8 center">
      <div class="feed-text">
        <div class="yDot">      </div>
        <i class="fa fa-circle fa-3x costum-circle" aria-hidden="true"></i>
        <h1><span>”</span>ASTSILIEPIMAI</h1>
        <p>Paskaitos niekada neprailgdavo, įdomūs svečiai ne tik suteikė
        praktinių žinių, bet ir įkvėpė pačiai analizuoti ir
        mokytis iš savo aplinkos. Puikiai sugalvotos užduotys, linksmos akimirkos ir
        draugiškas kolektyvas - apibūdina „Sociologijos akademiją.</p>
        <h6>Nida</h6>
      </div>
    </div>
    <div class="col-md-2">
      <div class="icon-holder-right d-none d-lg-block">
        <i class="fa fa-4x fa-angle-right" aria-hidden="true"></i>
      </div>
    </div>
  </div>

</div>
</section>
<section class="contacts">
  <div class="contact-line">

  </div>
<div class="container">
  <div class="row">
    <div class="col-12">
      <div class="yDot">      </div>
      <i class="fa fa-circle fa-3x costum-circle" aria-hidden="true"></i>

      <h1>KONTAKTAI</h1>
    </div>
    <div class="col-lg-3 col-md-12">
      <p><div class="place">

      </div>VU Filosoﬁjos fakultetas,<br>
      Universiteto g. 9/1</p>
    </div>
    <div class="col-lg-3 col-md-12">
      <p><div class="mail">

      </div>www.fsf.vu.lt</p>
    </div>
    <div class="col-lg-3 col-md-12">
      <p><div class="fb">

      </div>FB: Sociologijos Akademija</p>
    </div>
    <div class="col-lg-3 col-md-12">
      <p><div class="phone">

      </div>tel.: best desgigner ever</p>
    </div>
  </div>
</div>
</section>
<!-- Large modal -->

<div class="modal fade video-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      ...
    </div>
  </div>
</div>
<?php wp_footer(); ?>
  </body>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

</html>
