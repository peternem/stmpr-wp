<?php 
// For tag lists on tag archives: Returns other tags except the current one (redundant)
function sandbox_tag_ur_it($glue) {
	$current_tag = single_tag_title ( '', '', false );
	$separator = "\n";
	$tags = explode ( $separator, get_the_tag_list ( "", "$separator", "" ) );
	
	foreach ( $tags as $i => $str ) {
		if (strstr ( $str, ">$current_tag<" )) {
			unset ( $tags [$i] );
			break;
		}
	}
	
	if (empty ( $tags ))
		return false;
	
	return trim ( join ( $glue, $tags ) );
}
?>