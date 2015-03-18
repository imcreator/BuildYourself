<?php 

/*
	Template Name: Posty
*/

get_header(); ?>

		<div class="zawartosc">
		
		<?php get_sidebar('homepage'); ?>	

			<div id="main-content"><!-- Box Po prawej - Głowny kontent -->
				
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

					<div class="post">
							
						<?php the_post_thumbnail('thumbnail'); ?>

						<div class="post-content">
	
							<h2><?php echo the_title(); ?></h2>
							<h6>Dodano: <b><?php the_modified_time('j F Y'); ?></b></h6>
							<?php the_content(); ?>
							<p style="margin-top: 20px;font-size:15px;"><?php the_excerpt(); ?></p>
						</div>
						
					</div>

				<?php the_content(); ?>

			 <?php endwhile; else : ?>
			 	<p><?php _e( 'Przykro mi, ale nie mam nic do wyświetlenia dla Ciebie :(' ); ?></p>
			 <?php endif; ?>
					
			</div><!-- Koniec głównego kontentu -->
			<div id="footer"><p>Nessanica &copy 2015	</p></div>
			<?php wp_footer(); ?>
		</div>
	</div><!-- Koniec Wrappera -->
</body>
</html>s