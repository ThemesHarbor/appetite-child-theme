<?php
/**
 * Functions and definitions of Appetite child theme.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Appetite
 * @since 1.0
 */

 /**
  *  Sets up child theme defaults and registers support for various WordPress features.
  *
  * @link http://codex.wordpress.org/Child_Themes
  */
 function appetite_child_theme_setup() {
     load_child_theme_textdomain( 'appetite', get_stylesheet_directory() . '/languages' );
 }
 add_action( 'after_setup_theme', 'appetite_child_theme_setup' );

/**
 * Enqueue parent style.
 *
 * @link http://codex.wordpress.org/Child_Themes
 */
function appetite_child_enqueue_parent_styles() {
    wp_enqueue_style( 'appetite-parent-style', get_template_directory_uri() . '/style.css', array( 'appetite-css-framework' ) );
}
add_action( 'wp_enqueue_scripts', 'appetite_child_enqueue_parent_styles' );
