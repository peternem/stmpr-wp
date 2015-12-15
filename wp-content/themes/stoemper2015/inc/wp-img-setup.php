<?php 
// Setup Images for Attachment functions
function image_setup($postid) {
	global $post;
	$post = get_post ( $postid );
	
	// get url
	if (! preg_match ( '/<img ([^>]*)src=(\"|\')(.+?)(\2)([^>\/]*)\/*>/', $post->post_content, $matches )) {
		return false;
	}
	
	// url setup
	$post->image_url = $matches [3];
	if (! $post->image_url = preg_replace ( '/\?w\=[0-9]+/', '', $post->image_url ))
		return false;
	
	$post->image_url = esc_url( $post->image_url, 'raw' );
	
	delete_post_meta ( $post->ID, 'image_url' );
	delete_post_meta ( $post->ID, 'image_tag' );
	
	add_post_meta ( $post->ID, 'image_url', $post->image_url );
	add_post_meta ( $post->ID, 'image_tag', '<img src="' . $post->image_url . '" />' );
}
?>