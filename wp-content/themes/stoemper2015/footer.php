	</main><!-- .container .main-->
	<footer class="container page-footer">
		<?php wp_nav_menu( array('container' => 'nav','container_class' => 'menu-footer','menu_class' => 'menu-list','theme_location' => 'footer') ); ?>
		<div class="site-credits">
			<p>All content is &copy; <?php print(date(Y)); ?> by Stoemper, INC. <br>All rights reserved.</p> 
		</div>
	</footer><!-- #footer -->
	<?php wp_footer(); ?>
</body>
</html>