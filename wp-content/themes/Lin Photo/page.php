<?php get_header(); ?>

    <div id="templatemo_content_wrapper">

        <div id="templatemo_content">
    
        <div class="column_w210 fl">
            
            <div class="header_01">
             Latest Blog Posts
          </div>

      <?php $myPosts = new WP_Query( 'posts_per_page=5' ); while ( $myPosts->have_posts() ) : $myPosts->the_post(); ?>
        
        <div class="latest_news">

            <div class="header_03"><?php the_date(); ?></div>
            <div class="header_02"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
          <p><?php the_excerpt(); ?></p>

            </div>
      <?php endwhile; ?>  

          <div class="rc_btn_01"><a href="#">Read All</a></div>
          <div class="cleaner"></div>

      </div> <!-- end of a column -->
        
        <div class="column_w430 fl vl_divider">  

	        <?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>      
			    <h2><?php the_title(); ?></h2>
				<small><?php the_content(); ?></small>
	        <?php endwhile; ?>
	        <?php endif; ?>     
              
        </div> <!-- end of a column -->
        
       <div class="column_w210 fl vl_divider">
        
            <div class="header_01">
                Categories
          </div>

            <ul class="category_list">

            <?php global $wpdb; $users=$wpdb->get_results( "SELECT name FROM wp_terms" ); ?>
  
            <?php foreach ( $users as $user ): ?>       
                
              <li><a href="#"><?php echo( $user->name ); ?></a></li>
                  
            <?php endforeach ?>
            
              </ul>
            
            <div class="cleaner"></div>
        </div> <!-- end of a column -->
        
        <div class="margin_bottom_20 h_divider"></div>        
        <div class="margin_bottom_20"></div>
        
        <div class="column_w920">
        
      <div class="column_w190 fl margin_right_40">
                <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/templatemo_image_02.jpg" alt="image" /></a>
              <p>Nam sit amet justo vel libero tincidunt dignissim. Cras magna velit, pellentesque mattis, faucibus vitae, feugiat vitae. <a href="#">Read more...</a></p>                
          </div>
            
      <div class="column_w190 fl margin_right_40">
                <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/templatemo_image_03.jpg" alt="image" /></a>
          <p>Pellentesque tortor metus, gravida ut aliquet non, iaculis nec nisi. Null am ornare, mauris vitae vehicula veh icula. <a href="#">Read more...</a></p>                
          </div>
            
      <div class="column_w190 fl margin_right_40">
                <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/templatemo_image_04.jpg" alt="image" /></a>
          <p>Proin consequat interdum mauris id auctor. In justo dolor, luctus sed tristique vel, porttitor eu enim. In molestie vehicula pretium  iaculis. <a href="#">Read more...</a></p>                
          </div>
            
      <div class="column_w190 fl">
                <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/templatemo_image_05.jpg" alt="image" /></a>
          <p>Suspendisse odio erat, mattis in hend rerit id, iaculis at metus. Aliquam ligula justo, gravida sed pretium eu. <a href="#">Read more...</a></p>                
          </div>
        
          <div class="margin_bottom_15"></div>
        </div>
    
        <div class="cleaner"></div>
    </div> <!-- end of wrapper 02 -->        
    </div> <!-- end of wrapper 01 -->
    
    <div id="templatemo_footer">
    
    <ul class="footer_list">
            <li><a href="#" class="current">Home</a></li>
            <li><a href="#">Gallery</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="#">Forum</a></li>
            <li><a href="#">About Us</a></li>
            <li class="last"><a href="#">Contact Us</a></li>
        </ul> 
        
        <div class="margin_bottom_10"></div>
        
        Copyright © 2048 <a href="#">Company Name</a> | <a href="http://www.iwebsitetemplate.com" target="_parent">Website Templates</a> by <a href="http://www.templatemo.com" target="_parent">Free Templates</a>
        
        <div class="margin_bottom_10"></div>
        
        <a href="http://validator.w3.org/check?uri=referer"><img style="border:0;width:88px;height:31px" src="http://www.w3.org/Icons/valid-xhtml10" alt="Valid XHTML 1.0 Transitional" width="88" height="31" vspace="8" border="0" /></a>
                <a href="http://jigsaw.w3.org/css-validator/check/referer"><img style="border:0;width:88px;height:31px"  src="http://jigsaw.w3.org/css-validator/images/vcss-blue" alt="Valid CSS!" vspace="8" border="0" /></a>
                
    </div> <!-- end of footer -->
</div> <!-- end of container -->
<!--  Free CSS Template is provided by www.TemplateMo.com  -->
<div align=center>This template  downloaded form <a href='http://all-free-download.com/free-website-templates/'>free website templates</a></div></body>
</html>












