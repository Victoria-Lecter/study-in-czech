<?php
if (! defined( 'ABSPATH')) {
  exit; // exit if accesed directly
}

add_action( 'wp_enqueue_scripts', 'studyinczech_styles' );
function studyinczech_styles() {
	wp_enqueue_style( 'studyinczech-uikit', get_template_directory_uri() . '/assets/css/uikit.min.css', array(), null , 'all' );
	wp_enqueue_style( 'studyinczech-style', get_stylesheet_uri() );
}

add_action( 'wp_enqueue_scripts', 'studyinczech_scripts' );
function studyinczech_scripts() {
	wp_enqueue_script( 'studyinczech-uikit', get_template_directory_uri() . '/assets/js/uikit.min.js', array(), null , 'all' );
  wp_enqueue_script( 'studyinczech-icons', get_template_directory_uri() . '/assets/js/uikit-icons.min.js', array(), null , 'all');
  wp_enqueue_script( 'studyinczech-common', get_template_directory_uri() . '/assets/js/common.js', array(), null , 'all');
	wp_enqueue_script( 'studyinczech-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), null , 'all');


	wp_enqueue_script( 'studyinczech-skip-link-focus-fix', get_template_directory_uri() . '/assets/js/skip-link-focus-fix.js', array(), null , 'all' );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
