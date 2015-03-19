<?php
/*
 * Template Name: Registration
 * Description: Template for registration / login pages.
*/

get_header(); ?>

<div class="wrap register-content">
	
	<?php if ( !is_user_logged_in() ) : ?>
	
		<?php get_template_part( '/lib/parts/content', 'register' ); ?>

	<?php else: ?>

		<?php get_template_part( '/lib/parts/content', 'dashboard' ); ?>

	<?php endif; ?>
</div>

<?php get_footer(); ?>

