<?php
/*
Template Name: User Dashboard
*/

get_header(); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
				
			<div class="container">

				<?php if ( is_user_logged_in() ) : ?>
					
					<div id="dashboard-content">

						<h2>Kokpit <?php global $current_user; echo $current_user->user_login; ?>'a</h2>
						
						<section id="content dashboard">

							<ul id="dashboard-navi">
								<li><a class="active" href="#data">Podstawowe dane</a></li>
								<li><a href="#posts">Posty</a></li>
								<li><a href="#comments">Komentarze</a></li>
								<li><a href="#last-login">Ostatnie Logowania</a></li>
								<li><a href="<?php wp_logout(); ?>">wyloguj</a></li>

							</ul>

							<div id="user-account">

								<article id="data">
									<?php echo get_avatar( get_the_author_id() ); ?>
									<?php 
										echo 'Nazwa Konta: ' . $current_user->user_login;
										echo '<br /> Email: ' . $current_user->user_email;
										echo '<br /> Hasło: ' . $current_user->user_pass;
										echo '<br /> Status:';
										$status = $current_user->user_status;
										if ( $status == 0) {
											echo 'Zalogowany';
										}else{
											echo 'Nieobecny';
										}
									 ?>
								</article>
								<article id="posts">
									<p><?php the_author(); ?> Napisał: <?php the_author_posts(); ?> post</p>
								</article>

								<article id="comments">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa commodi libero vero, eaque. Saepe unde praesentium iure repudiandae facere vitae voluptas, nesciunt suscipit magni omnis, officia tempore quibusdam, eum voluptates.
								</article>

								<article id="last-login">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti non illum officiis ex, minima rem aperiam at quis quisquam nesciunt incidunt dolores, autem soluta sunt adipisci? Voluptates similique culpa veritatis.
								</article>

							</div>

						</section>

					</div>

				<?php else : ?>	

					<?php wp_login_form( array('redirect' => site_url( '/?page_id=8' ) ) ); ?>

				<?php endif; ?>

			</div>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>