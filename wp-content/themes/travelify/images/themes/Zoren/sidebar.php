<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package web2feel
 * @since web2feel 1.0
 */
?>
		<div id="secondary" class="widget-area block-10" role="complementary">
			<?php get_search_form(); ?>
			<?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>
				<aside id="archives" class="widget">
					<h1 class="widget-title"><?php _e( 'Archives', 'web2feel' ); ?></h1>
					<ul>
						<?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
					</ul>
				</aside>

				<aside id="meta" class="widget">
					<h1 class="widget-title"><?php _e( 'Meta', 'web2feel' ); ?></h1>
					<ul>
						<?php wp_register(); ?>
						<li><?php wp_loginout(); ?></li>
						<?php wp_meta(); ?>
					</ul>
				</aside>

			<?php endif; // end sidebar widget area ?>
			<?php get_template_part( 'sponsors' ); ?>
		</div><!-- #secondary .widget-area -->
