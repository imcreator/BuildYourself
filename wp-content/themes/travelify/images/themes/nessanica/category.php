<?php 

/*
	Template Name: Posty
*/

get_header(); ?>

		<div class="zawartosc">
		
		<?php get_sidebar('homepage'); ?>	
	
			<div id="main-content"><!-- Box Po prawej - Głowny kontent -->

				<?php 
					$post_id = get_the_ID();
				 ?>
				<h2 id="breadcrumbs">Strona Główna » <strong><?php the_category( ' ' ); ?></strong></h2><hr>
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

					<div class="category post">
							
						<?php the_post_thumbnail('large'); ?>

						<div class="post-content">
	
							<h2><?php echo the_title(); ?></h2>
							
							<?php the_excerpt(10); ?></p>
							<a href="<?php the_permalink(); ?>">Więcej..</a>
						</div>
						
						
					</div>

				

			 <?php endwhile; else : ?>
			 	<p><?php _e( 'Przykro mi, ale nie mam nic do wyświetlenia dla Ciebie :(' ); ?></p>
			 <?php endif; ?>
					
			</div><!-- Koniec głównego kontentu -->
			<div id="footer"><p>Nessanica &copy 2015	</p></div>
			<?php wp_footer(); ?>
		</div>
	</div><!-- Koniec Wrappera -->
</body>
</html>