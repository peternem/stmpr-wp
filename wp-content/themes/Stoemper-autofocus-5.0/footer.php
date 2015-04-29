	</div><!-- .container .hfeed-->
	<footer class="container">
		<nav>
			<div class="footer-credit">
			    <?php
			        wp_nav_menu( array('container_class' => 'menu-footer','theme_location' => 'footer') );
			     ?>
			    <p>All content is &copy; <?php print(date(Y)); ?> by <a href="http://stoemper.com/index.php" title="Stoemper Bikes" rel="home">Stoemper, INC</a>. All rights reserved.</p> 
				<p>
					<span id="generator-link">Built on:</span>
					<span id="generator-link"><a href="http://wordpress.org/" title="<?php _e('WordPress', 'sandbox'); ?>" rel="generator"><?php _e('WordPress', 'sandbox'); ?></a></span>
					and
					<span id="generator-link"><a href="http://getbootstrap.com/" title="<?php _e('Bootstrap', 'sandbox'); ?>" rel="generator"><?php _e('Bootstrap', 'sandbox'); ?></a></span>
				</p>
			</div>
		</nav>
		
	</footer><!-- #footer -->
	<?php wp_footer(); ?>
</body>
</html>