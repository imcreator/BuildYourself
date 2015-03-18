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

			<!-- Dynamiczne Menu Zaczyna się Tutaj -->
				
			<div id="nav">

				<?php wp_nav_menu( array('menu' => 'Main', 'container' => 'nav', 'container_id' => 'nav' )); ?>
			

				<!-- Search Box -->

					<?php get_search_form(); ?>

				<!-- Konies Search Box'a -->

			<!-- Koniec Dynamicznej Nawigacji -->
			
			</div>

			<div id="slider"></div>
			
		</div><!-- Koniec Headeru -->