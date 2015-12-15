<?php 
// Fixes Next and Previous ATTACHMENT links
function ps_previous_image_link($f) {
	$i = ps_adjacent_image_link ( true );
	if ($i) {
		echo str_replace ( "%link", $i, $f );
	}
}

// Next ATTACHMENT link
function ps_next_image_link($f) {
	$i = ps_adjacent_image_link ( false );
	if ($i) {
		echo str_replace ( "%link", $i, $f );
	}
}
?>