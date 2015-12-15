<?php 
// Generates semantic classes for each comment LI element
function sandbox_comment_class($print = true) {
	global $comment, $post, $sandbox_comment_alt;
	
	// Collects the comment type (comment, trackback),
	$c = array (
			$comment->comment_type 
	);
	
	// Counts trackbacks (t[n]) or comments (c[n])
	if ($comment->comment_type == 'trackback') {
		$c [] = "t$sandbox_comment_alt";
	} else {
		$c [] = "c$sandbox_comment_alt";
	}
	
	// If the comment author has an id (registered), then print the log in name
	if ($comment->user_id > 0) {
		$user = get_userdata ( $comment->user_id );
		
		// For all registered users, 'byuser'; to specificy the registered user, 'commentauthor+[log in name]'
		$c [] = "byuser comment-author-" . sanitize_title_with_dashes ($user->user_login);
		// For comment authors who are the author of the post
		if ($comment->user_id === $post->post_author)
			$c [] = 'bypostauthor';
	}
	
	// If it's the other to the every, then add 'alt' class; collects time- and date-based classes
	sandbox_date_classes ( mysql2date ( 'U', $comment->comment_date ), $c, 'c-' );
	if (++ $sandbox_comment_alt % 2)
		$c [] = 'alt';
		
		// Separates classes with a single space, collates classes for comment LI
	$c = join ( ' ', apply_filters ( 'comment_class', $c ) );
	
	// Tada again!
	return $print ? print ($c)  : $c;
}
?>