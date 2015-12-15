<?php 
// Post Attachment image function. Image URL for CSS Background.
function the_post_image_url($size = large) {
	global $post;
	$linkedimgurl = get_post_meta ( $post->ID, 'image_url', true );
	
	if ($images = get_children ( array (
			'post_parent' => get_the_ID (),
			'post_type' => 'attachment',
			'numberposts' => 1,
			'post_mime_type' => 'image' 
	) )) {
		foreach ( $images as $image ) {
			$attachmenturl = wp_get_attachment_image_src ( $image->ID, $size );
			$attachmenturl = $attachmenturl [0];
			$attachmentimage = wp_get_attachment_image ( $image->ID, $size );
			
			echo '' . $attachmenturl . '';
		}
	} elseif ($linkedimgurl) {
		
		echo $linkedimgurl;
	} elseif ($linkedimgurl && $images = get_children ( array (
			'post_parent' => get_the_ID (),
			'post_type' => 'attachment',
			'numberposts' => 1,
			'post_mime_type' => 'image' 
	) )) {
		foreach ( $images as $image ) {
			$attachmenturl = wp_get_attachment_image_src ( $image->ID, $size );
			$attachmenturl = $attachmenturl [0];
			$attachmentimage = wp_get_attachment_image ( $image->ID, $size );
			
			echo '' . $attachmenturl . '';
		}
	} else {
		echo '' . get_bloginfo ( 'stylesheet_directory' ) . '/img/no-attachment.gif';
	}
}
?>