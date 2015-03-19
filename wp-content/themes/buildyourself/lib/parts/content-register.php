<div id="register">
	<h3 class="center">Rejestracja</h3>
	<p class="center">Nie masz jeszcze u nas konta? Załóż je za darmo</p>
		
	<form name="registerform" action="<?php echo site_url('wp-login.php?action=register', 'login_post') ?>" method="post">
	    <p>
	        <label for="user_login">Nazwa użytkownika</label>
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

	    <p id="reg_passmail">Hasło zostanie wysłane e-mailem.</p>

	    <input type="hidden" name="redirect_to" value="http://localhost/BuildYourself/?page_id=40" />
	    <p class="submit"><input type="submit" name="wp-submit" id="wp-submit" value="Register" /></p>
	</form>
</div>	
<div id="login">
	<h3 class="center">Logowanie</h3>
	<p class="center"> Zaloguj się na swoje konto</p>
	<?php wp_login_form('redirect=/BuildYourself/?page_id=29'); ?>	
</div>