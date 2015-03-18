<?php
/**
 * Displays the index section of the theme.
 *
 */
?>

<?php get_header(); ?>

<?php
	/**
	 * travelify_before_main_container hook
	 */
	do_action( 'travelify_before_main_container' );
?>
<div id="main2" style="width:100%;margin-bottom:20px">
			<article style="width:29%;float:left;margin-bottom:20px;padding:2%;min-height:400px;position:relative;"><img src="<?php bloginfo( 'template_directory' ); ?>/images/travel.jpg" alt="" style="display:block;margin:0 auto;" width="121" height="121"><h4 style="text-align:center;margin:10px 0">Wycieczki</h4><p>Przyłącz się do nas i przeżyj przygodę swojego życia. Odkryj przepiękne, bałkańskie rejony.  Kraje mało odkryte, tajemnicze, ze wspaniałą historią. Kraje ponad wszystko niedoceniane i zapomniane przez obecny świat.</p>
			<div class="entry-meta-bar clearfix">
    			<a class="readmore" href="http://nesanica.pl/wycieczki/" title="Wystawa Psów">Więcej</a>    	
    		</div>
			</article>
			<article style="width:30%;float:left;margin-bottom:20px;padding:2%;min-height:400px;position:relative;"><img src="<?php bloginfo( 'template_directory' ); ?>/images/hunt.jpg" alt="" style="display:block;margin:0 auto;" width="121" height="121"><h4 style="text-align:center;margin:10px 0">Polowania</h4><p style="margin-bottom:0">Bałkany to raj dla polujących. Bogactwo dzików, wilków, zajęcy i jeleni przy dużo mniej restrykcyjnym prawie polowań. Polowania tutaj maja bardzo długą tradycję. Bardzo popularne są łowy ze sforą psów. </p></br></p>
			<div class="entry-meta-bar clearfix">
    			<a class="readmore" href="http://nesanica.pl/polowanie-na-balkanie/" title="Wystawa Psów">Więcej</a>    	
    		</div>
			</article>
			<article style="width:29%;float:left;margin-bottom:20px;padding:2%;min-height:400px;position:relative;"><img src="<?php bloginfo( 'template_directory' ); ?>/images/autos.jpg" alt="" style="display:block;margin:0 auto;" width="121" height="121"><h4 style="text-align:center;margin:10px 0">Przewozy</h4><p>Podróżujemy komfortowym Volkswagenem Touranem. Im nas więcej, tym weselej i ... taniej. Koszty samolotów są dla Ciebie za wysokie bądź masz dosyć przesiadek w Budapeszcie? Jesteś taki sam jak my! Skontaktuj się z nami.<p>
			<div class="entry-meta-bar clearfix">
    			<a class="readmore" href="http://nesanica.pl/przewozy/" title="Wystawa Psów">Więcej</a>    	
    		</div>
			</article>
			
		</div>
<div id="container">
	<?php
		/**
		 * travelify_main_container hook
		 *
		 * HOOKED_FUNCTION_NAME PRIORITY
		 *
		 * travelify_content 10
		 */
		do_action( 'travelify_main_container' );
	?>
</div><!-- #container -->

<?php
	/**
	 * travelify_after_main_container hook
	 */
	do_action( 'travelify_after_main_container' );
?>

<?php get_footer(); ?>
