<?php 
// Custom callback to list pings
function custom_pings($comment, $args, $depth) {
	$GLOBALS ['comment'] = $comment;
	?>
<li id="comment-<?php comment_ID() ?>" <?php comment_class() ?>>
				<div class="comment-author"><?php
	
printf ( __ ( 'By %1$s on %2$s at %3$s', 'your-theme' ), get_comment_author_link (), get_comment_date (), get_comment_time () );
	edit_comment_link ( __ ( 'Edit', 'your-theme' ), ' <span class="meta-sep">|</span> <span class="btn btn-danger">', '</span>' );
	?><
/div>
<?php
	
if ($comment->comment_approved == '0')
		_e ( '\t\t\t\t\t<span class="unapproved">Your trackback is awaiting moderation.</span>\n', 'your-theme' )?>
<div class="comment-content">
<?php
	
comment_text ()?>
</div>
<?php

} // end custom_pings
?>