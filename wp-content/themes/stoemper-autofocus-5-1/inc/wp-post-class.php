<?php 
// Generates semantic classes for each post DIV element
function sandbox_post_class($print = true) {
	global $post, $sandbox_post_alt;
	
	// hentry for hAtom compliace, gets 'alt' for every other post DIV, describes the post type and p[n]
	$c = array (
			'hentry',
			"p$sandbox_post_alt",
			$post->post_type,
			$post->post_status 
	);
	
	// Author for the post queried
	$c [] = 'author-' . sanitize_title_with_dashes ( get_the_author ( 'login' ));
	
	// Category for the post queried
	foreach ( ( array ) get_the_category () as $cat )
		$c [] = 'category-' . $cat->slug;
		
		// Tags for the post queried
	foreach ( ( array ) get_the_tags () as $tag )
		$c [] = 'tag-' . $tag->slug;
		
		// For password-protected posts
	if ($post->post_password)
		$c [] = 'protected';
		
		// Applies the time- and date-based classes (below) to post DIV
	sandbox_date_classes ( mysql2date ( 'U', $post->post_date ), $c );
	
	// If it's the other to the every, then add 'alt' class
	if (++ $sandbox_post_alt % 2)
		$c [] = 'alt';
		
		// Separates classes with a single space, collates classes for post DIV
	$c = join ( ' ', apply_filters ( 'post_class', $c ) );
	
	// And tada!
	return $print ? print ($c)  : $c;
}

// Define the num val for 'alt' classes (in post DIV and comment LI)
$sandbox_post_alt = 1;
?>