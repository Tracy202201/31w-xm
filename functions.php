<?php
/**
 * 31w-AG functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package 31w-XM
 */

if ( ! defined( '_S_VERSION' ) ) {
   
    define( '_S_VERSION', '1.0.0' );
}

function mon_31w_setup() {
    /*
        * Let WordPress manage the document title.
        * By adding theme support, we declare that this theme does not use a
        * hard-coded <title> tag in the document head, and expect WordPress to
        * provide it for us.
        */
    add_theme_support( 'title-tag' );
    add_theme_support( 'html5', array('search-form') );
	add_theme_support( 'custom-background' );
  
}
add_action( 'after_setup_theme', 'mon_31w_setup' );

function mon_31w_enqueue() {
	wp_enqueue_style( 'mon_31w-style', 
                        get_stylesheet_uri(), 
                        array());
	
}
add_action( 'wp_enqueue_scripts', 'mon_31w_enqueue' );
