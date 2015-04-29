		</div>
		<footer id="footer">
			<nav>
			    <?php
			        wp_nav_menu( array('container_class' => 'menu-footer','theme_location' => 'footer') );
			     ?>
			    <p>All content is &copy; <?php print(date(Y)); ?> by <a href="http://stoemper.com/index.php" title="Stoemper Bikes" rel="home">Stoemper, INC</a>. All rights reserved.</p> 
			<p id="footer-credit">
				<span id="generator-link"><a href="http://wordpress.org/" title="<?php _e('WordPress', 'sandbox'); ?>" rel="generator"><?php _e('WordPress', 'sandbox'); ?></a></span>
				<span class="meta-sep">|</span>
				<span id="theme-link"><a href="#" title="<?php _e('Stoemper/Autofocus for WordPress', 'sandbox'); ?>" rel="designer"><?php _e('Stoemper-Autofocus', 'sandbox'); ?></a></span>
				<span class="meta-sep">|</span>
				<a href="http://www.allancole.com/wordpress/themes/autofocus" title="<?php _e('Autofocus', 'sandbox'); ?>"><?php _e('Autofocus', 'sandbox'); ?></a>
			</p>
			</nav>
			
		</footer><!-- #footer -->
	</div><!-- #wrapper .hfeed -->
	<?php wp_footer(); ?>
</body>
</html>
