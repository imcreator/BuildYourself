<?php 

// Import CSS from parent theme
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
	   wp_enqueue_style( 'parent2-style', get_template_directory_uri() . '/style.css' );
	   wp_enqueue_style( 'child-style',
	       get_stylesheet_directory_uri() . '/style.css',
	       array('parent2-style')
	);
}

function twentyfourteen_child_register_menu() {
	register_nav_menu( 'new-menu', __( 'Our New Menu' ) );
	register_nav_menu( 'new-menu2', __( 'Our New Menu 2' ) );
	register_nav_menu( 'menu2', __( 'Our New Menu 3' ) );
}

add_action('init', 'twentyfourteen_child_register_menu' );