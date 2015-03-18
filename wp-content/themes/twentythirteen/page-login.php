<?php
/*
Template Name: Login
*/

get_header(); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
				
			<div class="container">
			
				<h1>Login</h1>

				<?php wp_login_form(); ?>

				<h1>Registration</h1>

				<form name="registerform" action="<?php echo site_url('wp-login.php?action=register', 'login_post') ?>" method="post">
				    <p>
				        <label for="user_login">Username</label>
				        <input type="text" name="user_login" value="">
				    </p>
				    <p>
				        <label for="user_email">E-mail</label>
				        <input type="text" name="user_email" id="user_email" value="">
				    </p>
				    <p style="display:none">
				        <label for="confirm_email">Please leave this field empty</label>
				        <input type="text" name="confirm_email" id="confirm_email" value="">
				    </p>

				    <p id="reg_passmail">A password will be e-mailed to you.</p>

				    <input type="hidden" name="redirect_to" value="/login/?action=register&success=1" />
				    <p class="submit"><input type="submit" name="wp-submit" id="wp-submit" value="Register" /></p>
				</form>
			</div>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>