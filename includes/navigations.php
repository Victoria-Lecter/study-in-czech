<?php
if (! defined( 'ABSPATH')) {
  exit; // exit if accesed directly
}

register_nav_menus(array(
  'primary' => 'Основное',
  'footer-left' => 'footer-left',
  'footer-center' => 'footer-center',
  'footer-right' => 'footer-right'
));

function study_footer_nav_right(){
wp_nav_menu( array(
	'theme_location'  => 'footer-right',
  'menu_id'         => 'footer-right',
	'menu_class'      => 'uk-nav',
  'container'         => 'div'
) );
}

function study_footer_nav_center(){
wp_nav_menu( array(
	'theme_location'  => 'footer-center',
  'menu_id'         => 'footer-center',
	'menu_class'      => 'uk-nav',
  'container'         => 'div'
) );
}

function study_footer_nav_left(){
wp_nav_menu( array(
	'theme_location'  => 'footer-left',
  'menu_id'         => 'footer-left',
	'menu_class'      => 'uk-nav',
  'container'         => 'div'
) );
}



function study_primary_menu(){
	wp_nav_menu( array(
		'theme_location'    => 'primary',
		'menu_id'           => 'primary',
		'menu_class'        => 'uk-navbar-nav',
    'container'         => 'nav',
    'container_class'   => 'uk-navbar uk-align-right',
  ) );
}
