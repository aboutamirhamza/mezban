<?php

function mezban_theme_support(){
    add_theme_support( 'title-tag' );
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ) );
    add_theme_support( 'post-formats', array( 
        'image', 
        'video', 
        'audio', 
        'gallery', 
        'quote' 
    ));
    add_theme_support( 'customize-selective-refresh-widgets' );
    remove_theme_support( 'widgets-block-editor' );

    // Register navigation menus
    register_nav_menus( array(
        'header-menu' => __( 'Header Menu', 'mezban' ),
        'footer-menu' => __( 'Footer Menu', 'mezban' ),
    ) );

    

}

add_action('after_setup_theme','mezban_theme_support');



include_once('inc/common/scripts.php');
include_once('inc/template-function.php');
include_once('inc/nav-walker.php');
if ( class_exists( 'Kirki' ) ) {
    include_once('inc/mezban-kriki.php');
}