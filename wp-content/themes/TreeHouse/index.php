<?php get_header(); ?>

	

	<section class="row">
	     <div class="small-12 columns text-center">
	       <div class="leader">
			<h1>Posts</h1><hr>
	       <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	          
	        	<h1><?php the_title(); ?></h1>
	        	<p><?php the_content(); ?></p>        
	        
	       	<?php endwhile; else : ?>

				<p><?php _e( 'Przepraszam, ale nie mam nic do wyświetlenia dla Ciebie :(' ); ?></p>
			
			<?php endif; ?>

	       </div>
	    </div>
	</section>
	    
	

<?php get_footer(); ?>

