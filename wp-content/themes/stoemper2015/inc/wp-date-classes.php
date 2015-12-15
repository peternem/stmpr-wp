<?php
// Generates time- and date-based classes for BODY, post DIVs, and comment LIs; relative to GMT (UTC)
function sandbox_date_classes($t, &$c, $p = '') {
	$t = $t + (get_option ( 'gmt_offset' ) * 3600);
	$c [] = $p . 'y' . gmdate ( 'Y', $t ); // Year
	$c [] = $p . 'm' . gmdate ( 'm', $t ); // Month
	$c [] = $p . 'd' . gmdate ( 'd', $t ); // Day
	$c [] = $p . 'h' . gmdate ( 'H', $t ); // Hour
}
?>