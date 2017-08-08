
	</div>
	<div id="footer">
        <div class="footertop">
        <h3>ALWAYS APPRECIATE OUR PARTNERS</h3>
        <img class="partners" src="<?php bloginfo('template_directory'); ?>/images/rover.png">
		<img class="partners" src="<?php bloginfo('template_directory'); ?>/images/fred_meyer.png">
        <img class="partners" id="last" src="<?php bloginfo('template_directory'); ?>/images/badge.png">
        </div>
        <div class="footerdown">
		<div id="div-<?php the_ID(); ?>" class="left">
            <h3>Desiderate Rescue</h3>
			<?php if (have_posts() ): while (have_posts() ) : the_post(); ?>
            <p><?php the_content(); ?></p>
             <?php endwhile; endif; ?>
              </div>
           		
		<div id="right">
		<p>From unwanted to love?</p>	
		<a href="#"><img class="icon" src="<?php bloginfo('template_directory'); ?>/images/dog.png"></a>
		<a href="https://urlgeni.us/instagram/Y3KR"><img class="icon" src="<?php bloginfo('template_directory'); ?>/images/instagram.png"></a>
        <a href="https://urlgeni.us/facebook/fX4c"><img class="icon" src="<?php bloginfo('template_directory'); ?>/images/facebook.png"></a>
        <p>Phone:206.777.7777</p>
        <p>desideratarescue@gmail.com</p>
		</div>
		
        <div class="footerbottom">
		<p>&copy All Rights Reserved to Desiderata Rescue</p>
        <small>front-page.php</small>
        </div>
    </div>
	

</body>
</html>

   