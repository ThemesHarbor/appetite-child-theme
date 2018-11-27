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
