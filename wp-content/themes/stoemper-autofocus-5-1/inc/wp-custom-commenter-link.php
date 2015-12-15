<?php 
// Produces an avatar image with the hCard-compliant photo class
function commenter_link() {
	$commenter = get_comment_author_link ();
	if (ereg ( '<a[^>]* class=[^>]+>', $commenter )) {
		$commenter = ereg_replace ( '(<a[^>]* class=[\'"]?)', '\\1url ', $commenter );
	} else {
		$commenter = ereg_replace ( '(<a )/', '\\1class="url "', $commenter );
	}
	$avatar_email = get_comment_author_email ();
	$avatar = str_replace ( "class='avatar", "class='photo avatar", get_avatar ( $avatar_email, 50 ) );
	echo $avatar . ' <span class="fn n">' . $commenter . '</span>';
} // end commenter_link
?>