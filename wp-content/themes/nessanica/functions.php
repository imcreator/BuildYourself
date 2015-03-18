<?php 

add_theme_support( 'menus' );
add_theme_support( 'post_thumbnails' );

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

?>
