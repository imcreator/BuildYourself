<?php

//* Load the Genesis core files
require_once( get_template_directory() . '/lib/init.php' );

//* Child theme Definitions
define( 'CHILD_THEME_NAME', __( 'BuildYourself', 'buildyourself' ) );
define( 'CHILD_THEME_URL', 'http://buildyourself.pl' );
define( 'CHILD_THEME_VERSION', '1.0' );

//* Add HTML5 markup structure
add_theme_support( 'html5' );

//* Add HTML5 markup structure
add_theme_support( 'genesis-responsive-viewport' );

function by_scripts() {
	wp_enqueue_script( 'by-scripts', get_stylesheet_directory_uri() . '/js/scripts.js', array( 'jquery' ), '1.0.0', true );

}

add_action( 'init', 'by_scripts' );