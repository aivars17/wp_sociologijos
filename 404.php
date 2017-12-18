<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package WordPress
 * @subpackage Sociology
 * @since Sociology 0.1
 */
get_header();?>
 <section class="hero404">
      <div class="text-hero4">
        <h1><?php _e( '404', 'wp_sociologijos'); ?></h1>
        <h3><?php _e( 'Ooops...', 'wp_sociologijos'); ?></h3>
        <h4><?php _e( 'Puslapio, kurio ieškote nėra!', 'wp_sociologijos'); ?></h4>
        <a href="<?php echo home_url(); ?>"><?php _e( 'Grįžk į pagrindinį puslapį', 'wp_sociologijos'); ?></a>
      </div>
    </section>
    <?php get_footer(); ?>
  </body>
</html>
