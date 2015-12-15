<?php 
// For category lists on category archives: Returns other categories except the current one (redundant)
function sandbox_cats_meow($glue) {
	$current_cat = single_cat_title ( '', false );
	$separator = "\n";
	$cats = explode ( $separator, get_the_category_list ( $separator ) );
	
	foreach ( $cats as $i => $str ) {
		if (strstr ( $str, ">$current_cat<" )) {
			unset ( $cats [$i] );
			break;
		}
	}
	
	if (empty ( $cats ))
		return false;
	
	return trim ( join ( $glue, $cats ) );
}
?>