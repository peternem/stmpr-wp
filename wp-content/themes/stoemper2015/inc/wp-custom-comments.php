<?php 
// Custom callback to list comments in the your-theme style
function custom_comments($comment, $args, $depth) {
	$GLOBALS ['comment'] = $comment;
	$GLOBALS ['comment_depth'] = $depth;
	?>
<li id="comment-<?php comment_ID() ?>" <?php comment_class() ?>>
	<div class="comment-author vcard"><?php commenter_link() ?><
/div>
<div class="comment-meta"><?php
	
printf ( __ ( 'Posted %1$s at %2$s <span class="meta-sep">|</span> <a href="%3$s" title="Permalink to this comment">#</a>', 'your-theme' ), get_comment_date (), get_comment_time (), '#comment-' . get_comment_ID () );
	edit_comment_link ( __ ( 'Edit', 'your-theme' ), ' <span class="meta-sep">|</span> <span class="btn btn-danger">', '</span>' );
	?><
/div>
<?php
	
if ($comment->comment_approved == '0')
		_e ( "\t\t\t\t\t<span class='unapproved'>Your comment is awaiting moderation.</span>\n", 'your-theme' )?>
<div class="comment-content">
<?php
	
comment_text ()?>
</div>
<?php 
// echo the comment reply link
	if ($args ['type'] == 'all' || get_comment_type () == 'comment') :
		comment_reply_link ( array_merge ( $args, array (
				'reply_text' => __ ( 'Reply', 'your-theme' ),
				'login_text' => __ ( 'Log in to reply.', 'your-theme' ),
				'depth' => $depth,
				'before' => '<div class="comment-reply-link">',
				'after' => '</div>' 
		) ) );
	
	endif;
	?>
<?php

} // end custom_comments
?>