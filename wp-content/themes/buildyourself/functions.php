<?php

//* Load the Genesis core files
include_once( get_template_directory() . '/lib/init.php' );

//* Child theme Definitions
define( 'CHILD_THEME_NAME', __( 'BuildYourself', 'buildyourself' ) );
define( 'CHILD_THEME_URL', 'http://buildyourself.pl' );
define( 'CHILD_THEME_VERSION', '1.0' );

//* Add HTML5 markup structure
add_theme_support( 'html5' );

//* Add HTML5 markup structure
add_theme_support( 'genesis-responsive-viewport' );