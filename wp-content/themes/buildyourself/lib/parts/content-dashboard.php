<div id="dashboard">
	<h3 class="center">Kokpit Użytkownika: <?php $current_user = wp_get_current_user(); echo $current_user->user_login; ?></h3>
	<div class="tabs">
	
		<ul class="tab-links">
			<li class="active"><a href="#tab1"><span class="glyphicon glyphicon-user" aria-hidden="true"> Informacje Użytkownika</a></li>
			<li><a href="#tab2"><span class="glyphicon glyphicon-book" aria-hidden="true"> Wpisy</a></li>
			<li><a href="#tab3"><span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"> Ulubione</a></li>
			<li><a href="#tab4"><span class="glyphicon glyphicon-envelope" aria-hidden="true"> Wiadomości</a></li>
			<li><a href="#tab5"><span class="glyphicon glyphicon-send" aria-hidden="true"> Znajomi</a></li>
			<li style="float:right"><a href="<?php echo wp_logout_url( home_url() ); ?>" title="Logout">Wyloguj się <span class="glyphicon glyphicon-off" aria-hidden="true"></span></a></li>
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