<?php 
// Previous ATTACHMENT link
function ps_adjacent_image_link($prev = true) {
	global $post;
	$post = get_post ( $post );
	$attachments = array_values ( get_children ( Array (
			'post_parent' => $post->post_parent,
			'post_type' => 'attachment',
			'post_mime_type' => 'image',
			'orderby' => 'menu_order ASC, ID ASC' 
	) ) );
	
	foreach ( $attachments as $k => $attachment ) {
		if ($attachment->ID == $post->ID) {
			break;
		}
	}
	
	$k = $prev ? $k - 1 : $k + 1;
	
	if (isset ( $attachments [$k] )) {
		return wp_get_attachment_link ( $attachments [$k]->ID, 'thumbnail', true );
	} else {
		return false;
	}
}
?>