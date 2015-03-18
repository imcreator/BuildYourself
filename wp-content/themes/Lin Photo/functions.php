<?php 

add_action( 'after_setup_theme', 'register_prowp_menu');

function register_prowp_menu() {
	register_nav_menu( 'primary', 'Główne Menu' );
}

add_action( 'init', 'prowp_widget_init' );

function prowp_widget_init() {
	register_sidebar( array (
			'name' => __( 'Left Side Widget Area', 'prowp-left' ),
			'id' => 'sidebar-left',
			'description' => __( 'Miejsce na widgety po lewej stronie' ),
			'before_widget' => '<div class="column_w210 fl vl_divider">',
			'after_widget' => '</div>',
			'before_title' => '<div class="header_01">',
			'after_title' => '</div>'
		) );
}

function prowp_excerpt_home_10( $length ) {
		return 10;
}

add_filter( 'excerpt_length', 'prowp_excerpt_home_10' );

function prowp_new_excerpt_more( $more ) {
	return '.';
}
add_filter( 'excerpt_more', 'prowp_new_excerpt_more' );

?>
