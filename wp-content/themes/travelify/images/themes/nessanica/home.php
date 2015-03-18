<?php get_header(); ?>

		<div class="zawartosc">
		
		<?php get_sidebar('homepage'); ?>

		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('welcome-content') ) : endif; ?>

			<div id="main-content"><!-- Box Po prawej - Głowny kontent -->

					<div id="content"><!-- Start Kontent -->
							
						<h2>Ważne wydarzenia</h2>

						<?php 
							global $query_string;
	        				query_posts ('posts_per_page=2');
	        				if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

							<div class="post"><!-- Start Postu -->
								<h3><?php the_title(); ?></h3>
	
								<?php echo get_the_post_thumbnail(); ?> 
								<p><?php the_excerpt(); ?></p>
								<a href="<?php the_permalink(); ?>">Czytaj dalej..</a>
							</div><!-- Koniec Postu -->
						
						<?php endwhile; else : ?>

							<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>

						<?php endif; ?>	

					</div><!-- Koniec "małego" Konentu -->
				
			</div><!-- Koniec głównego kontentu -->
			<div id="footer"><p>Nesanica &copy 2015	</p></div>
			<?php wp_footer(); ?>
		</div>
	</div><!-- Koniec Wrappera -->
</body>
</html>