<?php
/* Theme setup */
add_action( 'after_setup_theme', 'wpt_setup' );
if ( ! function_exists( 'wpt_setup' ) ):
    function wpt_setup() {
        register_nav_menu( 'primary', __( 'Primary navigation', 'wptuts' ) );
    } endif;
?>
<?php // Register custom navigation walker
require_once('wp_bootstrap_navwalker.php');
?>
<?php
/**
 * Scriptable functions and definitions
 *
 * @package WordPress
 * @subpackage Scriptable
 * @since Scriptable 1.0
 */

//Include Stylesheet

if ( ! is_admin() ) {
    wp_enqueue_style('zensational', get_template_directory_uri() . '/style.css');

    //Include Jquery
    wp_enqueue_script('jquery');

    //Include Bootstrap JS
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js');


    wp_enqueue_script('owl', get_template_directory_uri() . '/js/owl.carousel.min.js');



    //Include Google fonts Roboto
    wp_enqueue_style('google-fonts', "//fonts.googleapis.com/css?family=Open+Sans|PT+Sans");

}

// Defer jQuery Parsing using the HTML5 defer property
if (!(is_admin() )) {
    function defer_parsing_of_js ( $url ) {
        if ( FALSE === strpos( $url, '.js' ) ) return $url;
        if ( strpos( $url, 'jquery.js' ) ) return $url;
        // return "$url' defer ";
        return "$url' defer onload='";
    }
    add_filter( 'clean_url', 'defer_parsing_of_js', 11, 1 );
}

//Add WP Menu Support

function register_my_menu() {
    register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );

//Add Thumbnail Support

add_theme_support( 'post-thumbnails' );

//Include WP Alchemy & Metabox

include_once get_template_directory() . '/metaboxes/wp-alchemy/metabox.php';
include_once get_template_directory() . '/metaboxes/content-block-spec.php';
include_once get_template_directory() . '/metaboxes/wp-alchemy/MediaAccess.php';

$wpalchemy_media_access = new WPAlchemy_MediaAccess();

//Add Content Blocks

require get_template_directory() . '/content-blocks.php';
