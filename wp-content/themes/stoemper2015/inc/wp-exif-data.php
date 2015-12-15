<?php 
// Grab EXIF Data from Attachments http://www.walkernews.net/2009/04/13/turn-on-wordpress-feature-to-display-photo-exif-data-and-iptc-information/
function grab_exif_data() {
	$imgmeta = wp_get_attachment_metadata ( $id );
	// echo $imgmeta['image_meta']['shutter_speed'];

	// Convert the shutter speed retrieve from database to fraction DOES NOT WORK ON THE LIVE SERVER FOR SOME REASON >:-|
	if ($imgmeta ['image_meta'] ['shutter_speed'] == 0) {
		echo "<ul>";
		echo "<li><span class=\"exif-title\">No shutter speed retrieved</span></li>";
		echo "</ul>";
		echo "<br/>";
	} else {
		if ((1 / $imgmeta ['image_meta'] ['shutter_speed']) > 1) {
			if ((number_format ( (1 / $imgmeta ['image_meta'] ['shutter_speed']), 1 )) == 1.3 or number_format ( (1 / $imgmeta ['image_meta'] ['shutter_speed']), 1 ) == 1.5 or number_format ( (1 / $imgmeta ['image_meta'] ['shutter_speed']), 1 ) == 1.6 or number_format ( (1 / $imgmeta ['image_meta'] ['shutter_speed']), 1 ) == 2.5) {
				$pshutter = "1/" . number_format ( (1 / $imgmeta ['image_meta'] ['shutter_speed']), 1, '.', '' ) . " second";
			} else {
				$pshutter = "1/" . number_format ( (1 / $imgmeta ['image_meta'] ['shutter_speed']), 0, '.', '' ) . " second";
			}
		} else {
			$pshutter = $imgmeta ['image_meta'] ['shutter_speed'] . " seconds";
		}
	}

	// Start to display EXIF and IPTC data of digital photograph
	echo "<ul>";
	echo "<li><span class=\"exif-title\">Date Taken:</span> " . date ( "d-M-Y H:i:s", $imgmeta ['image_meta'] ['created_timestamp'] ) . "</li>";
	echo "<li><span class=\"exif-title\">Copyright:</span> " . $imgmeta ['image_meta'] ['copyright'] . "</li>";
	echo "<li><span class=\"exif-title\">Credit:</span> " . $imgmeta ['image_meta'] ['credit'] . "</li>";
	echo "<li><span class=\"exif-title\">Title:</span> " . $imgmeta ['image_meta'] ['title'] . "</li>";
	echo "<li><span class=\"exif-title\">Caption:</span> " . $imgmeta ['image_meta'] ['caption'] . "</li>";
	echo "<li><span class=\"exif-title\">Camera:</span> " . $imgmeta ['image_meta'] ['camera'] . "</li>";
	echo "<li><span class=\"exif-title\">Focal Length:</span> " . $imgmeta ['image_meta'] ['focal_length'] . "mm</li>";
	echo "<li><span class=\"exif-title\">Aperture:</span> f/" . $imgmeta ['image_meta'] ['aperture'] . "</li>";
	echo "<li><span class=\"exif-title\">ISO:</span> " . $imgmeta ['image_meta'] ['iso'] . "</li>";
	echo "<li><span class=\"exif-title\">Shutter Speed:</span> " . $pshutter . "</li>";
	echo "</ul>";
}
add_action ( 'exif_data', 'grab_exif_data' );

?>