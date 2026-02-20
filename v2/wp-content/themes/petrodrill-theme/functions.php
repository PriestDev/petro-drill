<?php
/**
 * Petrodrill Theme functions and definitions
 */

if ( ! function_exists( 'petrodrill_setup' ) ) :
    function petrodrill_setup() {
        add_theme_support( 'title-tag' );
        add_theme_support( 'post-thumbnails' );
        add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' ) );
        
        register_nav_menus( array(
            'primary' => __( 'Primary Menu', 'petrodrill-theme' ),
            'social'  => __( 'Social Menu', 'petrodrill-theme' ),
        ) );
    }
endif;
add_action( 'after_setup_theme', 'petrodrill_setup' );

/**
 * Enqueue scripts and styles
 */
function petrodrill_scripts() {
    // Enqueue Bootstrap CSS
    wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '3.4.1', 'all' );
    wp_enqueue_style( 'bootstrap-responsive-css', get_template_directory_uri() . '/assets/css/bootstrap-responsive.min.css', array( 'bootstrap-css' ), '3.4.1', 'all' );
    
    // Enqueue template stylesheet
    wp_enqueue_style( 'template-css', get_template_directory_uri() . '/assets/css/template.css', array( 'bootstrap-responsive-css' ), '1.0', 'all' );
    wp_enqueue_style( 'mobile-menu-css', get_template_directory_uri() . '/assets/css/mobile-menu.css', array( 'template-css' ), '1.0', 'all' );
    wp_enqueue_style( 'k2-css', get_template_directory_uri() . '/assets/css/k2.css', array( 'template-css' ), '1.0', 'all' );
    
    // Enqueue main theme stylesheet (style.css) - loads last to override
    wp_enqueue_style( 'petrodrill-style', get_stylesheet_uri(), array( 'template-css' ), '1.0', 'all' );
    
    // Enqueue jQuery (bundled with WordPress)
    wp_enqueue_script( 'jquery' );
    
    // Enqueue jQuery InView plugin (for animations on scroll)
    wp_enqueue_script( 'jquery-inview', get_template_directory_uri() . '/assets/js/jquery.inview.min.js', array( 'jquery' ), '1.0', true );
    
    // Enqueue Helix Core JS (navigation/menu functionality)
    wp_enqueue_script( 'helix-core', get_template_directory_uri() . '/assets/js/helix.core.js', array( 'jquery' ), '1.0', true );
    
    // Enqueue template main JavaScript
    wp_enqueue_script( 'template-main', get_template_directory_uri() . '/assets/js/template-main.js', array( 'jquery', 'helix-core' ), '1.0', true );
    
    // Enqueue main theme JavaScript file (loads last)
    wp_enqueue_script( 'petrodrill-main', get_template_directory_uri() . '/assets/js/main.js', array( 'jquery' ), '1.0', true );
    
    // Enqueue any additional custom files (uncomment as needed)
    // wp_enqueue_style( 'petrodrill-custom', get_template_directory_uri() . '/assets/css/custom.css', array(), '1.0', 'all' );
    // wp_enqueue_script( 'petrodrill-custom', get_template_directory_uri() . '/assets/js/custom.js', array( 'jquery' ), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'petrodrill_scripts' );

/**
 * Custom excerpt length
 */
function petrodrill_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'petrodrill_excerpt_length' );

/**
 * Custom excerpt suffix
 */
function petrodrill_excerpt_more( $more ) {
    return '...';
}
add_filter( 'excerpt_more', 'petrodrill_excerpt_more' );

?>