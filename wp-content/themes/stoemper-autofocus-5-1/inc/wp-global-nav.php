<?php 
// Produces a list of pages in the header without whitespace -- er, I mean negative space.
function sandbox_globalnav() {
	echo '<div id="menu"><ul><li class="page_item"><a href="' . home_url('home') . '/" title="' . get_bloginfo ( 'name' ) . '" rel="home">Home</a></li>';
	$menu = wp_list_pages ( 'title_li=&sort_column=menu_order&echo=0' ); // Params for the page list in header.php
	echo str_replace ( array (
			"\r",
			"\n",
			"\t"
	), '', $menu );
	echo '<li class="page_item"><a href="' . get_bloginfo_rss ( 'rss2_url' ) . '">RSS</a></li></ul></div>';
}
?>