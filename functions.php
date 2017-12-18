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
    wp_enqueue_style( 'bootstrap_css', get_template_directory_uri() . '/assets/bootstrap/css/bootstrap.css',false,'4.1','all');
    wp_enqueue_style( '404_css', get_template_directory_uri() . '/assets/css/404.css',false,'4.0','all');
    wp_enqueue_style( 'blog_css', get_template_directory_uri() . '/assets/css/blog-style.css',false,'4.0','all');
    wp_enqueue_style( 'events_css', get_template_directory_uri() . '/assets/css/events.css',false,'4.0','all');
    wp_enqueue_style( 'gallery_css', get_template_directory_uri() . '/assets/css/gallery-style.css',false,'4.0','all');
    wp_enqueue_style( 'interview_css', get_template_directory_uri() . '/assets/css/interview-style.css',false,'4.0','all');
    wp_enqueue_style( 'balta_css', get_template_directory_uri() . '/assets/css/registracija-balta.css',false,'4.0','all');
    wp_enqueue_style( 'juoda_css', get_template_directory_uri() . '/assets/css/registracija-juoda.css',false,'4.0','all');
    wp_enqueue_style( 'sociologijos_css', get_template_directory_uri() . '/assets/css/sociologijos.css');
    wp_enqueue_style( 'studies_css', get_template_directory_uri() . '/assets/css/studies.css');
    wp_enqueue_style( 'team_css', get_template_directory_uri() . '/assets/css/team.css');
    
    wp_enqueue_script( 'script', 'https://use.fontawesome.com/da7d68fc96.js', array ( 'jquery' ), 1.1, true);
    wp_enqueue_script( 'jQuery_js', 'https://code.jquery.com/jquery-3.2.1.slim.min.js');
    wp_enqueue_script( 'pooper_js', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js');
    wp_enqueue_script( 'bootstrap_js', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js');

    };

add_action( 'wp_enqueue_scripts', 'theme_sociology_scripts' );

add_theme_support('post-thumbnails');

<<<<<<< HEAD
// functions.php
register_nav_menu( 'header-menu', 'Header Menu' );
function add_class_to_all_menu_anchors( $atts ) {
    $atts['class'] = 'menu-item-anchor';
 
    return $atts;
}
add_filter( 'header-menu', 'add_class_to_all_menu_anchors', 10 );
=======

// menu Paulius

register_nav_menus([
    'left-menu'=> 'Menu left',
    'right-menu'=> 'Menu right'
    ]);


add_filter('nav_menu_link_attributes', 'top_menu', 10, 2);

function top_menu($attributes, $item){
    $attributes['class'] = 'nav-link' . $item->attr_title;;
    return $attributes;
}



add_action( 'customize_register', 'soc_customize_register' );
function soc_customize_register( $wp_customize ) {
  // registruoti customizer objektus
$wp_customize->add_section( 'cd_colors' , array(
    'title'      => 'Colors',
    'priority'   => 150,
) );

$wp_customize->add_setting( 'background_color' , array(
    'default'     => '#43C6E4',
    'transport'   => 'refresh',
) );

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'background_color', array(
    'label'        => 'Background Color',
    'section'    => 'cd_colors',
    'settings'   => 'background_color',
) ) );

$wp_customize->add_section( 'Text' , array(
    'title'      => 'Text',
    'priority'   => 140,
) );

$wp_customize->add_setting( 'Text' , array(
    'default'     => '',
    'transport'   => 'postMessage',
) );

$wp_customize->add_control( 'Text', array(
    'label' => 'Text',
'section'   => 'Text',
'type'   => 'text',

) );

    $wp_customize->selective_refresh->add_partial( 
  'wp_sociologijos', array(
    'selector' => '.site-description',
    'container_inclusive' => false,
    'render_callback' => 'render_copyright',
  )
);

    function render_copyright(){
        return get_theme_mod('Text');
    }
}

>>>>>>> a8b957984a34ba876b66f3d4f7093623d7afb120
