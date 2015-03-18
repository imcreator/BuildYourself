<?php 

add_theme_support( 'menus' );
add_theme_support( 'post-thumbnails' );

set_post_thumbnail_size( 'post',260, 140, true );

if ( function_exists('register_sidebar') ) {
	register_sidebar(array(
	'before_widget' => '<li id="%1$s" class="widget %2$s">',
	'after_widget' => '</li>',
	'before_title' => '<h2 class="widgettitle">',
	'after_title' => '</h2>',
	));
}

if ( function_exists('register_sidebar') ) {
	register_sidebar(array(
	'name' => 'Homepage Sidebar',
	'id' => 'homepage-sidebar',
	'description' => 'Appears as the sidebar on the custom homepage',
	'before_widget' => '<!-- "Widget" --><div class="box">',
	'after_widget' => '</div>',
	'before_title' => '<h2 class="widgettitle"><!-- Koniec Widgetu -->',
	'after_title' => '</h2>',
	));
}

if ( function_exists('register_sidebar') ) {
	register_sidebar(array(
	'name' => 'Slider Sidebar',
	'id' => 'slider-sidebar',
	'description' => 'Ten sidebar jest przeznaczony do slideru',
	'before_widget' => '<!-- "Widget" --><div class="box">',
	'after_widget' => '</div>',
	'before_title' => '<h2 class="widgettitle"><!-- Koniec Widgetu -->',
	'after_title' => '</h2>',
	));
}

if ( function_exists('register_sidebar') ) {
	register_sidebar(array(
	'name' => 'Welcome Content',
	'id' => 'welcome-content',
	'description' => 'Ten sidebar jest przeznaczony do strony głównej na przywitanie',
	'before_widget' => '<!-- "Widget" --><div class="welcome-content">',
	'after_widget' => '</div>',
	'before_title' => '<h2 class="welcome-title">',
	'after_title' => '</h2>'
	));
}

function nesanica_excerpt_more( $more ) {
	return '';
}
add_filter('excerpt_more', 'nesanica_excerpt_more');

?>
