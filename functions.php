<?php
/**
 * 31w-AG functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package 31w-XM
 */

function mon31w_setup() {
    /*
        * Let WordPress manage the document title.
        * By adding theme support, we declare that this theme does not use a
        * hard-coded <title> tag in the document head, and expect WordPress to
        * provide it for us.
        */
    add_theme_support( 'title-tag' );
    add_theme_support( 'html5', array('search-form') );
	add_theme_support( 'custom-background' );
    //avoir plusieur menus
    register_nav_menus( array(
        'sidebar_menu' => __( 'Menu sidebar', 'mon_31w' ),
        'footer_menu'  => __( 'Menu footer', 'mon_31w' ),
        'menu_accueil'  => __( 'Menu accueil', 'mon_31w' ),
    ) );
  
}
add_action( 'after_setup_theme', 'mon31w_setup' );

function mon_31w_enqueue() {
	wp_enqueue_style( 'mon_31w-style', 
                        get_stylesheet_uri(), 
                        array(),
                        filemtime(get_template_directory() . '/style.css'));
    wp_enqueue_style('31w-google-font', 
                        "https://fonts.googleapis.com/css2?family=Anek+Latin&family=Playfair+Display:ital,wght@0,400;0,600;1,900&display=swap", false);
	
}
add_action( 'wp_enqueue_scripts', 'mon_31w_enqueue' );

/* --------------------------------------------------------------------- */
/*
* Permet de modifier la requete principale de la page d'accueil
* pour extraire uniquement les articles de categori accueil
* @param : $query represente l'object WP_Query contenant la requete principale
* reference: https://developer.wordpress.org/reference/hooks/pre_get_posts/ 
*/

function mon_31w_pre_get_posts_accueil( $query ) {
    if (    $query->is_home() 
            && $query->is_main_query() 
            && ! is_admin() ) {
        $query->set( 'category_name', 'accueil' );
    }
}
add_action( 'pre_get_posts', 'mon_31w_pre_get_posts_accueil' );

/* --------------------------------------------------------------------- */
/***
 * filter menu 
 */
function prefix_nav_description( $item_output, $item) {
    if ( !empty( $item->description ) ) {
        $item_output = str_replace( '</a>',
        '<hr><span class="menu-item-description">' . $item->description . '</span><div class="menu-item-icone"></div></a>',
              $item_output );
    }
    return $item_output;
}
add_filter( 'walker_nav_menu_start_el', 'prefix_nav_description', 10, 2 );