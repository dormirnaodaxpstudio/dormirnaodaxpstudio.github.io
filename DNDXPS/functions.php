<?php

/* Widgets */ 
if (function_exists('register_sidebar')){
	register_sidebar(
		array(
		'name' => 'Sidebar',
		'before_widget' => '<div class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
}

/* Register Menu */
function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );

/* Enable support for Post Thumbnails on posts and pages. */
add_theme_support( 'post-thumbnails' );

/* THEME SCRIPTS AND STYLES */
function add_theme_scripts() {

	wp_enqueue_style( 'bootstrap4', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), 'all', 'all');

	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/assets/css/all.min.css', array(), 'all', 'all');

	wp_enqueue_style( 'main-styles', get_template_directory_uri() . '/assets/css/studio-css.css', array(), 'all', 'all');
 
	wp_enqueue_script( 'jquery', get_template_directory_uri() . '/assets/js/jQuery-v3.3.1.js', array (), all, true);	

	wp_enqueue_script( 'theme-scripts', get_template_directory_uri() . '/assets/js/studio-js.js', array (), all, true);
 
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
      wp_enqueue_script( 'comment-reply' );
    }

}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );

?>