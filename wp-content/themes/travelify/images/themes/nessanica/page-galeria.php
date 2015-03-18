<?php
/*
	Template Name: Galeria
*/
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>">
	<link rel="stylesheet" href="<?php bloginfo( 'template_directory' ); ?>/css/reset.css">
	<title><?php bloginfo( 'name' ); ?></title>

	<?php wp_head(); ?>

</head>
<body >
	<div id="wrapper"><!-- Wrapper Strony  960px margin:0 auto-->

		<div id="header"><!-- Header Startuje Tutaj -->
			
			<div id="nav"><!-- Dynamiczne Menu Zaczyna się Tutaj -->
			
				<?php wp_nav_menu( array('menu' => 'Main', 'container' => 'nav', 'container_id' => 'nav' )); ?>
			

				<!-- Search Box -->

				<!-- Konies Search Box'a -->

		</div><!-- Koniec Dynamicznej Nawigacji -->
	</div>
	<div class="zawartosc">

		<div id="galeria">	
			
			<div class="page-title">
				<img class="h-left" src="<?php bloginfo( 'template_directory'); ?>/images/h-left.png" alt="">
				<img class="h-right" src="<?php bloginfo( 'template_directory'); ?>/images/h-right.png" alt="">
				<h2><?php the_title(); ?></h2>
			</div>

			 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

				<?php the_content(); ?>

			 <?php endwhile; else : ?>
			 	<p><?php _e( 'Przykro mi, ale nie mam nic do wyświetlenia dla Ciebie :(' ); ?></p>
			 <?php endif; ?>

		</div>
	</div>
	<div id="footer"><p>Nessanica &copy 2015</p></div>
			<?php wp_footer(); ?>
		</div>
	</div><!-- Koniec Wrappera -->
</body>
</html>