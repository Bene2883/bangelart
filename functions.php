<?php
/**
 * B.Angel_Art Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package B.Angel_Art
 * @since 3.8.1
 */

/**
 * Define Constants
 */
define( 'CHILD_THEME_B_ANGEL_ART_VERSION', '3.8.1' );

/**
 * Enqueue styles
 */
function child_enqueue_styles() {

	wp_enqueue_style( 'b-angel_art-theme-css', get_stylesheet_directory_uri() . '/style.css', array('astra-theme-css'), CHILD_THEME_B_ANGEL_ART_VERSION, 'all' );

}

add_action( 'wp_enqueue_scripts', 'child_enqueue_styles', 15 );