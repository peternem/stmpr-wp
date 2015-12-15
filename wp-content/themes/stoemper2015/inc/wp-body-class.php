<?php 
function sandbox_body_class($print = true) {
	global $wp_query, $current_user;
	
	// It's surely a WordPress blog, right?
	$c = array (
			'wordpress' 
	);
	
	// Applies the time- and date-based classes (below) to BODY element
	sandbox_date_classes ( time (), $c );
	
	// Generic semantic classes for what type of content is displayed
	is_home () ? $c [] = 'home' : null;
	is_archive () ? $c [] = 'archive' : null;
	is_date () ? $c [] = 'date' : null;
	is_search () ? $c [] = 'search' : null;
	is_paged () ? $c [] = 'paged' : null;
	is_attachment () ? $c [] = 'attachment' : null;
	is_404 () ? $c [] = 'four04' : null; // CSS does not allow a digit as first character
	                                              
	// Special classes for BODY element when a single post
	if (is_single ()) {
		$postID = $wp_query->post->ID;
		the_post ();
		
		// Adds 'single' class and class with the post ID
		$c [] = 'single postid-' . $postID;
		
		// Adds classes for the month, day, and hour when the post was published
		if (isset ( $wp_query->post->post_date ))
			sandbox_date_classes ( mysql2date ( 'U', $wp_query->post->post_date ), $c, 's-' );
			
			// Adds category classes for each category on single posts
		if ($cats = get_the_category ())
			foreach ( $cats as $cat )
				$c [] = 's-category-' . $cat->slug;
			
			// Adds tag classes for each tags on single posts
		if ($tags = get_the_tags ())
			foreach ( $tags as $tag )
				$c [] = 's-tag-' . $tag->slug;
			
			// Adds MIME-specific classes for attachments
		if (is_attachment ()) {
			$the_mime = get_post_mime_type ();
			$boring_stuff = array (
					"application/",
					"image/",
					"text/",
					"audio/",
					"video/",
					"music/" 
			);
			$c [] = 'attachment-' . str_replace ( $boring_stuff, "", "$the_mime" );
		}
		
		// Adds author class for the post author
		$c [] = 's-author-' . sanitize_title_with_dashes (get_the_author_login ());
		rewind_posts ();
	} 	

	// Author name classes for BODY on author archives
	else if (is_author ()) {
		$author = $wp_query->get_queried_object ();
		$c [] = 'author';
		//$c [] = 'author-' . $author->user_nicename;
	} 	

	// Category name classes for BODY on category archvies
	else if (is_category ()) {
		$cat = $wp_query->get_queried_object ();
		$c [] = 'category';
		$c [] = 'category-' . $cat->slug;
	} 	

	// Tag name classes for BODY on tag archives
	else if (is_tag ()) {
		$tags = $wp_query->get_queried_object ();
		$c [] = 'tag';
		$c [] = 'tag-' . $tags->slug; // Does not work; however I try to return the tag I get a false. Grrr.
	} 	

	// Page author for BODY on 'pages'
	else if (is_page ()) {
		$pageID = $wp_query->post->ID;
		the_post ();
		$c [] = 'page pageid-' . $pageID;
		$c [] = 'page-author-' . sanitize_title_with_dashes (get_the_author ( 'login' ));
		rewind_posts ();
	}
	
	// For when a visitor is logged in while browsing
	if ($current_user->ID)
		$c [] = 'loggedin';
		
		// Paged classes; for 'page X' classes of index, single, etc.
	if ((($page = $wp_query->get ( "paged" )) || ($page = $wp_query->get ( "page" ))) && $page > 1) {
		$c [] = 'paged-' . $page . '';
		if (is_single ()) {
			$c [] = 'single-paged-' . $page . '';
		} else if (is_page ()) {
			$c [] = 'page-paged-' . $page . '';
		} else if (is_category ()) {
			$c [] = 'category-paged-' . $page . '';
		} else if (is_tag ()) {
			$c [] = 'tag-paged-' . $page . '';
		} else if (is_date ()) {
			$c [] = 'date-paged-' . $page . '';
		} else if (is_author ()) {
			$c [] = 'author-paged-' . $page . '';
		} else if (is_search ()) {
			$c [] = 'search-paged-' . $page . '';
		}
	}
	
	// Separates classes with a single space, collates classes for BODY
	$c = join ( ' ', apply_filters ( 'body_class', $c ) );
	
	// And tada!
	return $print ? print ($c)  : $c;
}
?>