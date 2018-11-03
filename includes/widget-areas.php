<?php
if (! defined( 'ABSPATH')) {
  exit; // exit if accesed directly
}

function studyinczech_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar-left', 'studyinczech' ),
		'id'            => 'sidebar-left',
		'before_widget' => '<ul id="%1$s" class="uk-nav widget %2$s">',
		'after_widget'  => '</ul>',
	) );
  // register_sidebar( array(
	// 	'name'          => esc_html__( 'Footer-left', 'studyinczech' ),
	// 	'id'            => 'footer-1',
	// 	'before_widget' => '',
	// 	'after_widget'  => '',
	// 	'before_title'  => '<h3 class="widget-title">',
	// 	'after_title'   => '</h3>',
	// ) );
  // register_sidebar( array(
	// 	'name'          => esc_html__( 'Footer-center', 'studyinczech' ),
	// 	'id'            => 'footer-2',
	// 	'before_widget' => '<div id="%1$s" class="widget %2$s">',
	// 	'after_widget'  => '</div>',
	// 	'before_title'  => '<h3 class="widget-title">',
	// 	'after_title'   => '</h3>',
	// ) );
  // register_sidebar( array(
	// 	'name'          => esc_html__( 'Footer-right', 'studyinczech' ),
	// 	'id'            => 'footer-3',
	// 	'before_widget' => '<div id="%1$s" class="widget %2$s">',
	// 	'after_widget'  => '</div>',
	// 	'before_title'  => '<h3 class="widget-title">',
	// 	'after_title'   => '</h3>',
	// ) );
}
add_action( 'widgets_init', 'studyinczech_widgets_init' );
