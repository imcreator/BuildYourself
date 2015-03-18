<?php
/*
 * Template Name: Registration
 * Description: Template for registration / login pages.
*/

get_header(); ?>

<div class="wrap register-content">
	
	<?php if ( !is_user_logged_in() ) : ?>
	
		<div id="register">
			<h3 class="center">Rejestracja</h3>
			<p class="center">Nie masz jeszcze u nas konta? Załóż je za darmo</p>
		</div>

		<div id="login">
			<h3 class="center">Logowanie</h3>
			<p class="center"> Zaloguj się na swoje konto</p>

			<?php wp_login_form('redirect=/BuildYourself/'); ?>	

		</div>

	<?php else: ?>

		<div id="dashboard">
			<h3 class="center">Kokpit Użytkownika: <?php $current_user = wp_get_current_user(); echo $current_user->user_login; ?></h3>
			<div class="tabs">
			    <ul class="tab-links">
			        <li class="active"><a href="#tab1">Informacje Użytkownika</a></li>
			        <li><a href="#tab2">Wpisy</a></li>
			        <li><a href="#tab3">Ulubione</a></li>
			        <li><a href="#tab4">Wiadomości</a></li>
			        <li><a href="#tab5">Znajomi</a></li>

			    </ul>
			 
			    <div class="tab-content">
			        <div id="tab1" class="tab active">
			            <p>Tab #1 content goes here!</p>
			            <p>Donec pulvinar neque sed semper lacinia. Curabitur lacinia ullamcorper nibh; quis imperdiet velit eleifend ac. Donec blandit mauris eget aliquet lacinia! Donec pulvinar massa interdum risus ornare mollis.</p>
			        </div>
			 
			        <div id="tab2" class="tab">
			            <p>Tab #2 content goes here!</p>
			            <p>Donec pulvinar neque sed semper lacinia. Curabitur lacinia ullamcorper nibh; quis imperdiet velit eleifend ac. Donec blandit mauris eget aliquet lacinia! Donec pulvinar massa interdum risus ornare mollis. In hac habitasse platea dictumst. Ut euismod tempus hendrerit. Morbi ut adipiscing nisi. Etiam rutrum sodales gravida! Aliquam tellus orci, iaculis vel.</p>
			        </div>
			 
			        <div id="tab3" class="tab">
			            <p>Tab #3 content goes here!</p>
			            <p>Donec pulvinar neque sed semper lacinia. Curabitur lacinia ullamcorper nibh; quis imperdiet velit eleifend ac. Donec blandit mauris eget aliquet lacinia! Donec pulvinar massa interdum ri.</p>
			        </div>
			 		 <div id="tab4" class="tab active">
			            <p>Tab #1 content goes here!</p>
			            <p>Donec pulvinar neque sed semper lacinia. Curabitur lacinia ullamcorper nibh; quis imperdiet velit eleifend ac. Donec blandit mauris eget aliquet lacinia! Donec pulvinar massa interdum risus ornare mollis.</p>
			        </div>
			        <div id="tab5" class="tab">
			            <p>Tab #4 content goes here!</p>
			            <p>Donec pulvinar neque sed semper lacinia. Curabitur lacinia ullamcorper nibh; quis imperdiet velit eleifend ac. Donec blandit mauris eget aliquet lacinia! Donec pulvinar massa interdum risus ornare mollis. In hac habitasse platea dictumst. Ut euismod tempus hendrerit. Morbi ut adipiscing nisi. Etiam rutrum sodales gravida! Aliquam tellus orci, iaculis vel.</p>
			        </div>
			    </div>
			</div>
		</div>
	<?php endif; ?>
</div>

<?php get_footer(); ?>

