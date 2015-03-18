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
				<h2 id="breadcrumbs">Strona Główna » <?php the_category( ' ' ); ?> » <a href="<?php the_permalink(); ?>"><b><?php the_title(); ?></b></a></h2><hr>
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

					<div class="single post">
							
						<?php the_post_thumbnail('large'); ?>

						<div class="post-content">
	
							<h2><?php echo the_title(); ?></h2>
							
							<?php the_content(); ?></p>

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