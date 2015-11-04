<?php

define( 'AHNY_THEME_DIR', dirname( __FILE__ ) );

require_once( AHNY_THEME_DIR . '/inc/class-ahny-post-type.php' );
require_once( AHNY_THEME_DIR . '/inc/class-post-type-property.php' );

wp_enqueue_style( 'ahny-styles', get_stylesheet_directory_uri() . '/static/css/' . 'screen.css', array(), '0.0.1' );