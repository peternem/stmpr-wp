<?php 
function previous_post_excerpt($in_same_cat = false, $excluded_categories = '') {
	if (is_attachment ())
		$post = &get_post ( $GLOBALS ['post']->post_parent );
	else
		$post = get_previous_post ( $in_same_cat, $excluded_categories );
	
	if (! $post)
		return;
	$post = &get_post ( $post->ID );
	echo tl_post_excerpt ( $post );
}
function next_post_excerpt($in_same_cat = false, $excluded_categories = '') {
	$post = get_next_post ( $in_same_cat, $excluded_categories );
	
	if (! $post)
		return;
	$post = &get_post ( $post->ID );
	echo tl_post_excerpt ( $post );
}
?>