<?php 

function add_theme_scripts() {
        
    wp_enqueue_style( 'images', get_template_directory_uri() . '/assets/images/favicon.png', array(), '', 'all' );
    wp_enqueue_style( 'animate', get_template_directory_uri() . '/assets/css/animate.css', array(), '3.7.0', 'all' );
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '5.1.3', 'all' );
    wp_enqueue_style( 'icofont', get_template_directory_uri() . '/assets/css/icofont.min.css', array(), '1.0.1 ', 'all' );
    wp_enqueue_style( 'lightcase', get_template_directory_uri() . '/assets/css/lightcase.css', array(), '2.5.0', 'all' );
    wp_enqueue_style( 'swiper', get_template_directory_uri() . '/assets/css/swiper.min.css', array(), '4.5.0', 'all' );
    wp_enqueue_style( 'asset-style', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    
    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/assets/js/jquery.js', array( 'jquery' ), '3.4.1', true );
    wp_enqueue_script( 'waypoints', get_template_directory_uri() . '/assets/js/waypoints.min.js', array( 'jquery' ), '4.0.1', true );
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array( 'jquery' ), '5.1.3', true );
    wp_enqueue_script( 'isotope-pkgd', get_template_directory_uri() . '/assets/js/isotope.pkgd.min.js', array( 'imagesloaded' ), '3.0.6', true );
    wp_enqueue_script( 'wow', get_template_directory_uri() . '/assets/js/wow.min.js', array( 'jquery' ), '1.3.0', true );
    wp_enqueue_script( 'swiper', get_template_directory_uri() . '/assets/js/swiper.min.js', array( 'jquery' ), '4.5.0', true );
    wp_enqueue_script( 'lightcase', get_template_directory_uri() . '/assets/js/lightcase.js', array( 'jquery' ), '2.5.0', true );
    wp_enqueue_script( 'jquery-counterup', get_template_directory_uri() . '/assets/js/jquery.counterup.min.js', array( 'jquery-ui-slider' ), '5.1.3', true );
    wp_enqueue_script( 'jquery-counterdown', get_template_directory_uri() . '/assets/js/jquery.counterdown.min.js', array( 'jquery-ui-slider' ), '5.1.3', true );
    wp_enqueue_script( 'tab', get_template_directory_uri() . '/assets/js/tab.js', array( 'jquery-ui-slider' ), '5.1.3', true );
    wp_enqueue_script( 'functions', get_template_directory_uri() . '/assets/js/functions.js', array( 'jquery' ), '5.1.3', true );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );

