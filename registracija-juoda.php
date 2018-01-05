<?php /* Template name: Registracija_juoda */ ?>
    <?php get_header('single'); ?>
    <body>

        <div class="gradient">
            <div class="registration">
                <div class="headline-registration">
                    <h1>REGISTRACIJA<i class="fa fa-circle"></i></h1>
                </div>

                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <div><?php the_content(); ?></div>
                <?php endwhile; endif; ?>

            </div>
        </div>
    <?php get_footer(); ?>
