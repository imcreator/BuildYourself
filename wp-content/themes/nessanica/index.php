<?php get_header(); ?>

		<div class="zawartosc">
		
		<?php get_sidebar('homepage'); ?>	

			<div id="main-content"><!-- Box Po prawej - Głowny kontent -->

					<div id="welcome">
						<h2>Witamy na naszej stronie!</h2>
						<!-- <h2><span>Hunting Club!</span></h2> -->
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis, alias adipisci suscipit voluptas a provident fuga facere, eligendi voluptatum dolorem aliquid reprehenderit nam eos, ipsum in distinctio aperiam porro minima?</p>
						<a href="#">Czytaj Więcej..</a>
					</div>

					<div id="content"><!-- Start Kontent -->
							
						<h2>Ostatnie wydarzenia</h2>

						<div class="post"><!-- Start Postu -->
							<h3>Polowaliśmy w Przemyślu!</h3>
							<img src="<?php bloginfo( 'template_directory' ); ?>/images/image1.png" alt="">	
							
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex unde illo consequatur maxime vel, eum officiis saepe qui ut corrupti tempora accusantium architecto esse, nam reprehenderit reiciendis nihil molestias repellendus!</p>
							<a href="#">Czytaj dalej..</a>
			
						</div><!-- Koniec Postu -->

						<div class="post"><!-- Start Postu -->
							<h3>Wystawa psów w Gdańsku</h3>
							<img src="<?php bloginfo( 'template_directory' ); ?>/images/image2.png" alt="">	
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat molestiae deserunt accusamus eligendi accusantium quasi doloremque asperiores molestias, totam officiis voluptatibus nemo corporis quidem illum ad hic repellat, aperiam tempora.</p>
							<a href="#">Czytaj dalej..</a>
						</div><!-- Koniec Postu -->

					</div><!-- Koniec "małego" Konentu -->
				
			</div><!-- Koniec głównego kontentu -->
			<div id="footer"><p>Nesanica &copy 2015	</p></div>
			<?php wp_footer(); ?>
		</div>
	</div><!-- Koniec Wrappera -->
</body>
</html>