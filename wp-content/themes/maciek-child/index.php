
<h1>Index</h1>

<?php if( ! is_active_sidebar( 'sidebar-2' ) ) : ?>
	<h3>Nieaktywny Sidebar</h3>
<?php else : ?>

<div id="content-sidebar" class="content-sidebar widget-area" role="complementary">
	<?php dynamic_sidebar( 'sidebar-2' ); ?>
</div><!-- #content-sidebar -->

<?php endif; ?>

<!-- Display Menu -->

<?php wp_nav_menu( array( 'theme_location' => 'new-menu' ) ); ?>