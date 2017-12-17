<?php
/**
 * Sociology functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * When using a child theme you can override certain functions (those wrapped
 * in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before
 * the parent theme's file, so the child theme functions would be used.
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @link https://codex.wordpress.org/Child_Themes
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are
 * instead attached to a filter or action hook.
 *
 * For more information on hooks, actions, and filters,
 * {@link https://codex.wordpress.org/Plugin_API}
 *
 * @package WordPress
 * @subpackage Sociology
 * @since Sociology 0.1
 */

/**
 * Sociology only works in WordPress 4.4 or later.
 */

/**
 * Proper way to enqueue scripts and styles
 */
function theme_sociology_scripts() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    wp_enqueue_script( 'script', 'https://use.fontawesome.com/da7d68fc96.js', array ( 'jquery' ), 1.1, true);
    
}
add_action( 'wp_enqueue_scripts', 'theme_sociology_scripts' );