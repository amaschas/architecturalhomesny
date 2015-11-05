<?php

define( 'AHNY_THEME_DIR', dirname( __FILE__ ) );

require_once( AHNY_THEME_DIR . '/inc/class-ahny-post-type.php' );
require_once( AHNY_THEME_DIR . '/inc/class-post-type-property.php' );

wp_enqueue_style( 'ahny-styles', get_stylesheet_directory_uri() . '/static/css/screen.css', array(), '0.0.1' );
wp_enqueue_script( 'global-js', get_stylesheet_directory_uri() . '/static/js/global.js', array( 'jquery' ), '0.0.1', true );

add_image_size( 'carousel-thumb', 930, 450, true );
add_image_size( 'large-thumb', 500, 191, true );
add_image_size( 'med-thumb', 335, 130, true );

function ahny_category_cpt_rewrites() {
    $custom_post_types = get_post_types();
    $custom_post_types[] = 'property';
    foreach ( $custom_post_types as $post_type ) {
        $rule = '^' . $post_type . '/category/(.+?)/?$';
        $rewrite = 'index.php?post_type=' . $post_type . '&category_name=$matches[1]';
        add_rewrite_rule($rule,$rewrite,'top');
    }
}
add_action('init', 'ahny_category_cpt_rewrites');