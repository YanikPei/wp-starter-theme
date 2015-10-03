<?php

//  let wordpress create page-titles
add_theme_support( 'title-tag' );

//  enable post-thumbnails
add_theme_support( 'post-thumbnails' );

//  Switch default core markup for search form, comment form, and comments
//  to output valid HTML5.
add_theme_support( 'html5', array(
	'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
) );

//  load scripts and styles
function enqueue_scripts() {
	wp_enqueue_style( 'normalize', get_template_directory_uri().'/bower_components/foundation/css/normalize.min.css' , array(), null );
  wp_enqueue_style( 'foundation', get_template_directory_uri().'/bower_components/foundation/css/foundation.min.css' , array(), null );
  wp_enqueue_style( 'screen', get_template_directory_uri().'/assets/stylesheets/screen.css' , array(), null );

	wp_enqueue_script( 'foundation-js', get_template_directory_uri() . '/bower_components/foundation/js/foundation.min.js', array('jquery') );
  wp_enqueue_script( 'main-js', get_template_directory_uri() . '/assets/js/main.js', array('jquery') );
}
add_action( 'wp_enqueue_scripts', 'enqueue_scripts' );

?>
