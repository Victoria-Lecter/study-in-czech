<?php

if (! defined( 'ABSPATH')) {
  exit; // exit if accesed directly
}
use Carbon_Fields\Container;
use Carbon_Fields\Field;
// Default options page
Container::make( 'theme_options', 'Настройки темы' )
	->set_icon( 'dashicons-carrot' )
    ->add_tab( 'Контакты', array(
  		Field::make( 'text', 'study_phone', 'Телефон' )
  			->set_width( 50 ),
        Field::make( 'text', 'study_email', 'Email' )
    			->set_width( 50 ),
        ))
      ->add_tab( 'Баннер', array(
        Field::make( 'image', 'banner_image', 'Фото' )
          ->set_value_type( 'url' ),
          Field::make( 'text', 'banner_heading' ),
          Field::make( 'text', 'banner_text' ),
        ));
