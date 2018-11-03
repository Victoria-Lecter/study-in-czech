<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);



add_action( 'after_setup_theme', 'crb_load' );
function crb_load() {
    load_template( get_template_directory() . '/includes/carbon-fields/vendor/autoload.php' );
    \Carbon_Fields\Carbon_Fields::boot();
}

add_action( 'carbon_fields_register_fields', 'studyinczech_register_fields' );
function studyinczech_register_fields() {
    require get_template_directory() . '/includes/custom-fields-options/metabox.php';
		require get_template_directory() . '/includes/custom-fields-options/theme-options.php';
}

/**
 * theme settings
 */
require get_template_directory() . '/includes/theme-settings.php';
/**
 * widgets
 */
require get_template_directory() . '/includes/widget-areas.php';
/**
 *enqueue script and styles
 */
require get_template_directory() . '/includes/enqueue-script-style.php';
/**
 *additional functions
 */
require get_template_directory() . '/includes/helpers.php';

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/includes/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/includes/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/includes/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/includes/customizer.php';
/**
 * Navigation menu
 */
require get_template_directory() . '/includes/navigations.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/includes/jetpack.php';
}

/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/includes/woocommerce.php';
	require get_template_directory() . '/woocommerce/includes/wc-functions-remove.php';
	require get_template_directory() . '/woocommerce/includes/wc-functions.php';
}



function getPostViews($postID){
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0 просмотров";
    }
    return $count.' просмотров';
}
function setPostViews($postID) {
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}


add_filter('manage_posts_columns', 'posts_column_views');
add_action('manage_posts_custom_column', 'posts_custom_column_views',5,2);
function posts_column_views($defaults){
    $defaults['post_views'] = __('Просмотров');
    return $defaults;
}
function posts_custom_column_views($column_name, $id){
    if($column_name === 'post_views'){
        echo getPostViews(get_the_ID());
    }
}
