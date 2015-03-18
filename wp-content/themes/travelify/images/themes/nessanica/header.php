<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>">
	<link rel="stylesheet" href="<?php bloginfo( 'template_directory' ); ?>/css/reset.css">
	<link href='http://fonts.googleapis.com/css?family=Alegreya&subset=latin,latin-ext' rel='stylesheet' type='text/css'>	
	<link href='http://fonts.googleapis.com/css?family=Anaheim&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
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

				<ul id="social">
					<li><a id="facebook" href="#"><img src="<?php bloginfo( 'template_directory');?>/images/facebook.png" width='55' height='55' alt=""></a></li>
					<li><a href=""><img id="google" src="<?php bloginfo( 'template_directory');?>/images/google.png" width="131" height="30" alt=""></a></li>
					<li><a href=""><img id="wordpress" src="<?php bloginfo( 'template_directory');?>/images/wordpress.png" width="" height="" alt=""></a></li>
					<li><a href=""><img id="tweeter" src="<?php bloginfo( 'template_directory');?>/images/tweeter.png" width="" height="" alt=""></a></li>
				</ul>

				<!-- Konies Search Box'a -->

			<!-- Koniec Dynamicznej Nawigacji -->
			
			</div>

			<div id="slider">
			
				<?php echo do_shortcode("[metaslider id=874]"); ?>
				
			</div>

		</div><!-- Koniec Headeru -->