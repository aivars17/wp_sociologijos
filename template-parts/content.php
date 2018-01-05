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
          <?php $apie = new WP_Query( 'page_id=15' ); ?>
          <?php 
            if ( have_posts() ) {
              while ( $apie->have_posts() ) {
                $apie->the_post(); ?>
                 <h1><?php the_title(); ?><i class="fa fa-circle" aria-hidden="true"></i></h1>
                    </div>
                    <div class="video-holder">
                      <?php the_post_thumbnail('post-thumbnail',['class'=>'img-fluid']); ?>
                    </div>
                    </div>
                  <div class="col-lg-6 col-md-12">
                    <div class="about-text_index">
                       <p><?php the_content(); ?></p>
                    </div>
                    <div class="about-more">
                      <a href="<?php echo get_permalink();?>">Skaityti daugiau <span>>></span></a>
                    </div>
                  </div>
                  <?php 
              } // end while
            } // end if
            ?>
         

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
      <div style="display: block;" class="team-slide-title">
        <h4 ><span>”</span>JUSTE</h4>
        <hr>
        <p class="team-slide-text">Studijuoju Vilniaus universitete sociologiją - labai
        įdomu, nesigailiu. Laivalaikiu mėgstu žiūrėti ﬁlmus,
        gaminti ir fotografuoti. Džiaugiuosi galėdama
        derinti ir mokslus, ir pomėgius, viskam skirdama
        laiko, kartais net juos jungdama“</p>
      </div>
      <div class="team-slide-title">
        <h4 ><span>”</span>TOMAS</h4>
        <hr>
        <p class="team-slide-text">Sveiki, esu antro kurso studentė, studijuoju slaugą, taigi turiu patirties darbe darželyje su skirtingo amžiaus vaikais, su vaikais, kurie turi fizinės raidos sutrikimų ir pan. Esu pareiginga“</p>
      </div>
      <div class="team-slide-title">
        <h4 ><span>”</span>Aistė</h4>
        <hr>
        <p class="team-slide-text">Verčiu anglų-lietuvių bei lietuvių-anglų tekstus, ruošiu namų darbus, skaidres, rašau rašinėlius, referatus. Už papildomą kainą galiu darbus atlikti skubiai, dažniausiai tą pačią “</p>
    </div>
    </div>
  </div>
</div>
<div class="container img-mobile">
  <div class="row">
    <div class="col-lg-1 col-3">
      <div class="icon-holder-left">
        <i onclick="plusDivs(-1)" class="fa fa-4x fa-angle-left cursor-hand" aria-hidden="true"></i>
      </div>
    </div>
    <div style="opacity: 1;" class="col-lg-2 col-md-12 d-none d-lg-block mySlides">
      <div class="img-holder">
        <img  class="img-fluid " src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/team_img3.png" alt="">
      </div>
      <div class="team-name img-fluid">
        JUSTE
      </div>
    </div>
    <div class="col-lg-2 col-md-12 d-none d-lg-block mySlides">
      <div class="img-holder ">
        <img class="img-fluid " src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/team_img2.png" alt="">
      </div>
      <div class="team-name img-fluid">
        TOMAS
      </div>
    </div>
    <div class="col-lg-2 col-6 mySlides">
      <div id="img-active" class="img-holder">
        <img  class="img-fluid " src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/team_img.png" alt="">
      </div>
      <div class="team-name img-fluid">
        AISTE
      </div>
    </div>
    <div class="col-lg-1 col-3">
      <div class="icon-holder">
        <i onclick="plusDivs(1)" class="fa fa-4x fa-angle-right cursor-hand" aria-hidden="true"></i>
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
        <?php $renginiai = new WP_Query('post_type=renginiai&posts_per_page=3');  ?>
        
        <?php 
        if ( have_posts() ) : while ( $renginiai->have_posts() ) : $renginiai->the_post(); ?>
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
             <?php the_excerpt(); ?>
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
        <img src="<?php if (get_theme_mod( 'front-gallery-s-1' )) : echo get_theme_mod( 'front-gallery-s-1'); else: echo get_stylesheet_directory_uri() .'/assets/img/gallery1.png'; endif; ?>" alt="">
      </div>
      <div class="gallery-img">
       <img src="<?php if (get_theme_mod( 'front-gallery-s-2' )) : echo get_theme_mod( 'front-gallery-s-2'); else: echo get_stylesheet_directory_uri() .'/assets/img/gallery2.png'; endif; ?>" alt="">
      </div>
    </div>
    <div class="col-6">
      <div class="gallery-img gallery-img-long">
        <img src="<?php if (get_theme_mod( 'front-gallery-s-3' )) : echo get_theme_mod( 'front-gallery-s-3'); else: echo get_stylesheet_directory_uri() . '/assets/img/gallery3.png'; endif; ?>" alt="">
      </div>
    </div>
  </div>
  <div class="gallery-more">
    <a href="#">Skaityti daugiau <span>>></span></a>
  </div>
</div>
</section>

<ul id="sidebar">
<?php if ( ! dynamic_sidebar() ) : ?>
  <li>{static sidebar item 1}</li>
  <li>{static sidebar item 2}</li>
<?php endif; ?>
</ul>
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
                <p><?php the_excerpt(); ?></p>
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
        <i onclick="slideComments(-1)" class="fa fa-4x fa-angle-left cursor-hand" aria-hidden="true"></i>
      </div>
    </div>
    
    <div class="col-md-8 center">
      <div class="feed-text">
        <div class="yDot">      </div>
        <i class="fa fa-circle fa-3x costum-circle " aria-hidden="true"></i>
        <h1><span>”</span>ASTSILIEPIMAI</h1>
        <?php
          $args = array(
             // args here
          );

          // The Query
          $comments_query = new WP_Comment_Query;
          $comments = $comments_query->query( $args );
           
          // Comment Loop
          if ( $comments ) {
            echo "<div class='slide-comments'>";
            echo '<p>' . $comments[0]->comment_content . '</p>';
            echo '<h6>' . $comments[0]->comment_author . '</h6>';
            echo "</div>";
            foreach ( $comments as $comment ) {
              echo "<div style='display:none;' class='slide-comments'";
              echo '<p>' . $comment->comment_content . '</p>';
              echo '<h6>' . $comment->comment_author . '</h6>';
              echo "</div>";
            }
          } else {
            echo 'No comments found.';
          }
        ?>
      </div>
    </div>
    <div class="col-md-2">
      <div class="icon-holder-right d-none d-lg-block">
        <i onclick="slideComments(1)" class="fa fa-4x fa-angle-right cursor-hand" aria-hidden="true"></i>
      </div>
    </div>
  </div>

</div>
</section>