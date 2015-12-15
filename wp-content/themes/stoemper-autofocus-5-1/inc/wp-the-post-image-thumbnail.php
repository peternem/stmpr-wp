<?php 
// Post Attachment image function. Direct link to file.
function the_post_image($size = thumbnail) {
	global $post;
	$linkedimgtag = get_post_meta ( $post->ID, 'image_tag', true );
	
	if ($images = get_children ( array (
			'post_parent' => get_the_ID (),
			'post_type' => 'attachment',
			'numberposts' => 1,
			'post_mime_type' => 'image' 
	) )) {
		foreach ( $images as $image ) {
			$attachmenturl = wp_get_attachment_url ( $image->ID );
			$attachmentimage = wp_get_attachment_image ( $image->ID, $size );
			
			echo '' . $attachmentimage . '';
		}
	} elseif ($linkedimgtag) {
		
		echo $linkedimgtag;
	} elseif ($linkedimgtag && $images = get_children ( array (
			'post_parent' => get_the_ID (),
			'post_type' => 'attachment',
			'numberposts' => 1,
			'post_mime_type' => 'image' 
	) )) {
		foreach ( $images as $image ) {
			$attachmenturl = wp_get_attachment_url ( $image->ID );
			$attachmentimage = wp_get_attachment_image ( $image->ID, $size );
			
			echo '' . $attachmentimage . '';
		}
	} else {
		echo '<img src="' . get_bloginfo ( 'stylesheet_directory' ) . '/img/no-attachment-large.gif" />';
	}
}

?>