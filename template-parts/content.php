<section class="about__index">
  <div class="header-mobile">
    <img class="dot" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/yDot.png" alt="">
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
          <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/team_img.png"  alt="" data-toggle="modal" data-target=".video-modal">
        </div>
        </div>
      <div class="col-lg-6 col-md-12">
        <div class="about-text__index">
           <p><?php echo get_theme_mod('Text'); ?></p>
        </div>
        <div class="about-more">
          <a href="#">Skaityti daugiau <span>>></span></a>
        </div>
      </div>

    </div>

  </div>

</section>
<section class="team_index">
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
        <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/team_img3.png" alt="">
      </div>
    </div>
    <div class="col-lg-2 col-md-12 d-none d-lg-block">
      <div class="img-holder">
        <img class="img-fluid " src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/team_img2.png" alt="">
      </div>
    </div>
    <div class="col-lg-2 col-6">
      <div id="img-active" class="img-holder">
        <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/team_img.png" alt="">
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
        <?php $blog_cat = new WP_Query( 'cat=3&posts_per_page=3' ); ?>
        <?php 
        if ( have_posts() ) : while ( $blog_cat->have_posts() ) : $blog_cat->the_post(); ?>
        <div class="col-xl-4 col-md-12">
          <div class="img-holder">
           <?php the_post_thumbnail('post-thumbnail',['class'=>'img-fluid']); ?>
         </div>
         <div class="events-text img-fluid">
          <div class="img-header">
            <h2><?php the_title(); ?></h2>
          </div>
          <div class="img-date">
              <span class="date"><?php echo get_post_meta($post->ID, 'Date', true); ?></span>
              <hr>
              <span class="time"><?php echo get_post_meta($post->ID, 'Time', true); ?></span>
            </div>
            <div class="img-adress">
             <?php the_content(); ?>
           </div>
         </div>
       </div>
     <?php endwhile; endif; ?>
     <?php wp_reset_postdata(); ?>
      </div>
      <div class="events-more">
        <a href="#">Skaityti daugiau <span>>></span></a>
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
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/gallery1.png" alt="">
      </div>
      <div class="gallery-img">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/gallery2.png" alt="">
      </div>
    </div>
    <div class="col-6">
      <div class="gallery-img gallery-img-long">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/gallery3.png" alt="">
      </div>
    </div>
  </div>
  <div class="gallery-more">
    <a href="#">Skaityti daugiau <span>>></span></a>
  </div>
</div>
</section>

<section class="study_index">
  <div class="container">
    <div class="study-circle">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/bDot.png" alt="">
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
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/study_icon1.png" alt="">
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
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/study_icon2.png" alt="">
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
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/study_icon3.png" alt="">
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
<section class="blog_index">
  <div class="blog-line-top">
  </div>
  <div class="blog-line">
  </div>
  <div class="img" style='background-image: url("<?php echo get_stylesheet_directory_uri(); ?>/assets/img/blog.png");'>

  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="blog-header">
          <div class="yDot">      </div>
          <i style="padding-right: 5px;" class="fa fa-circle fa-3x costum-circle" aria-hidden="true"></i>
          <h1>BLOGAS</h1>
        </div>
      </div>
      <?php $blog_cat = new WP_Query( 'cat=2&posts_per_page=3' ); ?>
      <?php 
      if ( have_posts() ) : while ( $blog_cat->have_posts() ) : $blog_cat->the_post(); ?>
            <div class="col-lg-4 col-md-12">
               <div class="img-holder">
                 <?php the_post_thumbnail('post-thumbnail',['class'=>'img-fluid']); ?>
                </div>
              <div class="text img-fluid">
                <h2><?php the_title(); ?></h2>
                <h6><?php the_date(); ?></h6>
                <p><?php the_content(); ?></p>
        </div>
      </div>
      <?php endwhile; endif; ?>
<?php wp_reset_postdata(); ?>
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