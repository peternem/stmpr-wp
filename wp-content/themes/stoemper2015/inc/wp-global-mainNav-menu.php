<div id="navigation">
	<div id="menu_wrapper">
		<?php include 'sitewide-stoemperZilla-wp.php' ?>
		<nav>
			<?php wp_nav_menu(array('container_class' => 'navLeft','theme_location' => 'primary'));?>
			<?php wp_nav_menu( array('container_class' => 'navRight','theme_location' => 'secondary') ); ?>
		</nav>
	</div>
</div>